<?php
/**
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
 */

if (!defined('_PS_VERSION_'))
	exit;
require_once(dirname(__FILE__) . '/classes/ETS_Defines.php');
class Ets_searchbycategory extends Module
{
    private $errorMessage;
    public $configs;
    public $baseAdminPath;
    public $fields_form;
    private $categoryDropDown = '';
    private $depthLevel = false;
    private $excludedCats = array();
    private $categoryPrefix = '-';
    private $_html;
    private $is178;
	public function __construct()
	{
		$this->name = 'ets_searchbycategory';
		$this->tab = 'search_filter';
		$this->version = '1.0.4';
		$this->author = 'PrestaHero';
		$this->need_instance = 0;
        $this->bootstrap = true;
		parent::__construct();
		$this->displayName = $this->l('Search by category');
		$this->description = $this->l('Quick search block with categories dropdown');
$this->refs = 'https://prestahero.com/';
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        //Config fields
        $this->categoryPrefix = Configuration::get('ETS_BLOCKSEARCH_CAT_PREFIX');
        $this->depthLevel = (int)Configuration::get('ETS_BLOCKSEARCH_DEPTH_LEVEL');
        $cats = Configuration::get('ETS_BLOCKSEARCH_EXCLUDED_CATS');
        $this->is178 = version_compare(_PS_VERSION_, '1.7.8.0', '>=');
        if($cats)
            $this->excludedCats = explode(',', $cats);        
	}    
	public function install()
	{
        $dir = _PS_ROOT_DIR_.'/override/controllers/front/listing';
        if(!is_dir($dir)){
            @mkdir($dir, 0777);
        }
        Configuration::updateValue('PS_SEARCH_AJAX',1);
        if (!parent::install()
            || !$this->_installDb()
            || !$this->registerHook('top')
            || !$this->registerHook('displayTop')
            || !$this->registerHook('customsearch')
            || !$this->registerHook('header')
            || !$this->registerHook('displayHeader')
            || !$this->registerHook('rightColumn')
            || !$this->registerHook('displayNav')
            || !$this->registerHook('displayMobileTopSiteMap')
            || !$this->registerHook('displayBackOfficeHeader'))
            return false;
        return true;
	}
    public static function getSearchedCatList($trees)
    {
        $ids = array();
        if($trees)
        {
            foreach($trees as $tree)
            {
                $ids[] = $tree['id_category'];
                if(isset($tree['children']) && $tree['children'])
                { 
                    $subIds = self::getSearchedCatList($tree['children']);
                    if($subIds && is_array($subIds))
                        $ids = array_merge($ids, $subIds);
                }
            }
        }
        return $ids;
    }
    public static function getCategoriesTreeSearch($id_root, $active = true, $id_lang = null)
    {
        $tree = array();
        if(is_null($id_lang))
            $id_lang = (int)Context::getContext()->language->id;
        $sql = "SELECT c.id_category, cl.name
                FROM `"._DB_PREFIX_."category` c
                LEFT JOIN `"._DB_PREFIX_."category_lang` cl ON c.id_category = cl.id_category AND cl.id_lang = ".(int)$id_lang."
                WHERE c.id_category = ".(int)$id_root.($active ? " AND  c.active = 1" : "");
        if($category = Db::getInstance()->getRow($sql))
        {            
            $cat = array(
                            'id_category' => $id_root,
                            'name' => $category['name']
                        );            
            $children = self::getChildrenCategoriesSearch($id_root, $active, $id_lang);
            $temp = array();
            if($children)
            {
                foreach($children as $child)
                {
                    $arg = self::getCategoriesTreeSearch($child['id_category'], $active, $id_lang);
                    if($arg && isset($arg[0]))
                        $temp[] = $arg[0];
                }                    
            }
            $cat['children'] = $temp;
            $tree[] = $cat;
        }
        return $tree;            
    }
    public static function getChildrenCategoriesSearch($id_root, $active = true, $id_lang = null)
    {
        if(is_null($id_lang))
            $id_lang = (int)Context::getContext()->language->id;
        $sql = "SELECT c.id_category, cl.name
                FROM `"._DB_PREFIX_."category` c
                LEFT JOIN `"._DB_PREFIX_."category_lang` cl ON c.id_category = cl.id_category AND cl.id_lang = ".(int)$id_lang."
                WHERE c.id_parent = ".(int)$id_root." ".($active ? " AND  c.active = 1" : "");
        return Db::getInstance()->executeS($sql);
    } 
    public function _installDb()
    {
        $languages = Language::getLanguages(false);
        $configs = ETS_Defines::getInstance()->getConfigs();
        if($configs)
        {
            foreach($configs as $key => $config)
            {
                if(isset($config['lang']) && $config['lang'])
                {
                    $values = array();
                    foreach($languages as $lang)
                    {
                        $values[$lang['id_lang']] = isset($config['default']) ? $config['default'] : '';
                    }
                    Configuration::updateValue($key, $values,true);
                }
                else
                    Configuration::updateValue($key, isset($config['default']) ? $config['default'] : '',true);
            }
        }        
        return true;
    }    
    private function _uninstallDb()
    {
        $configs = ETS_Defines::getInstance()->getConfigs();
        if($configs)
        {
            foreach($configs as $key => $config)
            {
                Configuration::deleteByName($key);
            }
            unset($config);
        } 
        $dirs = array('config');
        foreach($dirs as $dir)
        {
            $files = glob(dirname(__FILE__).'/views/img/'.$dir.'/*'); 
            foreach($files as $file){ 
              if(is_file($file) && $file != dirname(__FILE__).'/views/img/'.$dir.'/index.php')
                @unlink($file); 
            }
        }       
        return true;
    }       
	public function hookdisplayMobileTopSiteMap($params)
	{
		$this->smarty->assign(array('hook_mobile' => true, 'instantsearch' => false));
		$params['hook_mobile'] = true;
		return $this->hookTop($params);
	}

    public function renderCategoryTree($params)
    {
        if ($this->context->employee){
            $tree = new HelperTreeCategories($params['tree']['id'], isset($params['tree']['title']) ? $params['tree']['title'] : null);

            if (isset($params['name'])) {
                $tree->setInputName($params['name']);
            }

            if (isset($params['tree']['selected_categories'])) {
                $tree->setSelectedCategories($params['tree']['selected_categories']);
            }

            if (isset($params['tree']['disabled_categories'])) {
                $tree->setDisabledCategories($params['tree']['disabled_categories']);
            }

            if (isset($params['tree']['root_category'])) {
                $tree->setRootCategory($params['tree']['root_category']);
            }

            if (isset($params['tree']['use_search'])) {
                $tree->setUseSearch($params['tree']['use_search']);
            }

            if (isset($params['tree']['use_checkbox'])) {
                $tree->setUseCheckBox($params['tree']['use_checkbox']);
            }

            if (isset($params['tree']['set_data'])) {
                $tree->setData($params['tree']['set_data']);
            }
            return $tree->render();
        }
	}
	public function hookDisplayHeader($params)
	{

		$this->context->controller->addCSS(($this->_path).'views/css/blocksearch.css', 'all');
		if (Configuration::get('PS_INSTANT_SEARCH'))
			$this->context->controller->addCSS(_THEME_CSS_DIR_.'product_list.css');

		if (Configuration::get('PS_SEARCH_AJAX') || Configuration::get('PS_INSTANT_SEARCH'))
		{
			Media::addJsDef(array('search_url' => $this->context->link->getPageLink('search', Tools::usingSecureMode())));
			$this->context->controller->addJS($this->_path.'views/js/blocksearch.js');
            $this->context->controller->addJS($this->_path.'views/js/autocomplete.js');
		}
		if (Module::isEnabled('productcomments')) {
            $this->context->controller->addJS($this->_path.'views/js/productcomment.js');
        }
		$tpl_var = array();
		if (Module::isEnabled('ets_searchbycategory')
            && Tools::getValue('controller') == 'search'
            && Tools::isSubmit('searched_category')
        ){
		    $total = Search::find($this->context->language->id,Tools::getValue('search_query'))['total'];
		    $query = '"'.Tools::getValue('search_query').'"';
		    if ($total){
                Media::addJsDef(array('result_desc' => sprintf($this->l('Showing %d results for %s '),$total,$query)));
            }else{
                Media::addJsDef(array('result_desc' => sprintf($this->l('There is no result for %s '),$query)));
            }
		    $tpl_var['ETS_DISPLAY_PRICE'] = Configuration::get('ETS_DISPLAY_PRICE');
		    $tpl_var['ETS_DISPLAY_RATING'] = Configuration::get('ETS_DISPLAY_RATING');
        }
        $tpl_var['ETS_BLOCKSEARCH_BUTTON_COLOR'] = Configuration::get('ETS_BLOCKSEARCH_BUTTON_COLOR');
        $tpl_var['ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR'] = Configuration::get('ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR');
        $tpl_var['ETS_DISPLAY_PRICE'] = Configuration::get('ETS_DISPLAY_PRICE');
        $tpl_var['ETS_DISPLAY_RATING'] = Configuration::get('ETS_DISPLAY_RATING');
        Media::addJsDef(array('ETS_BLOCKSEARCH_BUTTON_COLOR'=>Configuration::get('ETS_BLOCKSEARCH_BUTTON_COLOR')));
		$this->smarty->assign($tpl_var);
        return $this->display(__FILE__,'head.tpl');
	}

    public function hookCustomsearch($params)
	{
	   return $this->showTopSearch($params);   
	}

	public function hookRightColumn($params)
	{
	    $otpionsHtml = '';
        if(Configuration::get('ETS_BLOCKSEARCH_CACHE'))
        {
            if(!@file_exists(dirname(__FILE__).'/cache/options.html'))            
            {
                $categoriesTree = $this->getCategoriesTree(2); 
                $this->getCategoriesDropdown($categoriesTree);  
                @file_put_contents(dirname(__FILE__).'/cache/options.html',$this->categoryDropDown);   
            }        
            $otpionsHtml = Tools::file_get_contents(dirname(__FILE__).'/cache/options.html');    
        }
        else
        {
            $categoriesTree = $this->getCategoriesTree(2); 
            $this->getCategoriesDropdown($categoriesTree);  
            $otpionsHtml = $this->categoryDropDown;
        }
        $categoriesTree = $this->getCategoriesTree(2); 
        $this->getCategoriesDropdown($categoriesTree);                
        $this->smarty->assign(array(
            'searched_categories' => $otpionsHtml ? $this->displayDropdown(Configuration::get('ETS_BLOCKSEARCH_TITLE',$this->context->language->id),$otpionsHtml) : false,
        ));
        if (Tools::getValue('search_query') || !$this->isCached('blocksearch.tpl', $this->getCacheId()))
		{
			$this->calculHookCommon();
			$this->smarty->assign(array(
				'blocksearch_type' => 'block',
                'id_lang' => $this->context->language->id,
				'search_query' => (string)Tools::getValue('search_query')
				)
			);
		}
		return $this->display(__FILE__, 'blocksearch.tpl', Tools::getValue('search_query') ? null : $this->getCacheId());
	}
    public function displayDropdown($searchTitle, $htmlOptions)
    {
        $this->smarty->assign(array(
            'searchTitle' => $searchTitle,
            'htmlOptions' => $htmlOptions,
        ));
        return $this->display(__FILE__,'dropdown.tpl');
    }
    public function hookDisplayBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name || Tools::getValue('configure') == $this->name) {
            $this->context->controller->addCSS($this->_path . 'views/css/admin.css');
            $this->context->controller->addJS($this->_path.'views/js/admin.js');
            if ($this->is178){
                $this->context->controller->addJS($this->_path.'views/js/colorpicker.js');
            }
            Media::addJsDef(['base_url'=>$this->context->link->getAdminLink('AdminModules'). '&configure='.$this->name]);
        }
    }
    public function hookTop($params)
	{
	    if (Configuration::get('ETS_BLOCKSEARCH_ENABLE_LIVE_MODE')) {
            return $this->showTopSearch($params);
        }
	}

    public function hookDisplayTop($params)
    {
        if (Configuration::get('ETS_BLOCKSEARCH_ENABLE_LIVE_MODE')) {

            return $this->showTopSearch($params);
        }
	}
    
    public function showTopSearch($params){
        $otpionsHtml = '';

        if(Configuration::get('ETS_BLOCKSEARCH_CACHE'))
        {
            if(!@file_exists(dirname(__FILE__).'/cache/options.html'))            
            {
                $categoriesTree = $this->getCategoriesTree(2); 
                $this->getCategoriesDropdown($categoriesTree);  
                @file_put_contents(dirname(__FILE__).'/cache/options.html',$this->categoryDropDown);   
            }        
            $otpionsHtml = Tools::file_get_contents(dirname(__FILE__).'/cache/options.html');    
        }
        else
        {
            $categoriesTree = $this->getCategoriesTree(2); 
            $this->getCategoriesDropdown($categoriesTree);  
            $otpionsHtml = $this->categoryDropDown;
        }
        $categoriesTree = $this->getCategoriesTree(2); 
        $this->getCategoriesDropdown($categoriesTree);           
        $this->smarty->assign(array(
            'searched_categories' => $otpionsHtml ? $this->displayDropdown(Configuration::get('ETS_BLOCKSEARCH_TITLE',$this->context->language->id),$otpionsHtml) : false,
        ));     
		$key = $this->getCacheId('blocksearch-top'.((!isset($params['hook_mobile']) || !$params['hook_mobile']) ? '' : '-hook_mobile'));
		$this->calculHookCommon();
		$this->smarty->assign(array(
			'blocksearch_type' => 'top',
            'id_lang' => $this->context->language->id,
			'search_query' => (string)Tools::getValue('search_query')
			)
		);
        $this->smarty->assign(array(
            'ETS_BLOCKSEARCH_PLACEHOLDER' => Configuration::get('ETS_BLOCKSEARCH_PLACEHOLDER',$this->context->language->id),
        ));
		return $this->display(__FILE__, 'blocksearch-top.tpl');
    }
    public function getCategoriesDropdown($categories, &$depth_level = -1)
    {
        if(!(int)Configuration::get('ETS_BLOCKSEARCH_ENABLE_BY_CAT'))
        {            
            return false;
        }
        if($categories)
        {
            $depth_level++;
            foreach($categories as $category)
            {
                if(!in_array((int)$category['id_category'],$this->excludedCats) && (!$this->depthLevel || $this->depthLevel && (int)$depth_level <= $this->depthLevel))
                {
                    $levelSeparator = '';
                    if($depth_level >= 2)
                    {
                        for($i = 1; $i <= $depth_level-1; $i++)
                        {
                            if ($i == 1) {
                                $levelSeparator ='&ensp;'. $this->categoryPrefix;
                            }else {
                                $levelSeparator = '&ensp;'.$levelSeparator;
                            }
                        }
                    }
                    if($category['id_category'] == 4)
                    {
                        
                    }        
                    if($category['id_category'] > 2)
                        $this->categoryDropDown .= $this->displayOption((int)Tools::getValue('searched_category'),(int)$category['id_category'],$depth_level,$levelSeparator,$category['name']);
                    if(isset($category['children']) && $category['children'])
                    {                        
                        $this->getCategoriesDropdown($category['children'], $depth_level);
                    }   
                }                                 
            } 
            $depth_level--;           
        }
    }
    public function displayOption($searched_category,$id_category,$depth_level,$levelSeparator,$name)
    {
        $this->smarty->assign(array(
            'searched_category' => $searched_category,
            'id_category' => $id_category,
            'depth_level' => $depth_level,
            'levelSeparator' => $levelSeparator,
            'name' => $name,
        ));
        return $this->display(__FILE__,'option.tpl');
    }
    public function getCategoriesTree($id_root, $active = true, $id_lang = null)
    {
        $tree = array();
        if(is_null($id_lang))
            $id_lang = (int)$this->context->language->id;
        $sql = "SELECT c.id_category, cl.name
                FROM `"._DB_PREFIX_."category` c
                LEFT JOIN `"._DB_PREFIX_."category_lang` cl ON c.id_category = cl.id_category AND cl.id_lang = ".(int)$id_lang."
                WHERE c.id_category = ".(int)$id_root." ".($active ? " AND  c.active = 1" : "");
        if($category = Db::getInstance()->getRow($sql))
        {            
            $cat = array(
                            'id_category' => $id_root,
                            'name' => $category['name']
                        );            
            $children = $this->getChildrenCategories($id_root, $active, $id_lang);
            $temp = array();
            if($children)
            {
                foreach($children as $child)
                {
                    $arg = $this->getCategoriesTree($child['id_category'], $active, $id_lang);
                    if($arg && isset($arg[0]))
                        $temp[] = $arg[0];
                }                    
            }
            $cat['children'] = $temp;
            $tree[] = $cat;
        }
        return $tree;            
    }
    public function getChildrenCategories($id_root, $active = true, $id_lang = null)
    {
        if(is_null($id_lang))
            $id_lang = (int)$this->context->language->id;
        $sql = "SELECT c.id_category, cl.name
                FROM `"._DB_PREFIX_."category` c
                LEFT JOIN `"._DB_PREFIX_."category_lang` cl ON c.id_category = cl.id_category AND cl.id_lang = ".(int)$id_lang."
                WHERE c.id_parent = ".(int)$id_root." ".($active ? " AND  c.active = 1" : "");
        return Db::getInstance()->executeS($sql);
    }
    

	public function hookDisplayNav($params)
	{
		return $this->hookTop($params);
	}
	private function calculHookCommon()
	{
		$this->smarty->assign(array(
			'ENT_QUOTES' =>		ENT_QUOTES,
			'search_ssl' =>		Tools::usingSecureMode(),
			'ajaxsearch' =>		Configuration::get('PS_SEARCH_AJAX'),
			'instantsearch' =>	Configuration::get('PS_INSTANT_SEARCH'),
			'self' =>			dirname(__FILE__),
		));

		return true;
	}

	public function registerPlugins(){
		if(version_compare(_PS_VERSION_, '8.0.4', '>='))
		{
			$smarty = Context::getContext()->smarty->_getSmartyObj();
			if(!isset($smarty->registered_plugins[ 'modifier' ][ 'implode' ]))
				Context::getContext()->smarty->registerPlugin('modifier', 'implode', 'implode');
			if(!isset($smarty->registered_plugins[ 'modifier' ][ 'strpos' ]))
				Context::getContext()->smarty->registerPlugin('modifier', 'strpos', 'strpos');
		}
	}
    
    public function getContent()
	{
		$this->registerPlugins();
	   $this->_postConfig();    
       $this->_html .= $this->displayAdinJs();   
       //Display errors if have
       if($this->errorMessage)
            $this->_html .= $this->errorMessage;       
       //Render views
        $this->context->controller->addJs($this->_path . 'views/js/tree.js');
       $this->renderConfig(); 
       return $this->_html.$this->displayIframe();
    } 
    public function displayAdinJs()
    {
        $this->smarty->assign(array(
            'clearCacheTxt' => $this->l('Empty categories tree cache'), 
            'clearCacheAlertTxt' => $this->l('Cache has been successfully deleted'),
            'clearCacheLink' => $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&deletesearchcache=1',
        ));
        return $this->display(__FILE__,'admin.tpl');
    }
    public function renderConfig()
    {
        $configs = ETS_Defines::getInstance()->getConfigs();
        $fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Search block settings'),
					'icon' => 'icon-AdminAdmin'
				),
				'input' => array(),
                'submit' => array(
					'title' => $this->l('Save'),
				)
            ),
		);
        if($configs)
        {
            foreach($configs as $key => $config)
            {
                $confFields = array(
                    'name' => $key,
                    'type' => $config['type'],
                    'label' => $config['label'],
                    'desc' => isset($config['desc']) ? $config['desc'] : false,
                    'required' => isset($config['required']) && $config['required'] ? true : false,
                    'options' => isset($config['options']) && $config['options'] ? $config['options'] : array(),
                    'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Yes')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('No')
							)
						),
                    'lang' => isset($config['lang']) ? $config['lang'] : false
                );
                if (isset($config['tree']))
                    $confFields['tree'] = $config['tree'];
                if($config['type'] == 'file')
                {
                    if($imageName = Configuration::get($key))
                    {
                        $confFields['display_img'] = $this->_path.'images/config/'.$imageName;
                        if(!isset($config['required']) || (isset($config['required']) && !$config['required']))
                            $confFields['img_del_link'] = $this->baseAdminPath.'&delimage=yes&image='.$key; 
                    }
                }
                $fields_form['form']['input'][] = $confFields;
            }
        }        
        $helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();
		$helper->module = $this;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'saveConfig';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=config';
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $fields = array();        
        $languages = Language::getLanguages(false);
        $helper->override_folder = '/';
        if(Tools::isSubmit('saveConfig'))
        {            
            if($configs)
            {                
                foreach($configs as $key => $config)
                {
                    if(isset($config['lang']) && $config['lang'])
                        {                        
                            foreach($languages as $l)
                            {
                                $fields[$key][$l['id_lang']] = Tools::getValue($key.'_'.$l['id_lang'],isset($config['default']) ? $config['default'] : '');
                            }
                        }
                        else
                            $fields[$key] = Tools::getValue($key,isset($config['default']) ? $config['default'] : '');
                }
            }
        }
        else
        {
            if($configs)
            {
                    foreach($configs as $key => $config)
                    {
                        if(isset($config['lang']) && $config['lang'])
                        {                    
                            foreach($languages as $l)
                            {
                                $fields[$key][$l['id_lang']] = Configuration::get($key,$l['id_lang']);
                            }
                        }
                        else
                            if ($config['type'] != 'categories_tree'){
                                $fields[$key] = Configuration::get($key);
                            }
                    }
            }
        }
        $helper->tpl_vars = array(
			'base_url' => $this->context->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
			'fields_value' => $fields,
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id,                      
        );
        
        $this->_html .= $helper->generateForm(array($fields_form));		
     }
     private function _postConfig()
     {

        if(Tools::isSubmit('deletesearchcache'))
        {
            if(@file_exists(dirname(__FILE__).'/cache/options.html'))
                @unlink(dirname(__FILE__).'/cache/options.html');
            die(json_encode(array('deleted' => 1)));
        }elseif (Tools::isSubmit('reset_color')){
            ETS_Defines::getInstance()->resetColor();
            die(json_encode(array(
                'success' => $this->l('Configuration was successfully reset. This page will be reloaded in 3 seconds'),
            )));
        }
        $errors = array();
        $languages = Language::getLanguages(false);
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $configs = ETS_Defines::getInstance()->getConfigs();
        
        //Delete image
        if(Tools::isSubmit('delimage'))
        {
            $image = Tools::getValue('image');
            if(isset($configs[$image]) && !isset($configs[$image]['required']) || (isset($configs[$image]['required']) && !$configs[$image]['required']))
            {
                $imageName = Configuration::get($image);
                $imagePath = dirname(__FILE__).'/images/config/'.$imageName;
                if($imageName && file_exists($imagePath))
                {
                    @unlink($imagePath);
                    Configuration::updateValue($image,'');
                }
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
            else
                $errors[] = $configs[$image]['label'].$this->l(' is required');
        }
        if(Tools::isSubmit('saveConfig'))
        {            
            if($configs)
            {
                foreach($configs as $key => $config)
                {
                    if(isset($config['lang']) && $config['lang'])
                    {
                        if(isset($config['required']) && $config['required'] && $config['type']!='switch' && trim(Tools::getValue($key.'_'.$id_lang_default) == ''))
                        {
                            $errors[] = $config['label'].' '.$this->l('is required');
                        }                        
                    }
                    else
                    {
                        if(isset($config['required']) && $config['required'] && isset($config['type']) && $config['type']=='file')
                        {
                            if(Configuration::get($key)=='' && !isset($_FILES[$key]['size']))
                                $errors[] = $config['label'].' '.$this->l('is required');
                            elseif(isset($_FILES[$key]['size']))
                            {
                                $fileSize = round((int)$_FILES[$key]['size'] / (1024 * 1024));
                    			if($fileSize > 100)
                                    $errors[] = $config['label'].$this->l(' cannot be larger than 100MB');
                            }   
                        }
                        else
                        {
                            if(isset($config['required']) && $config['required'] && $config['type']!='switch' && trim(Tools::getValue($key) == ''))
                            {
                                $errors[] = $config['label'].' '.$this->l('is required');
                            }
                            elseif(Tools::getValue($key) && isset($config['validate']) && method_exists('Validate',$config['validate']))
                            {
                                $validate = $config['validate'];
                                if(!Validate::$validate(trim(Tools::getValue($key))))
                                    $errors[] = $config['label'].' '.$this->l('is invalid');
                                unset($validate);
                            }
                            elseif(!is_array(Tools::getValue($key)) && !Validate::isCleanHtml(trim(Tools::getValue($key))))
                            {
                                $errors[] = $config['label'].' '.$this->l('is invalid');
                            } 
                        }                          
                    }                    
                }
            }            
            
            //Custom validation
            
            if(Tools::getValue('ETS_BLOCKSEARCH_DEPTH_LEVEL') != '' && (int)Tools::getValue('ETS_BLOCKSEARCH_DEPTH_LEVEL') < 1)
                $errors[] = $this->l('"Category depth level" must be greater than 0');
            if(Tools::getValue('ETS_BLOCKSEARCH_EXCLUDED_CATS')){
                foreach (Tools::getValue('ETS_BLOCKSEARCH_EXCLUDED_CATS') as $key=>$value){
                    if (!preg_match('/^[0-9]+(,[0-9]+)*$/', $value)){
                        $errors[] = $this->l('"Exclude categories when searching" is invalid');
                        break;
                    }
                }

            }
            if(!$errors)
            {
                if($configs)
                {
                    foreach($configs as $key => $config)
                    {
                        if(isset($config['lang']) && $config['lang'])
                        {
                            $valules = array();
                            foreach($languages as $lang)
                            {
                                if($config['type']=='switch')                                                           
                                    $valules[$lang['id_lang']] = (int)trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? 1 : 0;                                
                                else
                                    $valules[$lang['id_lang']] = trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? trim(Tools::getValue($key.'_'.$lang['id_lang'])) : trim(Tools::getValue($key.'_'.$id_lang_default));
                            }
                            Configuration::updateValue($key,$valules);
                        }
                        else
                        {
                            if($config['type']=='switch')
                            {                           
                                Configuration::updateValue($key,(int)trim(Tools::getValue($key)) ? 1 : 0);
                            }
                            if($config['type']=='file')
                            {
                                //Upload file
                                if(isset($_FILES[$key]['tmp_name']) && isset($_FILES[$key]['name']) && $_FILES[$key]['name'])
                                {
                                    $salt = sha1(microtime());
                                    $type = Tools::strtolower(Tools::substr(strrchr($_FILES[$key]['name'], '.'), 1));
                                    $imageName = $salt.'.'.$type;
                                    $fileName = dirname(__FILE__).'/images/config/'.$imageName;                
                                    if(file_exists($fileName))
                                    {
                                        $errors[] = $config['label'].$this->l(' already exists. Try to rename the file then reupload');
                                    }
                                    else
                                    {
                                        
                            			$imagesize = @getimagesize($_FILES[$key]['tmp_name']);
                                        
                                        if (!$errors && isset($_FILES[$key]) &&				
                            				!empty($_FILES[$key]['tmp_name']) &&
                            				!empty($imagesize) &&
                            				in_array($type, array('jpg', 'gif', 'jpeg', 'png'))
                            			)
                            			{
                            				$temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');    				
                            				if ($error = ImageManager::validateUpload($_FILES[$key]))
                            					$errors[] = $error;
                            				elseif (!$temp_name || !move_uploaded_file($_FILES[$key]['tmp_name'], $temp_name))
                            					$errors[] = $this->l('Cannot upload the file');
                            				elseif (!ImageManager::resize($temp_name, $fileName, null, null, $type))
                            					$errors[] = $this->displayError($this->l('An error occurred during the image upload process.'));
				                            @unlink($temp_name);
                                            if(!$errors)
                                            {
                                                if(Configuration::get($key)!='')
                                                {
                                                    $oldImage = dirname(__FILE__).'/images/config/'.Configuration::get($key);
                                                    if(file_exists($oldImage))
                                                        @unlink($oldImage);
                                                }                                                
                                                Configuration::updateValue($key, $imageName);                                                                                               
                                            }
                                        }
                                    }
                                }
                                //End upload file
                            }elseif ($config['type'] == 'categories_tree'){
                                Configuration::updateValue($key,Tools::getValue($key)?implode(',',Tools::getValue($key)):'');
                            }
                            else
                                Configuration::updateValue($key,trim(Tools::getValue($key)));   
                        }                        
                    }
                }
            }
            if (count($errors))
            {
               $this->errorMessage = $this->displayError($errors);  
            }
            else
            {   
                if(@file_exists(dirname(__FILE__).'/cache/options.html'))
                    @unlink(dirname(__FILE__).'/cache/options.html');
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }                           
        }
   }
   public function renderAjaxProductItem($product,$image){
	    if ($product){
	        $product['id'] = $product['id_product'];
            if (Module::isEnabled('ets_reviews')){
                $moduleReview = Module::getInstanceByName('ets_reviews');
                $html = $moduleReview->hookDisplayProductListReviews(['product'=>$product]);
            }elseif (Module::isEnabled('productcomments')) {
                $module = Module::getInstanceByName('productcomments');
                $html = $module->renderWidget('displayProductListReviews',['product'=>$product]);
            }
            $this->context->smarty->assign(array(
                'image_url' => $image,
                'product' => (array)$product,
                'product_link' => $product['product_link'],
                'display_image' => (int)Configuration::get('ETS_BLOCKSEARCH_SHOW_PRODUCT_IMAGE'),
                'html' => $html ?? '',
                'price' => $product['price'],
            ));
            return $this->context->smarty->fetch(_PS_MODULE_DIR_.$this->name.'/views/templates/hook/ajax-product-item.tpl');
        }
	    return '';
   }
    public function displayIframe()
    {
        switch($this->context->language->iso_code) {
            case 'en':
                $url = 'https://cdn.prestahero.com/module/ph_productfeed/productfeed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'it':
                $url = 'https://cdn.prestahero.com/it/module/ph_productfeed/productfeed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'fr':
                $url = 'https://cdn.prestahero.com/fr/module/ph_productfeed/productfeed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'es':
                $url = 'https://cdn.prestahero.com/es/module/ph_productfeed/productfeed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            default:
                $url = 'https://cdn.prestahero.com/module/ph_productfeed/productfeed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
        }
        $this->smarty->assign(
            array(
                'url_iframe' => $url
            )
        );
        return $this->display(__FILE__,'iframe.tpl');
    }
}
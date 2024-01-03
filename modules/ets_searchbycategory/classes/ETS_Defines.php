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

class ETS_Defines {
    public static $instance;
    public $module;
    public $context;
    public function __construct()
    {
        $this->context = Context::getContext();
        $this->module = Module::getInstanceByName('ets_searchbycategory');
    }
    public static function getInstance($module = null)
    {
        if (!(isset(self::$instance)) || !self::$instance) {
            self::$instance = new ETS_Defines();
        }
        return self::$instance;
    }
    static $cache_configs = [];
    public function getConfigs()
    {
        self::$cache_configs = array(
            'ETS_BLOCKSEARCH_ENABLE_LIVE_MODE' => array(
                'label' => $this->module->l('Enable module'),
                'type' => 'switch',
                'default' => 1
            ),
            'ETS_BLOCKSEARCH_ENABLE_BY_CAT' => array(
                'label' => $this->module->l('Enable search by category'),
                'type' => 'switch',
                'desc' => $this->module->l('If you disable this option, by default, the module will fetch search results from the whole website'),
                'default' => 1
            ),
            'ETS_BLOCKSEARCH_TITLE' => array(
                'label' => $this->module->l('Root category title'),
                'type' => 'text',
                'default' => $this->module->l('All categories'),
                'required' => true,
                'lang' => true,
            ),
            'ETS_BLOCKSEARCH_PLACEHOLDER' => array(
                'label' => $this->module->l('Search input placeholder'),
                'type' => 'text',
                'default' => $this->module->l('Search...'),
                'required' => true,
                'lang' => true,
            ),
            'ETS_BLOCKSEARCH_BUTTON_COLOR' =>  array(
                'type' => 'color',
                'label' => $this->module->l('Search button background color '),
                'name' => 'ETS_BLOCKSEARCH_BUTTON_COLOR',
                'default' => '#2fb5d2'
            ),
            'ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR' =>  array(
                'type' => 'color',
                'label' => $this->module->l('Search button background hover color '),
                'name' => 'ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR',
                'default' => '#2592a9'
            ),

            'ets_sbc_reset' =>  array(
                'type' => 'button',
                'label' => $this->module->l('Reset to default color'),
                'name' => 'ets_sbc_reset',
                'default' => 1
            ),
            'ETS_BLOCKSEARCH_SHOW_PRODUCT_IMAGE' => array(
                'label' => $this->module->l('Show product image in Ajax search result'),
                'type' => 'switch',
                'default' => 1
            ),
            'ETS_BLOCKSEARCH_CACHE' => array(
                'label' => $this->module->l('Cache categories tree'),
                'type' => 'switch',
                'default' => 0
            ),
            'ETS_DISPLAY_PRICE' => array(
                'label' => $this->module->l('Display product price in search result'),
                'type' => 'switch',
                'default' => 0
            ),
            'ETS_DISPLAY_RATING' => array(
                'label' => $this->module->l('Display rating in search result'),
                'type' => 'switch',
                'default' => 0,
                'desc' => $this->module->l('Only display product rating from "Product Comments" module made by PrestaShop and "Trusted Reviews" module made by ETS-Soft')
            ),
            'ETS_BLOCKSEARCH_DEPTH_LEVEL' => array(
                'label' => $this->module->l('Category depth level'),
                'type' => 'text',
                'default' => '',
                'desc' => $this->module->l('Leave blank to show all category levels'),
                'validate' => 'isInt'
            ),
            'ETS_BLOCKSEARCH_EXCLUDED_CATS' => array(
                'label' => $this->module->l('Exclude categories when searching'),
                'type' => 'categories_tree',
                'tree' => $this->module->renderCategoryTree(
                    array(
                        'tree' => array(
                            'id' => 'sbc-categories-tree',
                            'selected_categories' => Tools::getValue('ETS_BLOCKSEARCH_EXCLUDED_CATS',Configuration::get('ETS_BLOCKSEARCH_EXCLUDED_CATS') ? explode(',',Configuration::get('ETS_BLOCKSEARCH_EXCLUDED_CATS')) :array() ),
                            'disabled_categories' => null,
                            'use_checkbox' => true,
                            'use_search' => true,
                            'root_category' => Category::getRootCategory()->id
                        ),
                        'name' => 'ETS_BLOCKSEARCH_EXCLUDED_CATS',
                    )
                ),
                'class' => 'ETS_BLOCKSEARCH_EXCLUDED_CATS'
            ),
            'ETS_BLOCKSEARCH_CAT_PREFIX' => array(
                'label' => $this->module->l('Prefix for sub-category name'),
                'type' => 'text',
                'default' => '-'
            ),
        );

        return self::$cache_configs;
    }
    public function resetColor () {
        $configs = $this->getConfigs();
        foreach ($configs as $key => $val ){
            if ($val['type'] == 'color') {
                Configuration::updateValue($key,$val['default']);
            }
        }
    }
}
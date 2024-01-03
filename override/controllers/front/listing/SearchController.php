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
 use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
 use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;
 use PrestaShop\PrestaShop\Adapter\Search\SearchProductSearchProvider;
 class SearchController extends SearchControllerCore
 {
     /*
    * module: ets_searchbycategory
    * date: 2023-12-29 09:22:36
    * version: 1.0.4
    */
    public function init()
     {
         if (Tools::isSubmit('ajaxSearch'))
         {
             FrontController::init();
             $this->search_string = Tools::getValue('s');
             if (!$this->search_string) {
                 $this->search_string = Tools::getValue('search_query');
             }
             $query = Tools::replaceAccentedChars(urldecode(Tools::getValue('q')));
             $searchResults = Search::find((int)(Tools::getValue('id_lang')), $query, 1, 10, 'position', 'desc', true);
             $currency = Currency::getCurrencyInstance($this->context->currency->id);
             if (is_array($searchResults))
                 foreach ($searchResults as &$product)
                 {
                     $product['product_link'] = $this->context->link->getProductLink($product['id_product'], $product['prewrite'], $product['crewrite']);
                     $productObj = new Product((int)$product['id_product'], true, (int)$this->context->cookie->id_lang, $this->context->shop->id);
                     $images = $productObj->getImages((int)$this->context->cookie->id_lang);
                     if((int)Configuration::get('ETS_BLOCKSEARCH_SHOW_PRODUCT_IMAGE'))
                     {
                         if(isset($images[0]))
                             $id_image = Configuration::get('PS_LEGACY_IMAGES') ? ($productObj->id.'-'.$images[0]['id_image']) : $images[0]['id_image'];
                         else
                             $id_image = $this->context->language->iso_code.'-default';
                         $product['img_url'] =  $this->context->link->getImageLink($productObj->link_rewrite, $id_image, ImageType::getFormattedName('cart'));
                     }
                     else
                         $product['img_url'] = '';
                     $product['price'] = (int) $productObj->price ? Tools::displayPrice($productObj->price, $currency) : Module::getInstanceByName('ets_searchbycategory')->l('Free');
                     if (Module::isEnabled('ets_searchbycategory')){
                         $module = Module::getInstanceByName('ets_searchbycategory');
                         $product['html'] = $module->renderAjaxProductItem($product,$product['img_url']);
                     }else{
                         $product['html'] = '';
                     }
                 }
             $this->ajaxDie(json_encode($searchResults));
         }
         parent::init();
         $this->search_string = Tools::getValue('s');
         if (!$this->search_string) {
             $this->search_string = Tools::getValue('search_query');
         }
         $this->search_tag = Tools::getValue('tag');
         $this->context->smarty->assign(array(
             'search_string' => $this->search_string,
             'search_tag' => $this->search_tag,
         ));
     }
 }
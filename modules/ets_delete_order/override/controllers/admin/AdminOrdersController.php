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


class AdminOrdersController extends AdminOrdersControllerCore
{
    public function postProcess()
    {
        $ets_delete_order =Module::getInstanceByName('ets_delete_order');
        if($ets_delete_order)
            $ets_delete_order->_postOrder();
        if($this->redirect_after && (Tools::isSubmit('filterviewtrash') || Tools::isSubmit('viewtrash')))
            $this->redirect_after .='&viewtrash=1';
        parent::postProcess();
        if(Tools::isSubmit('viewtrash'))
        {
            $this->_where .= ' AND a.deleted=1';
        }
        else
            $this->_where .= ' AND a.deleted!=1';
    }
}

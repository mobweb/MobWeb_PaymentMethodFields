<?php

class MobWeb_PaymentMethodFields_Model_Observer
{
    public static $fields = array('custom_field');

    public function salesQuoteSaveBefore(Varien_Event_Observer $observer)
    {
        foreach(self::$fields AS $field) {
            if($data = Mage::app()->getFrontController()->getRequest()->getParam($field)){
                $observer->getEvent()->getQuote()->setData($field, $data);
            }
        }
    }
}
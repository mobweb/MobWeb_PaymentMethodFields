<?php

$installer = $this;
$installer->startSetup();

$setup = new Mage_Sales_Model_Resource_Setup('core_setup');

$customField = array(
    'type' => 'varchar',
    'label' => 'Custom Field',
    'global' => 1,
    'required' => 0,
    'user_defined' => 0,
    'visible_on_front' => 0
);

$setup->addAttribute('order', 'custom_field', $customField);
$setup->addAttribute('quote', 'custom_field', $customField);

$setup->endSetup();
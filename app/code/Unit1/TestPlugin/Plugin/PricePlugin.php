<?php

namespace Unit1\TestPlugin\Plugin;

use \Magento\Catalog\Model\Product;

class PricePlugin
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result*10;
    }
}
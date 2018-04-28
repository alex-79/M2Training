<?php
namespace Unit2\Module5\Plugin\Product;

use \Magento\Catalog\Controller\Product\View;

class ViewPlugin 
{

    /*public function beforeExecute(\Magento\Catalog\Controller\Product\View $subject) {
        echo "BEFORE<BR>"; exit;
    }*/
    public function afterExecute(\Magento\Catalog\Controller\Product\View $subject,$result) {
        echo "AFTER"; exit;
    }

}

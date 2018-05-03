<?php
namespace Unit2\Module5\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->getResponse()->appendBody("HELLO WORLD");
        //$this->_redirect('/catalog_category/view/id/3');
    }
}

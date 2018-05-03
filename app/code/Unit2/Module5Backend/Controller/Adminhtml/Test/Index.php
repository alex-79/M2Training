<?php

namespace Unit2\Module5Backend\Controller\Adminhtml\Test;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Test action index
     */
    public function execute()
    {
        $this->getResponse()->appendBody("HELLO WORLD");
    }
    
    /**
     * Check if admin has permissions to visit related pages
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret==1;
    }
    
}


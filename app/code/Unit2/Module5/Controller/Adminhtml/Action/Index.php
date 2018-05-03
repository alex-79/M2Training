<?php

namespace Unit2\Module5\Controller\Adminhtml\Action;

class Index extends \Magento\Backend\App\Action
{   
    /**
     * Test action index
     */
    public function execute()
    {
        echo 'HELLO WORLD';
        exit();
        
        //
        //$this->_redirect('*/*/catalog/category/view/id/3');        

    }

    /**
     * Check if admin has permissions to visit related pages
     *
     * @return bool
     */
    /*protected function _isAllowed()
    {
        //$secret = $this->getRequest()->getParam('secret');
        //return isset($secret) && (int)$secret==1;
        return true;
    }*/
    
}

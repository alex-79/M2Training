<?php

namespace Unit3\Module6\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Unit3\Module6\Block\Template');
        $block->setTemplate('template.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }

}

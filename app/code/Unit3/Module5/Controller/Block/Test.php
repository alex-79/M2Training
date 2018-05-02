<?php

namespace Unit3\Module5\Controller\Block;

class Test extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Unit3\Module5\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
    }

}

<?php

namespace Unit3\Module5\Block;

class Test extends \Magento\Framework\View\Element\AbstractBlock {

    protected function _toHtml() {
        return "<b>Hello world from block!</b>";
    }

}

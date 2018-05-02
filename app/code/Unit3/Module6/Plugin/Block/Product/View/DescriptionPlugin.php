<?php

namespace Unit3\Module6\Plugin\Block\Product\View;


class DescriptionPlugin {

    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock) 
    {
        $originalBlock->setTemplate('Unit3_Module6::description.phtml');
    }

}

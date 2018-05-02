<?php

namespace Unit3\Module5\Plugin\Block\Product\View;


class DescriptionPlugin {

    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock) 
    {
        $originalBlock->getProduct()->setDescription('Test description');
    }

}

<?php

namespace Unit1\TestPlugin\Plugin;

use \Magento\Theme\Block\Html\Footer;

class CopyrightPlugin
{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return 'Customized copyright!';
    }
}
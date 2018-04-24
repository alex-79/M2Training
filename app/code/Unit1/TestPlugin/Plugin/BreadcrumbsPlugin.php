<?php

namespace Unit1\TestPlugin\Plugin;

use \Magento\Theme\Block\Html\Breadcrumbs;

class BreadcrumbsPlugin
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = $crumbInfo['label']."!";
        return [$crumbName, $crumbInfo];
    }

}
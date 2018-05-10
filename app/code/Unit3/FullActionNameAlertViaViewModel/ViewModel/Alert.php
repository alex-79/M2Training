<?php

namespace Unit3\FullActionNameAlertViaViewModel\ViewModel;

class Alert implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected $request;

    public function __construct(
        \Magento\Framework\App\Request\Http $request
    )
    {
        $this->request = $request;
    }
    
    public function getFullActionName() {
        return $this->request->getFullActionName();
    }
}
    


<?php

namespace Unit3\Module8\Controller\Layout;

class Onepage extends \Magento\Framework\App\Action\Action
{
    
    protected $resultPageFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        $result = $this->resultPageFactory->create();
        return $result;
    }
}



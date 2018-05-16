<?php

namespace Unit4\ModuleListRootCategories\Controller\Index;

class Page extends \Magento\Framework\App\Action\Action
{
    
    protected $resultPageFactory;
    protected $storeCollectionFactory;
    protected $categoryCollectionFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Store\Model\ResourceModel\Store\CollectionFactory $storeCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->storeCollectionFactory = $storeCollectionFactory;
        $this->categoryCollectionFactory = $categoryCollectionFactory;
    }

    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        $storeCollection = $this->storeCollectionFactory->create();
    
        echo $storeCollection->getSelect().'<br/>';
        foreach ($storeCollection as $store) {
                    
            $categoryCollection = $this->categoryCollectionFactory->create();
            $categoryCollection->addAttributeToSelect('name');
            $categoryCollection->addFieldToFilter('entity_id',$store->getRootCategoryId());
            echo $categoryCollection->getSelect().'<br/>';

            echo 'Store: '.$store->getName().'<br>';
            echo '- RootCategoryId: '.$store->getRootCategoryId().'<br>';
            echo '- RootCategory Name: '.$categoryCollection->getFirstItem()->getName().'<br/>';
           
        }
        
        exit();
        
        $result = $this->resultPageFactory->create();
        return $result;
    }
}

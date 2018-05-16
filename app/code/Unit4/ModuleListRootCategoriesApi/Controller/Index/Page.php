<?php

namespace Unit4\ModuleListRootCategoriesApi\Controller\Index;

class Page extends \Magento\Framework\App\Action\Action
{
    
    protected $resultPageFactory;
    protected $storeRepository;
    protected $categoryList;
    protected $searchCriteriaBuilder;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Store\Api\StoreRepositoryInterface $storeRepository,           
        \Magento\Catalog\Api\CategoryListInterface $categoryList,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->storeRepository = $storeRepository;
        $this->categoryList = $categoryList;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder; 
    }

    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        
        $stores = $this->storeRepository->getList();
        foreach ($stores as $store) {
            
            $this->searchCriteriaBuilder->addFilter('entity_id', $store->getRootCategoryId());
            $searchCriteria = $this->searchCriteriaBuilder->create();
            
            $categories = $this->categoryList->getList($searchCriteria);           
            echo 'Store: '.$store->getName().'<br>';
            echo '- RootCategoryId: '.$store->getRootCategoryId().'<br>';
            foreach ($categories->getItems() as $category) {
                echo '- RootCategory Name: '.$category->getName().'<br/>';
            }
        }
    
        exit();
        
        $result = $this->resultPageFactory->create();
        return $result;
    }
}

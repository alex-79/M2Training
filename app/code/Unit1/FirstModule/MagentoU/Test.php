<?php

namespace Unit1\FirstModule\MagentoU;

use Magento\Catalog\Model\ProductFactory;
use Magento\Checkout\Model\Session;
use Unit1\FirstModule\Model\ProductRepository;

class Test
{

    protected $productFactory;
    protected $session;
    protected $unit1ProductRepository;
    protected $justAParameter;
    protected $data;

    public function __construct(
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        \Unit1\FirstModule\Model\ProductRepository $unit1ProductRepository,
        string $justAParameter,
        array $data
    ) {
        $this->productFactory = $productFactory;
        $this->session = $session;
        $this->unit1ProductRepository = $unit1ProductRepository;
        $this->justAParameter = $justAParameter;
        $this->data = $data;
    }

    public function log()
    {
        echo get_class($this->productFactory).'<br>';
        echo get_class($this->session).'<br>';
        echo get_class($this->unit1ProductRepository).'<br>';
        echo $this->justAParameter.'<br>';
        print_r($this->data);
    }
}
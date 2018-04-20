<?php

namespace Unit1\FirstModule\MagentoU;

use Magento\Catalog\Model\ProductFactory;
use Magento\Checkout\Model\Session;
use Unit1\FirstModule\Api\ProductRepositoryInterface;

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
        \Unit1\FirstModule\Api\ProductRepositoryInterface $unit1ProductRepository,
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
        echo get_class($this->productFactory).PHP_EOL;
        echo get_class($this->session).PHP_EOL;
        echo get_class($this->unit1ProductRepository).PHP_EOL;
        echo $this->justAParameter.PHP_EOL;
        print_r($this->data);
    }
}
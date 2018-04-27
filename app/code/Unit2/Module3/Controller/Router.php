<?php
    namespace Unit2\Module3\Controller;

    use \Magento\Framework\App\ActionFactory;
    use \Magento\Framework\App\RequestInterface;
    use \Magento\Framework\App\ResponseInterface;

    class Router implements \Magento\Framework\App\RouterInterface
    {
        
        protected $actionFactory;
        protected $_response;
        
        public function __construct(
            \Magento\Framework\App\ActionFactory $actionFactory,
            \Magento\Framework\App\ResponseInterface $response
        ) 
        {
            $this->actionFactory = $actionFactory;
            $this->_response = $response;
        }

        public function match(\Magento\Framework\App\RequestInterface $request) 
        {
            $info = $request->getPathInfo();
            if (preg_match("%^/(test)-(.*?)-(.*?)$%", $info, $m)) {
                $request->setPathInfo(sprintf("/%s/%s/%s", $m[1], $m[2], $m[3]));
                return $this->actionFactory->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
            }
            return null;
        }
    }
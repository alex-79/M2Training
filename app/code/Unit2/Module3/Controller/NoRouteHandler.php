<?php

    namespace Unit2\Module3\Controller;

    class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface {

        public function process(\Magento\Framework\App\RequestInterface $request) {
            $moduleName = 'cms';
            $controllerName = 'index';
            $actionName = 'index';
            $request
                ->setModuleName($moduleName)
                ->setControllerName($controllerName)
                ->setActionName($actionName);
            return true;
        }
    }
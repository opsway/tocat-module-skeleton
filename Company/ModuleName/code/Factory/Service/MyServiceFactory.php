<?php
namespace Company\ModuleName\Factory\Service;

use Company\ModuleName\Repository\MyRepository;
use Company\ModuleName\Service\MyService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MyServiceFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return MyService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        /**
         * @var $myRepository MyRepository
         */
        $myRepository = $serviceLocator->get(MyRepository::class);

        return new MyService($myRepository);
    }
}

<?php

namespace Company\ModuleNameTest\Factory\Controller\Admin;

use Company\ModuleName\Factory\Controller\OtherControllerFactory;
use Company\ModuleName\Controller\OtherController;
use Company\ModuleName\Service\MyService;

class OtherControllerTest extends \PHPUnit_Framework_TestCase
{
    private $locator;
    private $sm;
    private $service;
    private $factory;

    protected function setUp()
    {
        $this->locator = $this->getMock('Zend\ServiceManager\AbstractPluginManager');
        $this->sm = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $this->service = $this->getMockBuilder(MyService::class)->disableOriginalConstructor()->getMock();
        $this->factory = new OtherControllerFactory();
    }

    /**
     * @covers \Company\ModuleName\Factory\Controller\OtherControllerFactory::createService
     */
    public function testCreateService()
    {

        $this->sm->expects($this->any())
            ->method('get')
            ->with(MyService::class)
            ->will($this->returnValue($this->service));

        $this->locator->expects($this->any())
            ->method('getServiceLocator')
            ->will($this->returnValue($this->sm));

        $this->assertInstanceOf(
            OtherController::class,
            $this->factory->createService($this->locator)
        );
    }
}

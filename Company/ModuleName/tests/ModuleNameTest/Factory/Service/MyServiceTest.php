<?php

namespace Company\ModuleNameTest\Factory\Service;

use Company\ModuleName\Factory\Service\MyServiceFactory;
use Company\ModuleName\Repository\MyRepository;

class MyServiceTest extends \PHPUnit_Framework_TestCase
{
    private $locator;
    private $repository;
    private $factory;

    protected function setUp()
    {
        $this->locator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $this->repository = $this->getMockBuilder(MyRepository::class)->disableOriginalConstructor()->getMock();
        $this->factory = new MyServiceFactory();
    }

    /**
     * @covers \Company\ModuleName\Factory\Service\MyServiceFactory::createService
     */
    public function testCreateService()
    {
        $this->locator->expects($this->any())
            ->method('get')
            ->with(MyRepository::class)
            ->will($this->returnValue($this->repository));

        $this->assertInstanceOf(
            'Company\ModuleName\Service\MyService',
            $this->factory->createService($this->locator)
        );
    }
}

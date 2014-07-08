<?php

namespace Mixpanel\Test;

use Mixpanel\Mixpanell;

class MixpanelTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Mixpanel
     */
    protected $_instance = null;

    protected function setUp() {
        parent::setUp();
        $this->_instance = Mixpanel::getInstance("token");
    }

    protected function tearDown() {
        parent::tearDown();
        $this->_instance->reset();
        $this->_instance = null;
    }

    public function testGetInstance() {
        $instance = Mixpanel::getInstance("token");
        $this->assertInstanceOf('Mixpanel\Mixpanel', $instance);
        $this->assertEquals($this->_instance, $instance);
    }

    public function testCallingConstructorWithoutPeopleArgumentInstantiatesProducerClass()
    {
        $this->assertInstanceOf('Mixpanel\Producer\People', $this->_instance->people);

    }

    public function testCallingConstructorWithIncorrectPeopleArgumentThrowsException()
    {
        $this->setExpectedException('InvalidArgumentException');
        Mixpanel::__destroy();
        Mixpanel::getInstance("abc", array(), "string");
    }

}


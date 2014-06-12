<?php

namespace Mixpanel\Factory;
use Mixpanel\Mixpanel as MixpanelClass;

/**
 * The MixpanelFactory class is used to return an instance of Mixpanel/Mixpanel
 *
 * @author  Matt Lody <mattlody@gmail.com>
 */
class MixpanelFactory {

    /**
     * @var \Mixpanel\Mixpanel
     */
    protected $instance;

    /**
     * @param $token
     * @param array $options
     */
    public function __construct($token, $options = array())
    {
        $this->instance = new MixpanelClass($token, $options = array());
    }

    /**
     * @return \Mixpanel\Mixpanel
     */
    public function get()
    {
        return $this->instance;
    }

} 
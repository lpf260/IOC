<?php

/**
 * Class Flight
 * 飞行能力
 */
class Flight{
    protected $speed;
    protected $holdtime;
    public function __construct($speed, $holdtime)
    {
        $this->speed = $speed;
        $this->holdtime = $holdtime;
    }
}

/**
 * 力度
 */
class Force{
    protected $force;
    public function __construct($force)
    {
        $this->force = $force;
    }
}


/**
 * 设计能力
 */
class Shot{
    protected $atk;
    protected $range;
    protected $limit;

    public function __construct($atk,$range,$limit)
    {
        $this->atk = $atk;
        $this->range = $range;
        $this->limit = $limit;
    }
}

class SuperModuleFactory{
    public function makeModule($moduleName, $options)
    {
        switch ($moduleName){
            case 'Fight': return new Fight($options[0], $options[1]);
            case 'Force': return new Force($options[0]);
            case 'Shot':  return new Show($options[0],$options[1],$options[2]);
        }
    }
}
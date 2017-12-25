<?php
require_once('Power.class.php');
require_once('Ability.class.php');



class Super{

    protected $power;

    /*
     * $modules = array(
           'Flight' => array(10,20),
           'Force' => array(100),
           'Shot' => array(10,20,30)
       );
     */
    public function __construct(array $modules)
    {
        //初始化工厂
        $factory = new SuperModuleFactory();

        //通过工厂提供的方法制造需要的模块
        foreach ($modules as $moduleName => $moduleOptions){
            $this->power[] = $factory->makeModule($modules,$moduleOptions);
        }
    }
}

//创建超人
$superman = new Superman([
    'Fight' => [9,100],
    'Shot'  => [99,50,2]
]);
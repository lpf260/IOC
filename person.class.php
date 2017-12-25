<?php
class Person {
    /**
     * For the sake of demonstration, we"re setting this private
     */
    private $_allowDynamicAttributes = false;

    /** type=primary_autoincrement */
    protected $id = 12;

    /** type=varchar length=255 null */
    protected $name;

    /** type=text null */
    protected $biography;

    public function getId()
    {
        return $this->id;
    }
    public function setId($v)
    {
        $this->id = $v;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($v)
    {
        $this->name = $v;
    }
    public function getBiography()
    {
        return $this->biography;
    }
    public function setBiography($v)
    {
        $this->biography = $v;
    }
}

$reflector = new ReflectionClass('Person'); //建立 Person这个类的反射类


if ($reflector->isInstantiable()) {
    //ReflectionClass::newInstanceArgs — 从给出的参数创建一个新的类实例。 下面实际上是实例化Personlei
    $user = $reflector->newInstance(); //in other case you can send any arguments
}

$user->setName('Lpf');
echo $user->getName();
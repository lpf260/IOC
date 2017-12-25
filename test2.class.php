<?php
interface Girl{

}

class LoliGirl implements Girl{
    
}

class Vixen implements  Girl{
    
}


class Boy{
    protected $girl;
    
    public function __construct(Girl $girl)
    {
        $this->girl = $girl;
    }
}

$loliGirl = new LoliGirl();
$vixen = new Vixen();




$boy = new Boy($loliGirl);
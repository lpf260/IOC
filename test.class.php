<?php
class Boy{
    protected $girl;
    
    public function __construct(Girl $girl)
    {
        $this->girl = $girl;
    }
}

class Girl{
    
}


$girl = new Girl();

$boy = new Boy($girl); 
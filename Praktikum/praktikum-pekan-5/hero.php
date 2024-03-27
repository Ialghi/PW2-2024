<?php
class Hero
{
    public $name;
    public $hp;
    public $damage;


    //method
    public function __construct($name, $hp, $damage)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->damage = $damage;
    }
    public function getDetail()
    {
        echo "<br> Name: $this->name";
        echo "<br> Hp: $this->hp";
        echo "<br> Damege $this->damage";
        echo "<br> ======================= ";
    }
}

//buat object
$hero1 = new Hero("Jett", 1200, 300);
$hero1->getDetail();

$hero2 = new Hero("brimm", 1200, 300);
$hero2->getDetail();

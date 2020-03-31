<?php 

// class class1{
//     function __construct(){
//         // $this->num = 5;
//      }
//      protected function getDataP(){
//          echo 'Hello getData func';
//      }
// }

// class class2 extends class1{
//     function getData(){
//         $this->getDataP();
//     }
// }



// $obj = new class2;
// echo $obj->getData();              


// abstract class and abstract function
// abstract class contain atleast 1 abstract function
// abstract function : must declare but not define
// abstract class , could not create object
// abstract child class must contain abstract function


abstract class bank{   
abstract function idProf();
}

class hdfc extends bank{
    public function idProf(){
    echo "Test from HDFC bank";
}

public static function test(){
    echo "Test";
}
}

class icici extends bank{
public function idProf(){
echo "Test from icici bank";
}

public function test(){
    echo "Test";
}
}

$obj = new icici();
echo $obj->idProf();

?>
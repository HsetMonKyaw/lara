<?php
class Customer{
    public $name,$email,$phone,$address,$creditLimit;

    function __construct($name,$email,$phone,$address)
    {
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->address=$address;
    }
    function display(){
        echo "Name :" .$this->name . ", Email : ".$this->email;
    }

    function setData(){
        $this->name="Thiri";
        $this->email="thiri@gmail.com";
        
    }
}
//object creation

$customer1=new Customer("Thiri","thiri@gmail.com","09456686597","mdy"); //customer object
$customer2=new Customer("David","david@gmail.com","09440998899","SG");

//call instance method

// $customer1->setData();
$customer1->display();
$customer2->display();

//set instance attributes

// $customer1->phone="09456686597";
// $customer1->creditLimit=1000000000;
// echo "<br>";
// echo "Phone : " .$customer1->phone;
// echo "Credit Limit : " .$customer1->creditLimit;

// $customer2->name="David";
// $customer2->email="david@gmail.com";
// $customer2->creditLimit=500000000;
// echo "<br>";
// echo "Name : " .$customer2->name;
// echo "Email : " .$customer2->email;
// echo "Credit Limit : " .$customer2->creditLimit;

?>
<?php
class Employee{
    public $name,$email,$phone,$position,$dept;
    private $basic_salary;
    function __construct($name,$email,$phone,$position,$dept)
    {
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->position=$position;
        $this->dept=$dept;
        // $this->basic_salary=$basic_salary;
    }

    private function calculateNetSalary($absent_day=0){
        if($absent_day==0)
        {
            $netsalary=30 + $this->basic_salary;
        }else
        {
            $daily_wages=$this->basic_salary/30;
            $netsalary=$this->basic_salary - ($absent_day * $daily_wages);
        }
        return $netsalary;
    } 

    function displayInfo()
    {
        echo "<br>". "Name : " .$this->name . ", Email : " .$this->email .", Basic Salary : " .$this->basic_salary ."<br>";
        // echo "<br>". $this->basic_salary;
        echo "<br>" .$this->calculateNetSalary() ."<br>";

    }
    //  . ", Phone : " .$this->phone . ", Position : " .$this->position .
    // ", Department : " .$this->dept 
    
    public function getSalary()
    {
        return $this->basic_salary;
    } 
    public function setSalary($new_salary)
    {
        $this->basic_salary=$new_salary;
    }

}

class Wages {
    public $daily_wages;
    // function __construct($name,$email,$phone,$position,$dept,$daily_wages)
    // {
    //     parent:: __construct($name,$email,$phone,$position,$dept);
    //     $this->daily_wages=$daily_wages;
    //     $this->basic_salary=3000;
    // }
}

class Staff {
    public $bonus,$basic_salary;
    // function __construct($name,$email,$phone,$position,$dept,$basic_salary,$bonus)
    // {
    //     parent:: __construct($name,$email,$phone,$position,$dept);
    //     $this->bonus=$bonus;
    //     $this->basic_salary=$basic_salary;
        
    // }
}

// $wages1=new Wages("Bone","bone@gmail.com","+04456767","SE","AM",5000);
// $wages1->displayInfo();

// $staff1=new Staff("Min","min@gmail.com","+9887776","PM","Software",4500,500);
// $staff1->displayInfo();
// echo "<br>".$staff1->calculateNetSalary(3);


$david=new employee("David","david@gmail.com","+08777664","PM","SE",4000);
$david->setSalary(5000);
$david->displayInfo();
// echo "<br>".$david->calculateNetSalary();
echo "name is ". $david->name;

// $bryn=new employee("Bryn","bryn@gmail.com","+089877767","Solution Architect","SE",3500);
// // $bryn->displayInfo();
// echo "<br>".$bryn->calculateNetSalary(3);


    
?>
<?php
abstract class Employee{
    public $name,$dob,$phone,$education,$address,$nrc,$working_day,$holiday,$absent_day,$startdate;
    public static $employee;
    function __construct($name,$dob,$phone,$education,$address,$nrc,$startdate,$working_day,$holiday,$absent_day)
    {
        $this->name=$name;
        $this->dob=$dob;
        $this->phone=$phone;
        $this->education=$education;
        $this->address=$address;
        $this->nrc=$nrc;
        $this->working_day=$working_day;
        $this->holiday=$holiday;
        $this->absent_day=$absent_day;
        $this->startdate=$startdate;
        self::$employee++;
    }
    function displayInfo()
    {
        echo " Name :" .$this->name ."<br>";
        echo " Phone :" .$this->phone ."<br>";
        echo " Education :" .$this->education ."<br>";
        echo " Absent Day :" .$this->absent_day ."<br>";
    }
    abstract function attendance_day();

}
class Staff extends Employee{
    public $pos;
    public static $staff;
    public static $stafflist;
    function __construct($name,$dob,$phone,$education,$address,$nrc,$startdate,$pos,$working_day,$holiday,$absent_day)
    {
        parent::__construct($name,$dob,$phone,$education,$address,$nrc,$startdate,$working_day,$holiday,$absent_day);
        $this->pos=$pos;
        self::$staff++;
        self::$stafflist[]=$this;
    }
    function attendance_day(){
        $attendant_day=($this->working_day+$this->holiday)-$this->absent_day;
        return $attendant_day;
    }
    static function displayStaff(){
        foreach(Staff::$stafflist as $staff)
        {
            echo "Name : " .$staff->name .", DOB : " .$staff->dob. ", Phone : " .$staff->phone. ", Education : " .$staff->education. ", Address : " .$staff->address. ", NRC : " .$staff->nrc. ", Start Date : " .$staff->startdate. ", Position : " .$staff->pos. ", Working Day : " .$staff->working_day. ", Holiday : " .$staff->holiday. ", Absent Day : " .$staff->absent_day ."<br>";
        }
    }
    
}
class Wages extends Employee{
public $basic_salary;
public static $wage;
public static $wagelist;
function __construct($name,$dob,$phone,$education,$address,$nrc,$startdate,$basic_salary,$working_day,$holiday,$absent_day)
    {
        parent::__construct($name,$dob,$phone,$education,$address,$nrc,$startdate,$working_day,$holiday,$absent_day);
        $this->basic_salary=$basic_salary;
        self::$wage++;
        self::$wagelist[]=$this;
    }
    function attendance_day(){
        $attendant_day=($this->working_day+$this->holiday)-$this->absent_day;
        return $attendant_day;
    }
    static function displayWage(){
        foreach(Wages::$wagelist as $wages)
        {
            echo "Name : " .$wages->name .", Birthday : " .$wages->dob. ", Phone : " .$wages->phone. ", Education : " .$wages->education. ", Address : " .$wages->address. ", NRC : " .$wages->nrc. ", Start Date : " .$wages->startdate. ", Busic Salary : " .$wages->basic_salary. ", Working Day : " .$wages->working_day. ", Holiday Day : " .$wages->holiday. ", Absent Day : " .$wages->absent_day ."<br>";
        }
    }
    public function netSalary(){
        $salary_per_day=$this->basic_salary/30;
        if($this->absent_day==0)
        {
            $netsalary=$this->attendance_day() * ($salary_per_day+1000);
        }else
        {
            $netsalary=$this->attendance_day() * $salary_per_day;
        }
        return $netsalary;
    } 

}

$staff1=new Staff("Mone","10.7.99","095466455","M.C.Sc","mdy","12/mathana(N)345476","12.6.20","Web Developer",22,8,0);
$staff2=new Staff("Bone","15.4.99","092233455","B.C.Sc","mdy","12/mathana(N)346776","25.8.20","Junior Developer",22,8,5);

$wage1=new Wages("Mg Mg","10.9.99","099887777","First Year","mdy","12/mathana(N)345556","5.3.23",180000,22,8,2);
$wage2=new Wages("Ko Ko","15.5.99","098876557","Second Year","mgy","8/mathana(N)876456","4.5.23",180000,22,8,3);

echo "Total Number of Employee :" .Employee::$employee ."<br>";
echo "Total Number of Staff :" .Staff::$staff ."<br>";
echo "Total Number of Wages :" .Wages::$wage ."<br>";
echo "<br>*******<br>";

Staff::displayStaff();
echo "<br>*******<br>";

Wages::displayWage();
echo "<br>*******<br>";

echo "Staff 1 of attendance day :" .$staff1->attendance_day() ."<br>";    
echo "<br> ******* <br>";

echo "Staff 2 of attendance day :" .$staff2->attendance_day() ."<br>";
echo "<br>*******<br>";

echo "Wage 1 of attendance day :" .$wage1->attendance_day() ."<br>";
echo "Net Salary of for wage 1 :" .$wage1->netSalary() ."<br>";
echo "<br>*******<br>";

echo "Wage 2 of attendance day :" .$wage2->attendance_day() ."<br>";
echo "Net Salary of for wage 2 :" .$wage2->netSalary() ."<br>";
echo "<br>*******<br>";



?>
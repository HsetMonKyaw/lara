<?php  
abstract class User{
    public $username;
    private $pwd,$confirm;
    public static $count;
    public static $userlist;
    private $role;
    function __construct($username,$pwd,$confirm,$role="Admin")
    {
        $this->username=$username;
        $this->pwd=$pwd;
        $this->confirm=$confirm;
        $this->role=$role;
        self::$count++;
        self::$userlist[]=$this;
    }
    function checkPassword()
    {
        if($this->pwd==$this->confirm)
        // echo "Password and confirm password match";
        return true;
        else
        // echo "Pwd and Comfirm pwd don't match";
        return false;
    }
public function getPwd()
    {
        return $this->pwd;
    }
    // function displayInfo()
    // {
    //     echo " Username :" .$this->username ."<br>";
    //     echo " Pwd :" .$this->pwd ."<br>";
    // }

public static function displayUser(){
    foreach (User::$userlist as $user)
   {
    echo "User Name :" .$user->username . ", Pwd :" .$user->pwd . "<br>";
   }
}
abstract function getPermission();

//overriden method
public final function getRole(){
    return $this->role;
}

}
// $user1=new User('david@gmail.com','internet','internet3');
// $user1->checkPassword();

class Admin extends User{
    public $role;
    function __construct($username,$pwd,$confirm,$role="Admin")
    {
        parent::__construct($username,$pwd,$confirm,$role);
        $this->role=$role;
    }
    function displayInfo()
    {
        echo " Username :" .$this->username ."<br>";
        echo " Role :" .$this->role ."<br>";
    }
    function getPermission(){
        echo "add,read,write,edit";
    }
}

class Teacher extends User{
    public $email,$phone,$dept,$pos;
    public static $teacher_count;
    public static $teacherlist;
    function __construct($username,$email,$phone,$dept,$pos,$role,$pwd,$confirm)
    {
        parent::__construct($username,$pwd,$confirm,$role);
        // $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->dept=$dept;
        $this->pos=$pos;
        // $this->role=$role;
        self::$teacher_count++;
        self::$teacherlist[]=$this;
    }
    // public function getConfirm()
    // {
    //     return $this->confirm;
    // }
    function displayInfo()
    {
        echo "<br>********<br>";
        echo " Username :" .$this->username ."<br>";
        echo " Email :" .$this->email ."<br>";
        echo " Phone :" .$this->phone ."<br>";
        echo " Department :" .$this->dept ."<br>";
        echo " Position :" .$this->pos ."<br>";
        // echo " Role :" .$this->role ."<br>";


    }
    public static function displayTeacher(){
    foreach (Teacher::$teacherlist as $teacher)
   {
    echo "User Name :" .$teacher->username . ", email :" .$teacher->email . "<br>";
   }
  }
//   public function getRole(){
//     echo  $this->role;
// }
function getPermission(){
        echo "add,edit,read";
}

}

class Student extends User{
    public $email,$phone,$major,$year;
    public static $stu_count;
    public static $studentlist;
    function __construct($username,$email,$phone,$year,$major,$role,$pwd,$confirm)
    {
        parent::__construct($username,$pwd,$confirm,$role);
        // $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->major=$major;
        $this->year=$year;
        // $this->role=$role;
        self::$stu_count++;
        self::$studentlist[]=$this;
    }

    function displayInfo()
    {
        echo "<br>********<br>";
        echo " Username :" .$this->username ."<br>";
        echo " Email :" .$this->email ."<br>";
        echo " Phone :" .$this->phone ."<br>";
        echo " Major :" .$this->major ."<br>";
        echo " Year :" .$this->year ."<br>";
        // echo " Role :" .$this->role ."<br>";


    }
    public static function displayStudent(){
        foreach (Student::$studentlist as $student)
       {
        echo "User Name :" .$student->username . ", email :" .$student->email . "<br>";
       }
      }
      function getPermission(){
        echo "course, no add,no write";
      }
}

$teacher1=new Teacher("Mr.Chris",'chris@gmail.com','+98767866',"Cloud Computing","Senior Level","Teacher","user","user");
$teacher2=new Teacher("Mr.Catherine",'catherine@gmail.com','+98767876',"Software Computing","Senior Level","Teacher","internet","internet");

if($teacher1->checkPassword())
   $teacher1->displayInfo();
else
    echo "Pwd and Confirm doesn't match";

if($teacher2->checkPassword())
   $teacher2->displayInfo();
else
   echo "Pwd and Confirm doesn't match";


$student1=new Student("Mg Mg","mgmg@gmail.com",'+98767866',"IT",'Second year',"Student","internet1","internet1");
if($student1->checkPassword())
   $student1->displayInfo();
else
   echo "Pwd and Confirm doesn't match";


   echo "Count is :" . User::$count;
   echo "<br> Number of Teacher :" .Teacher::$teacher_count;
   echo "<br> Number of Student :" .Student::$stu_count;

   echo "<br> Number of User :" .sizeof(User::$userlist);
   User::displayUser();
//    echo "<br> Number of Teacher :" .sizeof(Teacher::$teacherlist);
   Teacher::displayTeacher();
   Student::displayStudent();


   echo "Teacher Role :" .$teacher1->getRole();
   $teacher1->getPermission();

//    $user=new User('david@gmail.com','internet9','internet9');
//    $user->checkPassword();

//    foreach (User::$userlist as $user)
//    {
//     echo "User Name :" .$user->username . ", Pwd :" .$user->getPwd() . "<br>";
//    }

//  echo "<br> Number of Teacher :" .sizeof(Teacher::$teacherlist);
//    foreach (Teacher::$teacherlist as $teacher)
//    {
//     echo "User Name :" .$teacher->username . ", Pwd :" .$teacher->getConfirm() . "<br>";
//    }

?>
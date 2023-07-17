<?php
Trait Scientist{
    // use Researcher;
    // public $name="Default User";
    function displayResearchArea()
        {
            echo "<br> Name : " .$this->name . ", Research Area : " .$this->area ;
        }
     
}
Trait Researcher{
    public $name,$area,$email,$phone;
    // function __construct($name,$area,$email,$phone)
    // {
    //     $this->name=$name;
    //     $this->area=$area;
    //     $this->email=$email;
    //     $this->phone=$phone;
    // }
    function displayResearchArea()
        {
            echo "Name : " .$this->name . ", Research Area : " .$this->area ;
        }
    function displayInfo()
        {
            echo "Name : " .$this->name . ", Research Area : " .$this->area ;
        }
    
}

class Department{
    private $name,$code,$phone,$description;
    private $lecturers=[];
    function __construct($name,$code,$phone,$description)
    {
        $this->name=$name;
        $this->code=$code;
        $this->phone=$phone;
        $this->description=$description;
    }
    
   function displayInfo(){
    echo "<br>";
    echo "Name : " .$this->name ."<br>";
    echo "Code : " .$this->code ."<br>";
    echo "Phone : " .$this->phone ."<br>";
    echo "Description : " .$this->description ."<br>";
   }

   function addLecturer($name,$email,$phone,$pos)
   {
    //composition concept:create another object
    $this->lecturers[]=new Lecturer($name,$email,$phone,$pos);
   }

   function addProfessors($lecturer)
   {
    //aggregation
    $this->lecturers[]=$lecturer;
   }

   function showLecturers()
   {
    foreach($this->lecturers as $lecturer)
    {
        // $lecturer->displayInfo();
        echo "<br>";
        echo "Name : ". $lecturer->name .", Email : ". $lecturer->email;
    }
   }
}
class Lecturer{
    use Researcher,Scientist{
        Scientist::displayResearchArea insteadOf Researcher;
        Researcher::displayInfo as showInfo;
    }
    public $name,$email,$phone,$pos;
    function __construct($name,$email,$phone,$pos)
    {
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->pos=$pos;
        $this->area="Natural Language Processing";
    }
    function displayInfo(){
        echo "<br> In Lecturer <br>";
        echo "Name : " .$this->name ."<br>";
        echo "Email : " .$this->email ."<br>";
        echo "Phone : " .$this->phone ."<br>";
        echo "Position : " .$this->pos ."<br>";
        echo "<br>" .$this->displayResearchArea();
       }
    //    function displayResearchArea()
    //    {
    //     echo "in lecturer";
    //    }

}
$se=new Department("Software Engineering","se001","034555456","Software Engineering");

$se->addLecturer("David","david@gmail.com","0987766677","Senior Level");
$se->addLecturer("Thiri","thiri@gmail.com","093766677","Junior Level");
$se->displayInfo();
$se->showLecturers();

$cloud=new Department("Cloud Computing","se001","08766766","Software Engineering");
$cloud->addLecturer("Bruce","bruce@gmail.com","9888799789","Cloud Architect");
$cloud->displayInfo();
$cloud->showLecturers();


$lecturer1=new Lecturer("Demon","demon@gmail.com","98656677","Professor");
// $lecturer1->displayInfo();
$lecturer2=new Lecturer("Smith","smith@gmail.com","7545566","Researcher");
// $lecturer2->displayInfo();
$cloud->addProfessors($lecturer1);
$cloud->addProfessors($lecturer2);
$cloud->showLecturers();

$lecturer1->displayInfo();
$lecturer1->showInfo();
$lecturer1->displayResearchArea();
// $researcher=new Researcher("Michael","NLP","","09877767","")
?>
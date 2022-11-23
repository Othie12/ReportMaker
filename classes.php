<?php
//this is the class library, all classes used will be found here

class Student {
    public $fname;
    public $lname;
    public $sex;
    public $photo;
    public $clas;
    public $parent;
    public $relationship;
    
}
class Par{//class to represent objects of the parent class
    public $fname;
    public $lname;
    public $contact;
    public $sex;
}
class teacher{
    public $fname;
    public $lname;
    public $contact;
    public $sex;
    public $uname;
    public $pwd;
    public $role;
    public $Subjects = array();
}
class clas{
    public $name;
    public $classTeacher;
    public $Subjects = array();
    public function noOfGirls(){}
    public function noOfBoys(){}
}
class subject{
    public $name;
    public $teacher;
    public function bstStdnt(){}
    public function worstStdnt(){}
}
class marks{
    public $student;
    public $subject;
    private $marksMid;
    private $marksEnd;
    public $term;
    public $year;
    public function setMksMid($stdnt, $subj, $mks){}
    public function setMksEnd($stdnt, $subj, $mks){}
    public function getMksMid($stdnt, $subj){}
    public function getMksEnd($stdnt, $subj){}
    public function total(){}//the total after computing mid and end
}
class requirement{
    public $class;
    public $reqName;
    public $quantity;
    public $quantityWords;
    public $term;
    public $year;
}
/*
class ReportCard{

   private $servername = "localhost";
   private $username = "root";
   private $password = "";
    
     try{
        $conn = new PDO("mysql:host=$servername;dbname=grace_repo;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare('SELECT s.fname, s.lname, s.class FROM student s JOIN marks_mid mm ON s.id = mm.stdnt_id WHERE s.id = :id');
        $stmt->bindParam('id', $this->id);
        $stmt->execute();
        $student = $stmt->fetch();
        $count = $stmt->rowCount();

    
        echo "connected successfuly";
    
        }catch(PDOExeption $e){
            echo "<p>connection failed: ".$e->getMessage()."</p><br>";
        }

    private $id;
    private $fname;
    private $lname;
    private $cl;
    private $term;
    private $year;
    public $zamfee;
    public $strtdate;
    private $subjects = array();

    public function __construct($id, $term, $year){
        $this->id = $id;
        $this->fname = $student['fname'];
        $this->lname = $student['lname'];
        $this->cl = $student['class']
        $this->term = $term;
        $this->year = $year;
    }
    public function agg($mark){}
    public function remark($mark){}
    public function initials($subj){}
    public function totalAgg(){}
    public function totalMrk(){}
    public function ctComm(){}
    public function schFeeW(){}
    public function schFee(){}
    public function promoted(){}

    $conn = null;

}*/
?>
<?php
/*
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $st->fname; ?></h1><br>
    <h1><?php echo $st->lname; ?></h1><br>
    <h1><?php echo $st->clas; ?></h1><br>
    <h1><?php echo $st->sex; ?></h1><br>
    <h1><?php echo $st->prelationship; ?></h1><br>
    <h1><?php echo $st->parent['fname']; ?></h1><br>
    <h1><?php echo $st->parent['lname']; ?></h1><br>
    <h1><?php echo $pr->fname." ".$pr->lname; ?></h1><br>
    <h1><?php echo $pr->tel; ?></h1><br>
</body>
</html>*/?>
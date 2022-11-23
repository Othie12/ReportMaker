<?php session_start(); 
include "functions.php";

$zamtym = $_POST['endMid'];
$cll = $_POST['class'];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is a webapp that enables you to create student's report cards without wasting time">
        <meta name="keywords" content="report, primary, school, manage, reportcard, easy">

        <title>Create marksheet</title>
        <link rel="stylesheet" href="grace.css">
    </head>
    <body>
        <header>
            <?php include "navigation.php"; ?>
        </header>

        <?php

                if(isset($_POST['mksht'])){
                    $stdnts = array();


                echo "<h2 align=\"center\">".resolve($_POST['sub'])." MARKSHEET FOR ".$_POST['class']."</h2>";
            echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"POST\">

                <select name=\"term\" id=\"term\">
                    <option value=\"1\">I</option>
                    <option value=\"2\">II</option>
                    <option value=\"3\">III</option>
                </select>:SELECT TERM

                <table>
                <marquee behavior=\" \" direction=\" \"> Fill out the form by providing the marks for each pupil in the table spaces provided and then press the SUBMIT button</marquee> 
                    <tr>
                        <th>Student's name</th>
                        <th>Marks(100%)</th>
                    </tr>";
                
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                         try{
                            $conn = new PDO("mysql:host=$servername;dbname=grace_repo;", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                            $stmt = $conn->prepare('SELECT s.id, s.fname, s.lname FROM student s JOIN marks_mid mm ON s.id = mm.stdnt_id WHERE s.class = :cl');
                            $stlt = $conn->prepare("SELECT mm.".$_POST['sub']." mid, me.".$_POST['sub']." en FROM marks_mid mm JOIN marks_end me ON mm.stdnt_id = me.stdnt_id where mm.stdnt_id = :stid");
                            $stmt->bindParam(':cl', $_POST['class']);
                            $stmt->execute();

                           

                            while($row = $stmt->fetch(PDO::FETCH_ASSOC) ){
                                $stdnts[] = $row;

                                $stlt->bindParam(':stid', $row['id']);
                                $stlt->execute();
                                $stmrk = $stlt->fetch();

                                echo "<tr>";
                                echo "<td>".$row['fname']." ".$row['lname']."</td>";
                                if($zamtym == 'marks_mid'){
                                echo "<td><input type=\"number\" class=\"markinput\" name=\"marksmid[]\" min=\"0\" max=\"100\" value=\"".$stmrk['mid']."\"></td>";
                                }else{
                                echo "<td><input type=\"number\" class=\"markinput\" name=\"marksend[]\" min=\"0\" max=\"100\" value=\"".$stmrk['en']."\"></td>";
                                }
                                echo "</tr>";
                                echo "<input type=\"hidden\" name=\"std[]\" value=\"".$row['id']."\"> ";


                            }
                            //print_r($stdnts);
                            
                    if($zamtym == 'marks_mid'){
                        echo 'YOU ARE ENTERING MID TERM MARKS';
                    }elseif($zamtym == 'marks_end'){
                        echo 'YOU ARE ENTERING END OF TERM MARKS';
                    }else{
                        echo 'YOU ARE ENTERING MARKS OF MID AND EOT AT ONCE';
                    }

                      
                            }catch(PDOExeption $e){
                                echo "<p>connection failed: ".$e->getMessage()."</p><br>";
                            }
                            $conn = null;
                            echo "<input type=\"hidden\" name=\"zamtym\" value=\"".$zamtym."\"> ";
                            echo "<input type=\"hidden\" name=\"subjec\" value=\"".$_POST['sub']."\"> ";
                           echo "<input type=\"submit\" name=\"sendmks\" value=\"SUBMIT\">";

                     echo "</form>
                      </table>";
                }
                    echo "</body>
                        </html>";


if(isset($_POST['sendmks'])){
$servername = "localhost";
$username = "root";
$password = "";
$zamtym = $_POST['zamtym'];
$subjec = $_POST['subjec'];

$midArr = $_POST['marksmid'];
$endArr = $_POST['marksend'];
$stdnts = $_POST['std'];

 try{
    $conn = new PDO("mysql:host=$servername;dbname=grace_repo;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stt = $conn->prepare('UPDATE marks_mid SET '.$subjec.'= :smark, term = :term, yr = CURDATE() WHERE stdnt_id = :stid');
    $slt = $conn->prepare('UPDATE marks_end SET '.$subjec.'= :smark, term = :term, yr = CURDATE() WHERE stdnt_id = :stid');


    $conn->beginTransaction();


        if($zamtym == 'marks_mid'){
            echo count($stdnts);
            echo count($midArr);
            echo count($endArr);
            print_r($stdnts);
            print_r($midArr);
            print_r($endArr);


                assert(count($stdnts) === count($midArr));
                for ($i = 0; $i < count($stdnts); $i++) {                
            echo "mid term for ".$stdnts[$i]." updated successfully";
    $stt->bindParam(':smark',$midArr[$i]);
    $stt->bindParam(':stid', $stdnts[$i]);
    $stt->bindParam(':term', $_POST['term']);
    $stt->execute();
    }

        }elseif($zamtym == 'marks_end'){

            assert(count($stdnts) === count($endArr));
            for ($i = 0; $i < count($stdnts); $i++) { 
            echo "end of term for ".$stdnts[$i]." updated successfully";
    $slt->bindParam(':smark', $endArr[$i]);
    $slt->bindParam(':stid', $stdnts[$i]);
    $slt->bindParam(':term', $_POST['term']);
    $slt->execute();
           }

        }elseif ($zamtym == 'both') {


    assert(count($stdnts) === count($endArr));
     for ($i = 0; $i < count($stdnts); $i++) { 
            echo "end of term for ".$stdnts[$i]." updated successfully\n";
            $slt->bindParam(':smark', $endArr[$i]);
            $slt->bindParam(':stid', $stdnts[$i]);
            $slt->bindParam(':term', $_POST['term']);
            $slt->execute();
    }

    assert(count($stdnts) === count($endArr));
    for ($i = 0; $i < count($stdnts); $i++) { 
            echo "mid term for ".$stdnts[$i]." updated successfully\n";
            $stt->bindParam(':smark', $endArr[$i]);
            $stt->bindParam(':stid', $stdnts[$i]);
            $stt->bindParam(':term', $_POST['term']);
            $stt->execute();
   }

        }else{
            echo "nothing worked".$zamtym;

        }

    $conn->commit();



    header("refresh:0;gra.php");

    }catch(PDOExeption $e){
        echo "<p>connection failed: ".$e->getMessage()."</p><br>";
    }
    $conn = null;
}
?>


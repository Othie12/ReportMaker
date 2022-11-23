<?php session_start(); 
include "functions.php";
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
        <main>
            <div class="primary">
                <h2>CREATE MARKSHEET</h2>
            <form method="POST" action= "marksheet.php" class="tableform">

            <marquee behavior=" " direction=" ">  Only the subjects you teach will be availed to you to update marks. You are NOT ALLOWED to create marks for a class or subject you don't teach so be careful while choosing the class and subject </marquee> 

            <select name="sub" id="sub">
            <?php 
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                         try{
                            $conn = new PDO("mysql:host=$servername;dbname=grace_repo;", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                            $probable = $conn->prepare('SELECT s.sub_name FROM subject s JOIN subject_teacher st ON s.id = st.sub_id WHERE st.teacher_id = :steacher');
                            $probable->bindParam(':steacher', $_SESSION['trId']);
                            $probable->execute();

                            while($row = $probable->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value=".$row['sub_name'].">".$row['sub_name']."</option> <br>";
                            }
                            
                            }catch(PDOExeption $e){
                                echo "<p>connection failed: ".$e->getMessage()."</p><br>";
                            }
                            $conn = null;

                        ?>
                        </select>:SELECT SUBJECT
                        

                  <select name="class" id="class">
                    <option value="P.7">P.7</option>
                    <option value="P.6">P.6</option>
                    <option value="P.5">P.5</option>
                    <option value="P.4">P.4</option>
                    <option value="P.3">P.3</option>
                    <option value="P.2">P.2</option>
                    <option value="P.1">P.1</option>
                    <option value="top">TOP</option>
                    <option value="middle">MIDDLE</option>
                    <option value="baby">BABY</option>
                </select>:SELECT CLASS<br><br>

            <select name="endMid" id="endmid">
                <option value="marks_mid">Mid term</option>
                <option value="marks_end">EOT</option>
                <option value="both">Both</option>
            </select>:SELECT EXAM TYPE

                <input type="submit" name="mksht" value="Get form">
             </form>
             <?php
            if(isset($_POST['mksht'])) {
                $_SESSION['subject'] = $_POST['sub'];

                echo "<h2>".resolve($_POST['sub'])." MARKSHEET FOR ".$_POST['class']."</h2>";
            echo "<form action=\"databases/marks2db.php\" method=\"POST\">

                <select name=\"term\" id=\"term\">
                    <option value=\"1\">I</option>
                    <option value=\"2\">II</option>
                    <option value=\"3\">III</option>
                </select>

                <table>
                    <tr>
                        <th>Student's name</th>
                        <th>marks-mid(100%)</th>
                        <th>marks-end(100%)</th>
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

                                $stlt->bindParam(':stid', $row['id']);
                                $stlt->execute();
                                $stmrk = $stlt->fetch();

                                echo "<tr>";
                                echo "<td>".$row['fname']." ".$row['lname']." <input type=\"submit\" name=\"sendmks\" value=\"".$row['id']."\"> </td>";
                                echo "<td><input type=\"number\" class=\"markinput\" name=\"markmid\" min=\"0\" max=\"100\" value=\"".$stmrk['mid']."\"></td>";
                                echo "<td><input type=\"number\" class=\"markinput\" name=\"markend\" min=\"0\" max=\"100\" value=\"".$stmrk['en']."\"></td>";
                                echo "</tr>";
                            }
                            
                            }catch(PDOExeption $e){
                                echo "<p>connection failed: ".$e->getMessage()."</p><br>";
                            }
                            $conn = null;
                        }
                        ?>

             
                 </table>
            </form>
            </div>
            <div class="secondary"></div>
        </main>
        
        <script src="graceRepo.js"></script>
    </body>
</html>
<?php 
session_start();
include "functions.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is a webapp that enables you to create student's report cards without wasting time">
        <meta name="keywords" content="report, primary, school, manage, reportcard, easy">

        <title>Register teacher</title>
        <link rel="stylesheet" href="grace.css">
    </head>
    <body>
        <header>
        <?php include "navigation.php"; ?>
        </header>
        <main>
            <div class="primary">
                <h2>STAFF REGISTRATION FORM</h2>
              <form method="POST" action="databases/teacher2db.php">
                <label for="fname">First name:</label><br>
                <input type="text" name="fname" placeholder="eg Othieno" required><br><br>

                <label for="lname">Last name:</label><br>
                <input type="text" name="lname" placeholder="eg Peter" required><br><br>

                <label for="sex">Sex: </label>
                <input type="radio" name="sex" id="male" value="male">Male  
                <input type="radio" name="sex" id="female" value="female">Female <br><br>

                <label for="username">Username:</label><br>
                <input type="text" name="username" placeholder="Lucas101" required><br><br>

                <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="password you'll use while logging in" required><br><br>

                <label for="class">Class(classteacher):</label><br>
                <select name="class" id="class">
                    <option value="">NONE</option>
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
                </select><br><br>


                <label for="duty">Post:</label><br>
                <select name="duty" id="duty">
                    <option value="none">None</option>
                    <option value="ht">Head teacher</option>
                    <option value="bursar">Bursar</option>
                    <option value="dos">DOS</option>
                    <option value="secretary">Secretary</option>
                    <option value="sports">Sports teacher</option>
                    <option value="Other">Other</option>
                </select><br><br>

                <label for="contact">Contact:</label><br>
                <input type="tel" name="contact" placeholder="eg.0705339243"><br><br>

                <label for="subj" aria-required="true">Subjects taught(can pick multiple)</label> <br>

                <?php 
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                         try{
                            $conn = new PDO("mysql:host=$servername;dbname=grace_repo;", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                            $probable = $conn->prepare('SELECT `id`, `sub_name` FROM `subject`');
                            $probable->execute();

                            while($row = $probable->fetch(PDO::FETCH_ASSOC)){
                                echo "<input type=\"checkbox\" name=\"subj[]\" id=\"subj".$row['id']."\" value=\"".$row['id']."\">".resolve_subj($row['id'])." <br>";
                            }
                            
                            }catch(PDOExeption $e){
                                echo "<p>connection failed: ".$e->getMessage()."</p><br>";
                            }
                            $conn = null;

                        ?>

                <input type="submit" value="Register" class="submit">
              </form>
            </div>
            <div>
                
            </div>

        </main>

        <script src="graceRepo.js"></script>
    </body>
</html>
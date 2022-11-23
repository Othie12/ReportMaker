<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is a webapp that enables you to create student's report cards without wasting time">
        <meta name="keywords" content="report, primary, school, manage, reportcard, easy">

        <title>Make report structure</title>
        <link rel="stylesheet" href="grace.css">
    </head>
    <body>
        <header>
        <?php include "navigation.php"; ?>
        </header>
        <main>
            <div class="primary">
                <h2>PLEASE DEFINE THE GRADING FOR AN APPROPRIATE MARK BOUNDARY</h2>
              <form method="POST" action="databases/makerepo2db.php" class="tableform">
                    <table class="grading">
                        <tr>
                            <th>MARKS</th>
                            <th>AGG</th>
                            <th>REMARKS</th>
                        </tr>

                        <?php 
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                         try{
                            $conn = new PDO("mysql:host=$servername;dbname=grace_repo;", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                            $probable = $conn->prepare('SELECT `id`, `mks_frm`, `mks_to` FROM `remarks`');
                            $probable->execute();

                            while($row = $probable->fetch(PDO::FETCH_ASSOC)){
                                echo "<tr>
                                <td>".$row['mks_frm']."-".$row['mks_to']."</td>
                                <td><select name=\"agg".$row['id']."\" id=\"".$row['id']."\">
                                    <option value=\"D1\">D1</option>
                                    <option value=\"D2\">D2</option>
                                    <option value=\"C3\">C3</option>
                                    <option value=\"C4\">C4</option>
                                    <option value=\"C5\">C5</option>
                                    <option value=\"C6\">C6</option>
                                    <option value=\"P7\">P7</option>
                                    <option value=\"P8\">P8</option>
                                    <option value=\"F9\">F9</option>
                                </select></td>
                                <td><input type=\"text\" name=\"remark".$row['id']."\" id=\"remark".$row['id']."\"></td>
                            </tr>";
                            }
                    
                            
                            }catch(PDOExeption $e){
                                echo "<p>connection failed: ".$e->getMessage()."</p><br>";
                            }
                            $conn = null;

                        ?>

                    </table>
                <input type="submit" value="SUBMIT" class="submit">
              </form>
            </div>
            <div class="secondary">
                <h2>NOW LET'S DEFINE A <span style="color: purple;"> CLASS TEACHER'S COMMENT &AMP; HEADTEACHER'S COMMENT</span></h2>
                <form method="POST" action="" class="tableform">
                  <table>
                      <tr>
                          <th>STUDENT TOTAL</th>
                          <th>CLASS TEACHER'S COMMENT</th>
                          <th>HEADTEACHER'S COMMENT</th>
                      </tr>
                  </table>
                  <br><br><label for="nxtrm">NEXT TERM BEGINS ON:</label><br>
                  <input type="date" name="nxtrm"><br><br>
                  <label for="schoolfee">SCHOOL FEES:</label>
                  <input type="text" name="schoolfee"><br><br>
                  <input type="button" name="other_req" class="other_req" value="Click here to add another fee or requirement"><br><br>
  
              <article class="otherReq">
                  <label for="otherReqIn">REQUIREMENT NAME:</label><br>
                  <input type="text" name="otherReqIn" id="otherReqName"><br><br>
                  <label for="otherReqVal">VALUE:</label><br>
                  <input type="text" name="otherReqVal" id="otherReqValue"><br><br>
                  <input type="button" name="other_req" class="other_req" value="Click here to add another fee or requirement"><br><br>
              </article>
                </form>
  
            </div>
        </main>

        <script src="graceRepo.js"></script>
    </body>
</html>

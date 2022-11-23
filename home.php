<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is a webapp that enables you to create student's report cards without wasting time">
        <meta name="keywords" content="report, primary, school, manage, reportcard, easy">
        <title>GRACE REPORT MAKER</title>
        <link rel="stylesheet" href="grace.css">
    </head>
    <body>
        <header>
        <?php include "navigation.php"; ?>
        </header>
        <main>
            <div class="primary">
               <h1>Welcome...</h1>
               <p>this is a report making software that is going to help make your reports on-the-go <br> 
            what you can do with it is;</p>
            <dl>
                <dt><b>create marksheet</b></dt>
                <dd>here you'll have to make a marksheet for the students who did your exam, this marksheet will <br>
                later be taken to the database for further genaration of reports. <br>
            you'll be availed with a table containing the student names and youll make the marksheet by filling in their marks</dd>
            </dl>
                <?php
                    echo "<h3>".$_SESSION["trLname"]."</h3><br>";
                    echo "<h3>".$_SESSION["trId"]."</h3><br>";
                    echo "<h3>".$_SESSION["username"]."</h3><br>";
                    echo "<h3>".$_SESSION["trClass"]."</h3><br>";
                ?>
             </div>
            <div></div>
        </main>

        <script src="graceRepo.js"></script>
    </body>
</html>
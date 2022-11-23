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
            <h3>Today is <?php echo date(D)?>, <?php echo date(d)."/".date(m)."/".date(y); ?></h3>
            <div class="primary">
                <h2>PUPIL REGISTRATION FORM <br></h2>
              <form method="POST" action="databases/stdnt2db.php" >
                <label for="fname">First name:</label><br>
                <input type="text" name="fname" placeholder="eg Othieno" required><br><br>
                <label for="lname">Last name:</label><br>
                <input type="text" name="lname" placeholder="eg Peter" required><br><br>
                <label for="class">Class:</label><br>
                <select name="class" id="class" required>
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

                <label for="sex" aria-required="true">Sex:</label><br>
                <input type="radio" name="sex" id="boy" value="Male">Boy
                <input type="radio" name="sex" id="girl" value="Female">Girl <br><br>

                <label for="photo">Profile photo:</label><br>
                <input type="file" name="photo" id="stdnt_photo" placeholder="passport photo"><br><br>

                <label for="fname">Parent / guardian's first name:</label><br>
                <input type="text" name="pfname" placeholder="eg Othieno"><br><br>
                
                <label for="lname">Parent / guardian's Last name:</label><br>
                <input type="text" name="plname" placeholder="eg Peter"><br><br>

                <label for="psex" aria-required="true">Sex:</label><br>
                <input type="radio" name="psex" id="male" value="Male">Male
                <input type="radio" name="psex" id="female" value="Female">Female<br><br>


                <label for="tel">Parent's contact:</label><br>
                <input type="tel" name="ptel"><br><br>

                <label for="parent_title">Parent / guardian's relationship</label>
                <select name="parent_title" id="title">
                    <option value="">Unknown</option>
                    <option value="father">Father</option>
                    <option value="mother">Mother</option>
                    <option value="sis">Sister</option>
                    <option value="bro">Brother</option>
                    <option value="uncle">Uncle</option>
                    <option value="aunt">Aunt</option>
                    <option value="other.">Other</option>
                 </select><br><br>


                <input type="submit" value="Register" class="submit">

            <marquee behavior="" direction="">(Please give appropriate info to avoid data corruption)</marquee>
              </form>
            </div>
            <div></div>
            
       </main>

<script src="graceRepo.js"></script>
</body>
</html>
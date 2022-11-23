<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is a webapp that enables you to create student's report cards without wasting time">
        <meta name="keywords" content="report, primary, school, manage, reportcard, easy">
        <title>Teacher login form</title>
        <link rel="stylesheet" href="grace.css">
        <style>
            form > label, h1, h2 {
                 font-size: larger;
                 color: white;
             }
             main {
                margin-top: 3%;
             }
             h1 {
                font-size:5vw
             }
             h1 {
                border-bottom-style:solid;
                border-bottom-color: white;
             }
             h3 {
                color: red;
             }

        </style>
    </head>
    <body class="login_page">
        <main>
    <section class="title">
        <h1>GRACE NUR & PRIMARY SCHOOL</h1>
        <h2>Teacher login form</h2>
    </section>
        <form action="databases/login2db.php" method="post">

        <?php if (isset($_GET['error'])) { ?>
        <h3 class="error"><?php echo $_GET['error']; ?></h3>
        <?php } ?>

            <label for="username">Username</label><br>
            <input type="text" name="username" placeholder="Username you used when regestering"><br><br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" placeholder="Your login password"><br><br>

            <input type="submit" value="login" class="submit">
        </form>
    </main>
        <script src="graceRepo.js"></script>
    </body>
</html>
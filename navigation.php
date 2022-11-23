<?php
session_start();
    function cla($pgname){
        $page = $_SERVER["PHP_SELF"];
        if($page == $pgname){
            echo "class=\"active\"";
        }else{
            echo "";
        }
    }
?>

<h1>REPORT MAKER</h1>
            <nav>
                <ul>
                    <li <?php cla("/grace_repo/home.php")?>><a href="home.php">Home</a></li>
                    <li <?php cla("/grace_repo/gra.php")?>><a href="gra.php">Create marksheet</a></li>
                    <li <?php cla("/grace_repo/makerepo.php")?>><a href="makerepo.php">Make report</a></li>
                    <li <?php cla("/grace_repo/registerPupil.php"); cla( "/grace_repo/register_teacher.php");?>><a href="#">Register</a>
                        <ul>
                            <li><a href="registerPupil.php">Student</a></li>
                            <li><a href="regester_teacher.php">Staff</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
<h4><?php echo "Tr. ".$_SESSION['trLname']?></h4>
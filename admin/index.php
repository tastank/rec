<?php
    include(__DIR__."/conf.php");
    include(__DIR__."/layout/main.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Project root</title>
</head>
<body>
<?php
    include_once(__DIR__."conf/user.php");
    if (!isset($_SESSION['username'])) {
        header('location: /rec/login.php');
    }

    if (isset($_POST['manf'])) {
        insert_answer($_POST);
    }
    if (isset($_GET['day'])) {
        $day = $_GET['day']; 
    } else {
        $day = date("Ymd");
    }

    ?>
        <div class="answers_table">
        <table class="answers_table">
        <form action="index.php" method="POST">
        <tr>
        <b><td>Username</td><td>Date</td><td>Manufacturer</td><td>Number</td><td>Name</td></b>
        <?php
        while ($answers_arr = mysql_fetch_assoc($answers_result)) {
            if (!$answers_arr['resolved']) {
                ?>
                <tr>
                <!--username-->
                <td>
                <?php echo $answers_arr['username']; ?>
                </td>
                <!--date-->
                <td>
                </td>
                </tr>
                <?php
            }
        }
        ?>

        </table>
        </div>
    <?php

?>
</body>
</html>

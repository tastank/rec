<?php include(__DIR__."/conf.php"); ?>
<link rel="stylesheet" href="<?php echo SITE_ROOT ?>/layout/style_main.css" type="text/css" media="all" />


<?php

    function display_photo($day) {
        $get_filename_query_string = "SELECT filename FROM aircraft WHERE date = '" . $day . "';";
        $get_filename_query_string = mysql_real_escape_string($get_filename_query_string);
        $filename_result = mysql_query($get_filename_query_string);
        $filename_arr = mysql_fetch_assoc($filename_result);
        $filename = $filename_arr['filename'];
        //now that we have the filename, print the image
        ?>
            <div class="image">
            <!--Not sure why this class is necessary-->
            <img class="image" src="images/<?php echo $filename ?>" width="1024" />
            </div>
        <?php
    }

    function print_answer_form($day) {

        $get_number_query_string = "SELECT number FROM aircraft WHERE date = '" . $day . "';";
        $get_number_query_string = mysql_real_escape_string($get_number_query_string);
        $number_result = mysql_query($get_number_query_string);
        $number_arr = mysql_fetch_assoc($number_result);
        $number = $number_arr['number'];

        ?>
            <div class="answer_form">
            <form action="index.php" method="POST">
            <table class="answer_form">
                <tr>
                    <td width="200">Your Name: </td>        <td width="500"><input type="text" name="username" ></td>
                </tr><tr>
                    <td>Manufacturer: </td><td><input type="text" name="manf"></td>
                </tr><tr>
                    <td>Number: </td>      <td><input type="text" name="model"></td>
                </tr><tr>
                    <td>Name: </td>        <td><input type="text" name="name"></td>
                </tr>
            </table>
            <input type="hidden" name="number" value="<?php echo $number ?>">
            <input type="submit" name="Submit" value="Submit" />
            </form>
            </div>
        <?php
    }

    function insert_answer($POST) {
        $username = mysql_real_escape_string($POST['username']);
        $number = mysql_real_escape_string($POST['number']);
        $manf = mysql_real_escape_string($POST['manf']);
        $model = mysql_real_escape_string($POST['model']);
        $name = mysql_real_escape_string($POST['name']);

        $insert_query = "INSERT INTO answers (username, number, manf, model, name) VALUES (".
            "'" . $username . "', ".
            $number . ", ".
            "'" . $manf . "', ".
            "'" . $model . "', ".
            "'" . $name . "'".
            ");";
        mysql_query($insert_query);
    }

?>

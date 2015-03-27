<?php include(__DIR__."/conf.php"); ?>
<link rel="stylesheet" href="<?php echo SITE_ROOT ?>/layout/style_main.css" type="text/css" media="all" />


<?php

    function display_photo($day) {
        $get_filename_query_string = "SELECT filename FROM aircraft WHERE date = '" . $day . "';";
        $filename_result = mysql_query($get_filename_query_string);
        $filename_arr = mysql_fetch_assoc($filename_result);
        $filename = $filename_arr['filename'];
        //now that we have the filename, print the image
        ?>
            <div class="image">
            <img src="<?php echo $filename ?>" />
            </div>
        <?php
    }

    function print_answer_form($day) {
    }

?>

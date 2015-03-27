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
    if (isset($_GET('day')) {
        $day = $_GET('day'); 
    } else {
        $day = date("Ymd");


    display_photo($day);
    print_answer_form($day);
?>
</body>
</html>

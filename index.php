<?php
//Display all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

//All times are taken in UTC and displayed in user's timezone
date_default_timezone_set('UTC');
$CurrentDateTime = date("Y-m-d H:i:s");

//Import classes
require_once('classes/classes.inc.php');
// require_once('layout/global/global.session.inc.php'); 

// Echo"<pre>";
// var_dump($_SESSION);
// Echo"</pre>";

//Check if page variables are submitted
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "";
}

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = "";
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = "";
}
?>

<html>
<head>
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="panel">
            <?
            Echo"<h2>Title</h2>";
            require_once('layout/navigation.inc.php'); 
            
            switch($page){
                default:
                    require_once('layout/homepage.inc.php');
                break;

                case"playlist":
                    require_once('layout/playlist.inc.php');
                break;
            }
            ?>

        </div>
            <? include('layout/footer.inc.php'); ?>
    </div>
</body>
</html>
<?php session_start(); ?>
<html>
<head>
    <title>GP Surgery</title>
    <link rel="stylesheet" href="css/application.css" />
    <link rel="stylesheet" href="css/slider-style.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="css/modal/jquery.modal.css" type="text/css" media="screen" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/application.js"></script>
    <script type="text/javascript" src="js/slider/jquery.silver_track.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/slider/jquery.silver_track_recipes.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/slider/jquery.silver_track.navigator.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/slider/jquery.silver_track.bullet_navigator.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/slider/jquery.silver_track.responsive_hub_connector.js" charset="utf-8"></script>
    <script src="js/modal/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/slider/recipe_example1.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/slider/recipe_example1_usage.js" charset="utf-8"></script>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><li><a href="services.php">Services</a></li></li>
        <li><li><a href="consultation.php">Consultation</a></li></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="appointments.php">Appointments</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if(isset($_SESSION["username"])){ ?>
            <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
        <?php } ?>
    </ul>
</nav>
<div class="wrapper">
<div class="content">
<?php
include_once 'admin_menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="author license" href="jameshood118@gmail.com">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="google-site-verification" content="g33cCL3Zejco00mObr5iDhwZwaNfo-ttj_I3IQINO-c" />
    <META NAME="description" CONTENT="PHP Web Developer, MySQL, HTML, CSS, Javascript, Flash, Actionscript 2.0/3.0">
    <META NAME="author" CONTENT="James Hood">
    <META NAME="ROBOTS" CONTENT="ALL">
    <title>The Portfolio of James Hood</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="sticky-footer-navbar.css" rel="stylesheet">

</head>

<body>
    <?php include_once("includes/analyticstracking.php") ?>
        <?php include("includes/menu.php"); ?>

            <div class="jumbotron">
                <div class="container">
                    <img src="../images/gallerybanner.png" title="Portfolio of James Hood" class="headtop center img-responsive" />
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 box blogbox">
                        <?php 
$link1='https://drive.google.com/file/d/0B2lCjTRAVBHYa1loamZHc29XQ1E/edit?usp=sharing';
$link2='https://drive.google.com/file/d/0B2lCjTRAVBHYd2JKb2VBWkNYLWc/edit?usp=sharing';
$link3='https://drive.google.com/file/d/0B2lCjTRAVBHYa1RmM2VwZ0V5UDQ/edit?usp=sharing';
$link4='https://drive.google.com/file/d/0B2lCjTRAVBHYcG51MXUwdFFUM3M/edit?usp=sharing';
$link5='https://drive.google.com/file/d/0B2lCjTRAVBHYRmdlYXdaQ0pIUDA/edit?usp=sharing';
$link6='https://drive.google.com/file/d/0B2lCjTRAVBHYSjZTaHc1aHdnaVU/edit?usp=sharing';
$link7='https://drive.google.com/file/d/0B2lCjTRAVBHYcENmT3lueTNLdVk/edit?usp=sharing';
$link8='https://drive.google.com/file/d/0B2lCjTRAVBHYeGRuV3FnZ01mN2c/edit?usp=sharing';
$link9='https://drive.google.com/file/d/0B2lCjTRAVBHYUFVobUNBRTVJaEE/edit?usp=sharing';
$link10='https://drive.google.com/file/d/0B2lCjTRAVBHYZzUtb0FWaGtyMXM/edit?usp=sharing';
$link11='https://drive.google.com/file/d/0B2lCjTRAVBHYZ3U1U21UcXBITFk/edit?usp=sharing';

?>
                            <!-- Links -->
                            <h1>Writings</h1>
                            <ul class="WritingList">
                                    <li><a href="<?php echo $link1?>" target="_blank" class="menuLink"><span>Poems/Songs</span></a>
                                    <li><a href="<?php echo $link2?>" target="_blank" class="menuLink"><span>Heroes Unlimited: Invasion Denied</span></a></li>
                                    <li><a href="<?php echo $link3?>" target="_blank" class="menuLink"><span>Adventure</span></a></li>
                                    <li><a href="<?php echo $link4?>" target="_blank" class="menuLink"><span>Vigiliance</span></a></li>
                                    <li><a href="<?php echo $link5?>" target="_blank" class="menuLink"><span>Battle of the Wyrm</span></a></li>
                                    <li><a href="<?php echo $link6?>" target="_blank" class="menuLink"><span>Battle of the Wyrm History</span></a></li>
                                    <li><a href="<?php echo $link7?>" target="_blank" class="menuLink"><span>Heroes Unlimited: 2nd Game</span></a></li>
                                    <li><a href="<?php echo $link10?>" target="_blank" class="menuLink"><span>Mage The Acension Chronicle</span></a></li>
                                    <li><a href="<?php echo $link11?>" target="_blank" class="menuLink"><span>Feng Shui Game</span></a></li>
                                    <li><a href="<?php echo $link8?>" target="_blank" class="menuLink"><span>Waterlogged</span></a></li>
                                    <li><a href="<?php echo $link9?>" target="_blank" class="menuLink"><span>Nuked</span></a></li>
                            </ul>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <p class="text-muted">
                        <?php include("includes/bottommenu.php"); ?>
                            <?php include("includes/footer.php"); ?>
                    </p>
                </div>
            </footer>
            <BR>
            <BR>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>
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
                    <div class="col-lg-10 box well well-lg">
                        <?php

include("includes/db.php"); 

$table = "Galleries" ;

$show_all = "SELECT * FROM $table ORDER BY category ";

mysql_connect ($host,$user,$pass) or die ();
mysql_select_db ($db)or die ();
$result = mysql_query ($show_all) or die ();

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$gallery = $row[ "category" ]."";
$linkname = $row[ "link_name" ]."";

if ($linkname =='') {
	$passed_name = $name;
	} else {
    $passed_name = $linkname;
		}

?>

                            <a href="#Window" id="<?php echo $Idnum?>" data-gallery="<?php echo $gallery?>" data-passedname="<?php echo $passed_name?>" data-title="<?php echo $name?>" data-linkname="<?php echo $linkname?>" data-toggle="modal" data-target="#myModal">
<img class="GalleryThumbs" src="images/<?php echo $gallery?>/<?php echo $name?>" width=200></a>

                            <?php
$number=$number+1;

if ($number>3){
print ('<BR>');
$number=0;
}
}


?>
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

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $('#myModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var title = button.data('passedname')
                    var gallery = button.data('gallery')
                    var passed_name = button.data('passedname')
                    var modal = $(this)
                    modal.find('.modal-title').text(gallery + ' - ' + passed_name)
                    modal.find('.modal-body').html('<img src="images/' + gallery + '/' + passed_name + '" style="max-height:500px; max-width:500px;">')
                })
            </script>
</body>

</html>
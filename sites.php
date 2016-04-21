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
        <?php include("includes/menu2.php"); ?>

            <div class="jumbotron">
                <div class="container">
                    <img src="../images/gallerybanner.png" title="Portfolio of James Hood" class="headtop center img-responsive" />
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 box well well-lg">
                        <h1>Sites I have worked on</h1>

                        <?php 

include("includes/db.php");
$table = "sites" ;

$show_all = "SELECT * FROM $table WHERE Category='production' ORDER BY Idnum DESC";

$number=0;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$address = $row[ "Address" ]."";
$role = $row[ "Role" ]."";
$company = $row[ "Company" ]."";
$image = $row[ "Image" ]."";
$category = $row[ "Category" ]."";
$description = $row[ "Description" ]."";
?>

                            <a href="#" id="<?php echo $Idnum?>" data-name="<?php echo $name?>" data-address="<?php echo $address?>" data-devrole="<?php echo $role?>" data-company="<?php echo $company?>" data-image="<?php echo $image?>" data-category="<?php echo $category?>" data-description="<?php echo description?>" data-toggle="modal" data-target="#myModal">
    <img class="sitesbadge" src="/images/sites/<?php echo $image?>"/></a>
                            <?php 
    $number=$number+1; 
    if ($number>3)
    { 
        print ('<BR>'); 
        $number=0; 
    } 
} ?>
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
                    var name = button.data('name')
                    var address = button.data('address')
                    var devrole = button.data('devrole')
                    var company = button.data('company')
                    var image = button.data('image')
                    var category = button.data('category')
                    var description = button.data('description')
                    var modal = $(this)
                    modal.find('.modal-title').text(name)
                    modal.find('.modal-body').html('<div><img src="images/sites/' + image + '" style="max-height:500px; max-width:500px;"></div><div><strong>Name:</strong> ' + name + ' <BR><strong>Address: </strong><a class="menuLink" href="' + address + '" target="_blank">' + address + '</a><BR><strong>Role: </strong>' + devrole + '<BR><strong>Company:</strong>' + company + '<BR><strong>Description: </strong>' + description + '</div >')
                })
            </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 box well well-lg boxcenter">
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

                    <a href="#" class="siteslink" id="<?php echo $Idnum?>" data-name="<?php echo $name?>" data-address="<?php echo $address?>" data-devrole="<?php echo $role?>" data-company="<?php echo $company?>" data-image="<?php echo $image?>" data-category="<?php echo $category?>" data-description="<?php echo $description?>" data-toggle="modal" data-target="#myModal">
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
    <?php include("includes/footer.php"); ?>

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
                modal.find('.modal-body').html('<div><img src="images/sites/' + image + '" class="img-responsive"></div><div><strong>Name:</strong> ' + name + ' <BR><strong>Address: </strong><a class="menuLink" href="' + address + '" target="_blank">' + address + '</a><BR><strong>Role: </strong>' + devrole + '<BR><strong>Company:</strong>' + company + '<BR><strong>Description: </strong>' + description + '</div >')
            })
        </script>

</html>
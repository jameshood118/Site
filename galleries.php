<!DOCTYPE html>
<html lang="en">
<?php include("includes/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 box well well-lg gallery">
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

if ($number>4){
print ('<BR>');
$number=0;
}
}


?>
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
                var title = button.data('passedname')
                var gallery = button.data('gallery')
                var passed_name = button.data('passedname')
                var modal = $(this)
                modal.find('.modal-title').text(gallery + ' - ' + passed_name)
                modal.find('.modal-body').html('<img src="images/' + gallery + '/' + passed_name + '" class="img-responsive">')
            })
        </script>

</html>
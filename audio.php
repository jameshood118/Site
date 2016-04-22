<!DOCTYPE html>
<html lang="en">
<?php include("includes/header.php"); ?>
    
            <div class="container">
                <center>
                    <?php


$dir = "audio/samples";
$handle=opendir($dir);
  
$file = readdir($handle);
$array = array();
  
$count = 0;
     while (($file = readdir($handle))!==false) {
      if ($file != "." && $file != ".." && ereg(".mp3",$file)) {
	 $array[] = $file;
      $count++;
	       if ($count>"30"){
break;
	}
      }
    }
 
			
	closedir($handle); 
echo "<center><BR><BR>There are $count Audio Samples within the <i>$dir</i> Directory<BR>";
echo "<HR width=65%></center>";?>

                        <ul style="list-style-type:none;">

                            <?php
foreach($array as $audios)
 {
$audname = substr($audios, 0, -4);

?>
                                <!--[if IE ]>
<?php 
  print ('<li><embed src="'.$dir.'/'.$audios.'" width="320" height="20" autostart=false></embed>'.$audios.'</li>');
?>
<![endif]-->

                                <!--[if !IE]><!-->
                                <?php
    $isFirefox = preg_match('/firefox/i',$_SERVER['HTTP_USER_AGENT']) ? TRUE : FALSE;

		if($isFirefox) {
			
  print ('<li><embed src="'.$dir.'/'.$audios.'" width="320" height="20" autostart=false></embed><BR>'.$audios.'</li>');
		} else {
  print ('<li><audio src="'.$dir.'/'.$audios.'" width="320" height="20" controls /></audio><BR>'.$audios.'</li>');
  
?>
                                    <!--<![endif]-->
                                    <?php }

 
 $number=$number+1;

if ($number>30){
print ('<br>');
$number=0;
}

 }
 				
?>
                        </ul>
                </center>
            </div>
<?php include("includes/footer.php"); ?>
</html>
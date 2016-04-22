<!DOCTYPE html>
<html lang="en">
<?php include("includes/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 box well well-lg">
                <?php
$dir = "videos";
$handle=opendir($dir);
  
$file = readdir($handle);
$array = array();
  
$count = 0;
     while (($file = readdir($handle))!==false) {
      if ($file != "." && $file != ".." && ereg(".mov",$file)) {
	 $array[] = $file;
      $count++;
	       if ($count>"30"){
break;
	}
      }
    }
			
	closedir($handle); 
echo "<center><BR><BR>There are $count Video(s) within the <i>$dir</i> Directory, Displaying using HTML5 (If the browser supports the codec and tag)<BR>";
echo "<HR width=65%></center>";?>

                    <ul style="list-style-type:none;">

                        <?php
foreach($array as $videos)
 {
$vidname = substr($videos, 0, -4);
	
    
    ?>
                            <!--[if IE ]>
<li style="display:inline;"><embed src="<?php echo $dir?>/<?php $videos?>" width="320" height="260" autostart=false CONTROLS=CONSOLE></embed></li>;
?>
<![endif]-->

                            <!--[if !IE]><!-->
                            <?php
    $isFirefox = preg_match('/firefox/i',$_SERVER['HTTP_USER_AGENT']) ? TRUE : FALSE;

		if($isFirefox) {
			
  print ('<li><embed src="'.$dir.'/'.$videos.'" width="320" height="260" autostart=false></embed></li>');
		} else {
  print ('<li><video width="320" height="240" controls="controls">');
    print ('<source src="'.$dir.'/'.$videos.'" />');
    print ('Your browser does not support the video tag or perhaps the type of file</video></li>');

  
?>
                                <!--<![endif]-->
                                <?php }
 
 $number=$number+1;

if ($number>1){
print ('<br>');
$number=0;
}

 }
?>
                    </ul>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>

</html>
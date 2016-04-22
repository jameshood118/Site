<footer class="footer">
    <div class="container">
        <p class="text-muted">
            <a href="../index.php" class="menuLink">Home</a> |
            <a href="../about.php" class="menuLink">About</a> |
            <a href="../galleries.php" class="menuLink">Art Work</a> |
            <a href="../audio.php" class="menuLink">Audio</a> |
            <a href="../videos.php" class="menuLink">Videos</a> |
            <a href="../sites.php" class="menuLink">Sites</a> |
            <a href="../writing.php" class="menuLink">Writing</a> |
            <a href="../code.php" class="menuLink">Code Samples</a> |
            <a href="https://docs.google.com/document/d/181xOFDRX5Db15ah7LorR8M1lWT3ql4mBmpFdo89sgDE/edit?usp=sharing" class="menuLink">Resume</a> |
            <a href="mailto:jameshood118@gmail.com" class="menuLink">Contact</a>
            <?php 
function autoUpdatingCopyright($startYear){
 
    // given start year (e.g. 2004)
    $startYear = intval($startYear);
 
    // current year (e.g. 2007)
    $year = intval(date('Y'));
 
    // is the current year greater than the
    // given start year?
    if ($year > $startYear)
        return $startYear .'-'. $year;
    else
        return $startYear;
}
?>
                <BR /> &copy;
                <?php echo autoUpdatingCopyright(2009);?> James Hood. All Rights Reserved. Site By<a href="http://www.jameshood118.net" class="menuLink"> Hood Studios</a>
        </p>
    </div>
</footer>
<BR>
<BR>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

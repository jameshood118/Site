<!DOCTYPE html>
<html lang="en">
<?php include("includes/header.php"); ?>
    <div class="container">
        <div class="row">
            <h1>Example Code (PHP mostly)</h1>
            <div class="col-lg-12 box well well-lg">
                <p>Update 2016.04.20 - I have updated the entirety of my website, this time using bootstrap. This included the way i designed my galleries, no longer am I using some sort of 1 off solution, previously I was using Jquery UI but it was only used on gallery pages, now I am using bootstraps baked in modals, all in conjunction with php for a database driven gallery. Below I am using jquery and bootstrap to scrap data from my custom data attributes</p>
                <code>
                            $('#myModal').on('show.bs.modal', function (event) {
                            <br> var button = $(event.relatedTarget)
                            <br> var title = button.data('passedname')
                            <br> var gallery = button.data('gallery')
                            <br> var passed_name = button.data('passedname')
                            <br> var modal = $(this)
                            <br> modal.find('.modal-title').text(gallery + ' - ' + passed_name)
                            <br> modal.find('.modal-body').html('
                            <br>&lt;img src="images/' + gallery + '/' + passed_name + '" style="max-height:500px; max-width:500px;"&gt;')
                            <br> })
                            <br>
                        </code>
                <p>The galleries themselves are still built using php, with data being pulled from the database populating the previously mentioned custom data attributes</p>
                <code>
                           &lt;a href="#Window" id="&lt;?php echo $Idnum?&gt;" data-gallery="&lt;?php echo $gallery?&gt;"
                            <br> data-passedname="&lt;?php echo $passed_name?&gt;" data-title="&lt;?php echo $name?&gt;"
                            <br> data-linkname="&lt;?php echo $linkname?&gt;" data-toggle="modal" data-target="#myModal"&gt;
                            <br> &lt;img class="GalleryThumbs" src="images/&lt;?php echo $gallery?&gt;/&lt;?php echo $name?&gt;" width=200>&lt;/a&gt;
                            <br>
                        </code>

            </div>
            <div class="col-lg-12 box well well-lg">
                <p>I was frankly never happy with the code I was previously using, but it was the best way to achieve what I wanted, although I didnt have the technical know-how 2 years ago. I am now using bootstrap to achieve the gallery viewer the way I want it to be.</p>
                <code>
                            $(document).on("click", ".OpenWindow", function () {
                            <br> var ShownGallery = $(this).attr('gallery');
                            <br> var ImageName = $(this).attr('title');
                            <br> $(".modal-content").empty()
                            <br> .append('&lt;img src="images/'+ShownGallery+'/'+ImageName+'"&gt; ');
                            <br> });
                            <br>

                        </code>

                <code>
                            &lt;a href="#Window" class="OpenWindow" data-toggle="modal"
                            <br> gallery="&lt;?php echo $gallery?&gt;" title="&lt;?php echo $name?&gt;" >
                            <br> &lt;img src="images/&lt;?php echo $gallery?&gt;/&lt;?php echo $name?&gt;" width=200&gt;&lt;/a&gt;
                            <br>
                        </code>

                <h1>Update:</h1>
                <p>I actually changed my gallery code again! Bootstrap is all nice and well, but it was never honestly exactly what I wanted. Coming from a Kendo UI background, I wanted THAT window, and after toying with Kendo UI Core, I found that whatever they are doing in the free open source version of Kendo UI doesnt support the syntax from the paid version I had been using at the district. I had looked around for other frameworks before, and honestly the one I found I liked the most (other than Kendo) was Jquery UI. So now my gallery is using a jquery ui modal window, should I ever wish to implement Jquery UI elsewhere within the site I feel it will be quite an easy task.</p>

            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>Simple Mobile Detection</h1>
                <p>In a previous project I worked on I needed an easy solution to detecting mobile browser. There are tons of mobile detectors out there, anything from detect browser agent, to detecting if they have the onTouch capability in their browser. The issue with onTouch is that if you are on a desktop and go full screen with windows 8 Internet Explorer the chances are pretty good it counts as a mobile device.</p>

                <code>
                           var isMobile;
                            <br> var tester = navigator.userAgent;
                            <br> if (tester.match(/(Tablet PC)|(sprint)
                            <br> |(mobile)|(android)|(webos)|(iPhone)|(iPad)
                            <br> |(sprint)|mobile)|(android)|(ipod)|(blackberry)
                            <br> |(iemobile)|(Touch)|(opera mini)|(palm)|(opera mobi)/i)) {
                            <br> isMobile = true;
                            <br> } else {
                            <br> isMobile = false;
                            <br> }
                        </code>
                <p>Simple, quick and efficient.</p>
            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>My Gallery Code (Old)</h1>
                <p>I wanted a different way to display my gallery than just lightbox, I really like lightbox on the outset, except that I wanted a more concrete way of controlling what went on the page, plus with the Jquery menu I am using I was getting some very odd errors with using Jquery lightbox.</p>

                <code>
                            >&lt;a href="#" onClick="window.open('galleryviewer.php
                            <br> ?gview=&lt;?php echo $gallery?&gt;&gimage=&lt;?php echo $name?&gt;',
                            <br> 'Gallery Viewer','width=800,height=600')"&gt;
                            <br> &lt;img src="images/&lt;?php echo $gallery?&gt;/&lt;?php echo $name?&gt;" width=200&gt;&lt;/a&gt;
                            <br>
                        </code>

                <p>As you can see I am opening a window with javascript, taking dynamic input from the database where my images are stored (based on variables sent to the page from the menu) I then use a simply PHP get on the galleryviewer.php page</p>

                <code>
                            $gview=$_GET['gview'];
                            <br> $gimage=$_GET['gimage'];
                            <br>
                        </code>
                <p>The title of the gallery viewer is set dynamically by what image you are viewing, as is the image</p>


            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>Seasonally Changing code in ASP</h1>
                <p>After my job interview with Global Outfitters, the interviewer seemed extremely interested in a bit of PHP code I had written for Ayers Farmers Markets site (and re-used on the Tim Watson site). I went home and read up on ASP, ASP.net and various ways to teach myself more about it. I installed WebMatrix from Microsoft and started learning. As of 9/20/11 I have come up with a quick dirty version of the seasonally changing code using ASP</p>

                <code>

                            &lt;%@ Language="VBScript" %&gt;
                            <br> &lt;% If DatePart("y",Now) &lt;= 172 And DatePart("y", Now) &gt;=79 Then %&gt;
                            <br> &lt;b&gt;Spring Time Chummies&lt;/b&gt;
                            <br> &lt;% elseif DatePart("y",Now) &lt;= 263 And DatePart("y", Now) &gt;=173 Then %&gt;
                            <br> &lt;b&gt;SummerTime Chummies&lt;/b&gt;
                            <br> &lt;% elseif DatePart("y",Now) &lt;= 355 And DatePart("y", Now) &gt;=264 Then %&gt;
                            <br> &lt;b&gt;FallTime Chummies&lt;/b&gt;
                            <br> &lt;% else %&gt;
                            <br> &lt;b&gt;Winter Chummies&lt;/b&gt;
                            <br> &lt;% End If %&gt;
                            <br>
                        </code>

            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>PHP Variables in CSS</h1>
                <BR>
                <p>This is actually an extension of a previous example, where I used some php within a stylesheet. Today I decided that I wanted to have a way to edit my color scheme on my site more quickly, and to that end I quite quickly and easily added a few variables to top of my CSS page (renaming it to .php of course) and then used a simple php echo to then echo the values from the top, so this way I can edit one area of code and in theory have cohesive changes across the site. I also put my header information in a php include. CSS was supposed to make it so you didnt have to edit ALL of your pages when you changed information in the CSS... great concept, but what happens when you change the name of that file.. Yes I COULD do make sitewide changes in dreamweaver... Or I could simply put a php include that contains all my header information and call it a day.</p>

                <code>

                            &lt;?php header("Content-type: text/css");
                            <br> $back_colors="#40352C";
                            <br> $fore_colors="#8A8C3F";
                            <br> $highlights="#E9ECF2";
                            <br> $link_colors="#B4A796";
                            <br> ?&gt;
                            <br>

                        </code>

                <p>So yes,very simple,very easy, but thats part of being a designer these days, having your code extremely available to you, and editable. I dont really want to have to go change some color choice in 16 different places in a style sheet. Maybe im just a bad coder and I shouldn't be having that many references to the same color in that many different places. I dont know!</p>
            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>Feed Results from an Array or two (or more) to a search engine.</h1> <a href="/arraytest.php" class="menuLink">Example</a>
                <BR />
                <p>So... why am I doing this? Simple there are a number of sites on the net that take results from a search engine and do something with it, some let you enter for chances to win points, or money, or even sometimes you just want a slightly more random search... do we really need a reason? I did it to prove it could be done, and then to prove to a very specific website that they did not have the technology in place to prevent this, and they still dont. Extremely simple code follows... this is practically basic php work here, and frankly sites SHOULD be looking to prevent this kind of code work but... alas
                </p>
                <code>


                            &lt;?php $firstArray = array("random", "Strings");
                            <br> $secondArray = array("Second Set", "second set 2");
                            <br> $rand_keys1 = array_rand($firstArray, 1);
                            <br> $rand_keys2 = array_rand($secondArray, 1);
                            <br> ?&gt;

                        </code>
                <p> As you can plainly see I am taking two arrays, filled with whatever random information you want, I am then filling two variables, in this case $rand_keys1 and $rand_keys2 and doing a very simple array_rand(); function, what it does it look for the first random result from each result, in theory one could build in a function timer to actually search from the array multiple times and send multiple requests to a page this doing a very basic denial of service attack.. very basic in that one computer probably wont shut down a site.... probably. The rest of the code is just a simple form that posts data to a page, I have changed the URL because that wouldnt be very nice of me to tell you what site I was using it for, now would it.</p>

                <code>

                            &lt;form action="q=&lt;?php echo $firstArray[$rand_keys1]
                            <br> ?&gt;&lt;?php echo $secondArray[$rand_keys2]
                            <br> ?&gt;" method="post" target="_blank"&gt;
                            <br> &lt;INPUT TYPE="button" onClick="history.go(0)" VALUE="Refresh"&gt;
                            <br> &lt;input name="submit" type="submit" Value="Submit!"/&gt;
                            <br> &lt;/form&gt;
                            <br>

                        </code>
            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>Seasonally Changing Background Image</h1>
                <a href="http://ayersfarmersmarket.com/" class="menuLink">Example 1 </a>seasonally changing bg image
                <BR>
                <a href="http://lostcreekrecords.com/" class="menuLink">Example 2</a> (daily changing bg image)
                <BR />
                <p>This code was created to go into a CSS style sheet. It was determined that CSS doesnt care what the file extension is, so this PHP code was inserted into a normal css then was saved as a PHP extension (all style sheet functions work perfectly). I used a predefined set of days when the seasons were in use (as it were) to determine when the changes would happen. The code looks for what the current Season is (based on a range of days) then determines which filename to use ($m_season is eqaul to the names of 4 files we already have prepared, minus the file extension) once it determines which name to use in the variable, we then echo that value in the background section in the CSS
                </p>
                <code>
                           &lt;?PHP
                            <br> // Season of year script
                            <br> $season = date("z");
                            <br> // Code below is for spring
                            <br> if ($season
                            <br><=1 72 and $season>= 79) {
                                <br> $m_season = "background-spring";
                                <br> } else {
                                <br> // Code below is for Summer
                                <br> if ($season
                              <br>  <=2 63 and $season>= 173) {
                                    <br> $m_season = "background-summer";
                                    <br> } else {
                                    <br> // Code below is for Autumn
                                    <br> if ($season
                                  <br>  <=3 55 and $season>= 264) {
                                        <br> $m_season = "background-fall";
                                        <br> } else {
                                        <br> // Code below is for Winter
                                        <br> $m_season = "background-winter";
                                        <br> }
                                        <br> }
                                        <br> }
                                        <br> // End of season of year
                                        <br> ?&gt;
                                        <br> html, body {
                                        <br> background: #E2EF97 url('images/&lt;?PHP echo $m_season?&gt;.jpg') no-repeat;
                                        <br> }
                                        <br>



                        </code>
                <p>Addendum - I changed the color of the title of this page (Code Examples) with a very simple php function, I woke up on 2-22-10 thinking that since we can display the month-day-year as a 6 digit code, I could convert that to an ever changing hex code, to change the color of something slightly, daily. and voila.
                    <code>
                                <br>&lt;?PHP$color = date("mdy");?&gt;
                                <br> &lt;font color="#&lt;?php echo $color?&gt;"&gt;Example Code (PHP mostly)&lt;/font&gt;
                                <br>
                            </code>
                </p>
                <p>Addendum - I altered the code further, adding in a short little string shuffle, which upon loading the page, or reloading will switching the order of the numbers. Pretty simple but I have to show that I am indeed thinking.
                    <code>$new_color=str_shuffle($color);</code>
                </p>
            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>MD5 Hash</h1>
                <BR />
                <p>I wont kid myself in thinking I am the only one to happen on to MD5 Hashing, in fact I know I am not. However while working on a site at BCS I came up with a better way of storing passwords. Basically what happens is you would have a user registration of some sorts, that takes their input of their password, then naturally stores that into the database as its Md5 Hash (one way encryption) then in future user login tests, instead of looking for their original password, we compare the md5 has of the password they typed, against the one stored in the database. I wont go into detail about the user login or the comparison therein, and how we decide how to compare the two, needless to say there are literally THOUSANDS of ways to do the comparison. for increased security I could forsee take the password input then added a second string to that, and creating a md5 hash from that, IE taking the userpass + a phrase decided upon by the company or whatever, then create the md5 from that.. then the comparisons would be the Md5 of the user pass and the phrase together... naturally this adds a newer layer of complexity but also makes things a smidge more secure. The code below is my own method for determining the MD5 hash of anything that you input. I had this stored in an admin directory that could only be accessed if you knew it was there in the first place, had some issues getting it to work correctly with the login script or some reason, and never figured it out before I was laid off. Point is, this is a simple form, which takes input from the user, figures out the MD5, then sends the variable back to the page, retreives it and prints it. very simple really
                </p>
                <code>
                           &lt;?PHP $hashtofind=$_POST['hash'];
                            <br> ?&gt;
                            <br> &lt;form action="" method="post" name="hash dicovery">
                            <br> Input word to find the hash: &lt;input name="hash" type="text" />
                            <BR> &lt;input name="Submit" type="submit" value="Uncover" />
                            <br> &lt;input name="Reset" type="submit" value="Reset" />
                            <br> &lt;/form>
                            <br> &lt;?PHP
                            <br> if ($hashtofind==''){
                            <br> print ('You Really need to input a value');
                            <br> exit;
                            <br> } else {
                            <br> $hash = md5($hashtofind);
                            <br> }
                            <br> ?&gt;
                            <br> &lt;?PHP if (isset($_POST['Submit'])) { ?&gt;
                            <br> Hash Discovered!
                            <BR>&lt;?PHP echo $hash ?&gt;
                            <br> &lt;?PHP} ?&gt;
                            <br> &lt;?PHP if (isset($_POST['Reset'])) {
                            <br> unset ($_POST['Submit']);
                            <br> }?&gt;
                            <br>
                        </code>


            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>ISSET</h1>
                <BR />
                <p>This is without a doubt my favorite technique in PHP, it is a REAL time saver and space saver. Instead of having ALL your code and functions on seperate pages, IE, code to send something, second page to retreive the code and do something, AKA a page to add a blog, then a page to insert a blog into the database, you basically combine those pages, but you are looking for very specific conditions to be met, before any code at all is rendered to the browser, and since its PHP it wont even be shown anyway until its called to.
                    <BR /> This is REALLY simple, basically it looks for input from submit buttons, in a normal submit button you have: &lt;input name="blah" type="submit" value="blah" /> the normal code looks for a Name, a type, and a value. We all know that type is what kind of button it is, and value is what gets printed to the button, but in most cases people just call their submit buttons like "submit1" or whatever, but I beg you to think of specific names, specific to the purpose of the button, so we'll call ours for this code example "Edit"
                </p>
                <code>
                           &lt;?PHPif (isset($_POST['Edit'])) {
                            <br> Code to be rendered only if it finds Edit in the POST Super global
                            <br> }?&gt;
                            <br>
                        </code>
                <p>You can also use UNSET to remove things from the page, like say you want to abort the edit you were about to make to something in the database. So you would have a button with the name of "Abort_Edit" and voila. when it finds the value "Abort_Edit" in the $_POST superglobal it knows to remove the code "Edit" really quite simple. I have also used $first_view for alot of my admin functions, so that if nothing has been sent to the browser from any functions, $first_view=="1" then I have it set to display the first view code only if first view is present (typically a list of things to view or edit, could be WHATEVER you want. but when you go to use the Add_Blog section, looking to where I have unset the edit, you would change that to just simple say unset ($first_view) the code then only renders the first view section if its set, right?..lol</p>
                <code>
                          &lt;?PHP
                            <br> if (isset($_POST['Abort_Edit'])) {
                            <br> unset ($_POST['Edit']);
                            <br> }
                            <br> ?&gt;
                            <br>
                        </code>
            </div>
            <div class="col-lg-12 box well well-lg">
                <h1>Switch Conditions</h1>
                <BR />
                <p>Another of my favorite things to do in PHP would be switch conditions. It is a really nice way of making IF statements even less complicated, especially if you are only checking one variable, for a variety of things it could be. This specific example comes from the Ayers Farmers Market site I worked on while at BCS, we needed a way to upload images into specific folders, as you can see, the switch is testing $category, to find out if it eqauls the case, any number of things, in the first group of four its looking for it to be one of the four seasons, if it finds that, the the $destination_file is eqaul to a specific folder location (this was part of the process code for an FTP upload script, for uploading images.) when it would find a case to be correct it would break and stop executing along that line of code. Its really easy, think of it kind of like a windows start menu, the switch being "Program" the cases being what kind of program you need, so for example, I am looking for a graphic program on my computer I would have several options, fireworks, photoshop, illustrator, etc. Thats probably a bit more complicated than you needed, suffice it to say that to do the following code with IF.. ELSEIF statements actually gave me a migraine, but as soon as I used switch conditions my headache let up</p>

                <code>
                          switch ($category){
                            <br> case 'seasons':
                            <br> switch ($seasons){
                            <br> case 'winter':
                            <br> $destination_file="images/".$seasons."/<br>".$seasons."".$wintercount.".jpg";
                            <br> break;
                            <br> case 'spring':
                            <br> $destination_file="images/".$seasons."/<br>".$seasons."".$springcount.".jpg";
                            <br> break;
                            <br> case 'summer':
                            <br> $destination_file="images/".$seasons."/<br>".$seasons."".$summercount.".jpg";
                            <br> break;
                            <br> case 'fall':
                            <br> $destination_file="images/".$seasons."/<br>".$seasons."".$fallcount.".jpg";
                            <br> break;
                            <br> }
                            <br> break;
                            <br> case 'products':
                            <br> $destination_file="images/itempics/".$products.".jpg";
                            <br> break;
                            <br> case 'images':
                            <br> $destination_file="images/slides/".$slidescount.".jpg";
                            <br> break;
                            <br> }
                            <br>
                        </code>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>

</html>
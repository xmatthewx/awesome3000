<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>InstaSLAM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="js/vendor/jquery-1.8.3.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/vendor/fancy.js"></script>  
	
	<!-- TYPEKIT -->
	<script type="text/javascript" src="//use.typekit.net/vpv0gej.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body>
    <?php 
    $win_url = $_GET["win_url"]; 
    $user = $_GET["user"]; 
    $tag = $_GET["tag"]; 
    ?>
    <script>

    $(window).load(function () {
    
        var wins = Math.floor((Math.random()*10)+1);
        var count = Math.floor((Math.random()*100)+1);
        console.log(wins);
        $('#wins').text(wins);
        $('#count').text(count);
    });
    
    </script>
        
    <div class="container-narrow">
        <header>
               <!-- IS THIS NECESSARY? -->
               <!--<ul class="nav nav-pills pull-right">
                  <li></li>
                </ul> -->
                <h1 class="">Instaslam</h1>
              </header>
        
        <nav class="nav">
        	<ul>
        		<li><a id="hipster" href="#" >#hipster</a></li>
            	<li><a id="wtf" href="#" >#wtf</a></li>
            	<li><a id="fail" href="#" >#fail</a></li>
            	<li><a id="douchebag" href="#" >#douchebag</a></li>
           		<li> <a id="sexy" href="#" >#sexy</a></li>
            	<li><a id="ftw" href="#" >#ftw</a></li>
            	<li class="nav-btn"><a id="stats" href="stats.html">view stats</a></li>
            </ul>
        </nav>

        <section id="winner">
        	<div class="img-and-cap">
        		<img alt="thing 1" src="<?php echo $win_url ?>"/>
        		<p>photo by <a id="username" href="http://instagram.com/<?php echo $user; ?>/" ><?php echo $user; ?></a></p>
        	</div><!-- end img-and-cap -->
      
            <div id="score-blurb">
            	<p><span id="wins" class="bold">52</span>/<span id="count" >973</span> PEOPLE agree that this photo is the most <span class="bold">#<?php echo $tag ?>.</span></p>
            </div> <!-- end score blurb -->
            
            <div id="score-btns">
            	<a href="index.html" class="next">&nbsp;</a>
            	<a href="index.html" class="new">&nbsp;</a>
            </div><!-- end score-btns -->
        </section>
        
        <section id="top-from-cat">
        	<div class="section-title">
        		<h3>top <span class="bold futura">#hipster</span> bullshit</h3>
        	</div> <!-- end section-title -->
        	
        	<div class="img-and-cap">
        		<img alt="thing 1" src="http://distilleryimage2.s3.amazonaws.com/100363d23f4d11e28dba22000a1f97e5_7.jpg"/>
        		<p>photo by <a href="#">itsjennkaye</a></p>
        		<p class="rank">one</p>
        	</div><!-- end img-and-cap -->
        	
        	<div class="img-and-cap">
        		<img alt="thing 1" src="http://distilleryimage2.s3.amazonaws.com/100363d23f4d11e28dba22000a1f97e5_7.jpg"/>
        		<p>photo by <a href="#">itsjennkaye</a></p>
        		<p class="rank">two</p>
        	</div><!-- end img-and-cap -->
        	
        	<div class="img-and-cap">
        		<img alt="thing 1" src="http://distilleryimage2.s3.amazonaws.com/100363d23f4d11e28dba22000a1f97e5_7.jpg"/>
        		<p>photo by <a href="#">itsjennkaye</a></p>
        		<p class="rank">three</p>
        	</div><!-- end img-and-cap -->
        	
        	<div class="img-and-cap">
        		<img alt="thing 1" src="http://distilleryimage2.s3.amazonaws.com/100363d23f4d11e28dba22000a1f97e5_7.jpg"/>
        		<p>photo by <a href="#">itsjennkaye</a></p>
        		<p class="rank">four</p>
        	</div><!-- end img-and-cap -->
        	
        </section><!-- end top-from-cat -->
        	

        <footer>
        	<section id="foot-about">
        		<p>This is the coolest website you will ever see. Anthony is going to write some more stuff to go in this section. Maybe one more sentEnce goes in this spot here. I will be informative.</p>
        	</section><!-- end foot-about -->
        	<section id="social">
        		<a href="#" class="fb">&nbsp;</a>
        		<a href="#" class="tw">&nbsp;</a>
        		<a href="#" class="rd">&nbsp;</a>
        	</section> <!-- end social-->
        	<section id="disclaimer">
        		<h5>Disclaimer</h5>
        		<img src="images/disclaimer_triangle_closed.png" />
        		<hr>
        		<div id="disclaimer-blurb">
        			<p>FAIR USE NOTICE: This site may contain copyrighted material the use of which has not been pre-authorized by the copyright owner. Such material is made available as parody and/or to advance understanding of political, economic, scientific, social, art, media, and cultural issues. The 'fair use' of any such copyrighted material that may exist on this site is provided for under U.S. Copyright Law. In accordance with U.S. Code Title 17, Section 107, material on this site is distributed without profit to persons interested in such information for research and educational purposes. If you want to use any copyrighted material that may exist on this site for purposes that go beyond 'fair use', you must obtain permission from the copyright owner. If you feel that any of the images used on this site infringe on your rights, please send us an official request to remove them, including the nature of your claim and proof of ownership, to ihavebeef[at]instaslam.it.</p>
        			<p>Instaslam.it is a trademark of the four students that created this site. All other names and logos that appear on this website are the trademarks of their respective owners and do not constitute any endorsement, support or approval of them.</p>
        		</div> <!-- end disclaimer blurb -->


        	</section> <!-- end disclaimer -->
        </footer>
    </div><!-- end container-->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
</body>
</html>

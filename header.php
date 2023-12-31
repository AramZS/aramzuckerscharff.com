<!DOCTYPE html>
<html><head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display|EB+Garamond' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <title>Aram Zucker-Scharff</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
                //Hide the graf by default first
				$('.findme span').hide();
                
				//Select a function to execute on hover of the h2 tag in that div
				//The toggle will toggle the display of the paragraph.
                $('.findme').hover(function()
                {
                    //The documentation on toggle has a bunch of nifty effects that can be applied.
					$('.findme span').toggle();
				
				})
                
            });		
		</script>

		<link rel="stylesheet" href="style.css" media="screen">
		
    </head>
    
    <body>
     <?php //include('functions.php'); ?>   
    <header role="banner">
        <h1><a href="index.php" alt="Home Page" title="Home Page">Aram Zucker-Scharff</a></h1>
        
        <nav>
		<div class="navContainer">
			<div class="navBox" id="nav1">
				<ul>
					<li><a href="https://aramzs.me" target="_blank">Latest Posts Web-wide</a></li>
					<li><a href="media.php">Media Coverage</a></li>
					<li><a href="writing.php">Writing</a></li>
					<li><a href="visual.php">Visual</a></li>
					<li><a href="interactive.php">Interactive</a></li>
				</ul>
			</div>
			<div class="navBox homelinks">
				<ul>
					<li><a href="https://aramzuckerscharff.com#education">Education</a></li>
					<li><a href="https://aramzuckerscharff.com#profexp">Experience</a></li>
					<li><a href="https://aramzuckerscharff.com#consult">Consultations</a></li>
					<li><a href="https://aramzuckerscharff.com#presentations">Presentations</a></li>
					<li><a href="https://aramzuckerscharff.com#pubs">Publications</a></li>
				</ul>
			</div>
			<div class="navBox homelinks">
				<ul>
					<li><a href="https://aramzuckerscharff.com#scholarships">Scholarships</a></li>
					<li><a href="https://aramzuckerscharff.com#awards">Awards and Honors</a></li>
					<li><a href="https://aramzuckerscharff.com#skills">Skills</a></li>
                    <li><a href="https://aramzuckerscharff.com#activities">Activities</a></li>
					<li><a href="https://aramzuckerscharff.com#endorse">Endorsements</a></li>
				</ul>
			</div>			
			<div class="findme">
				Find me online
					<img class="profileImg" src="data:image/jpeg;base64,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" width="95px" height="95px" alt="Find me online" title="Find me online">
					
					<span class="social-icon"><a href="https://bit.ly/aramzs" target="_blank"><img src="imgs/socialmedia16/linkedin.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon" style="left:27%"><a href="https://twitter.com/chronotope" target="_blank"><img src="imgs/socialmedia16/twitter.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon" style="left:48%"><a href="https://facebook.com/aramzs" target="_blank"><img src="imgs/socialmedia16/facebook.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon" style="left:69%"><a href="https://www.delicious.com/AramZS"><img src="imgs/socialmedia16/delicious.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					
					<span class="social-icon2"><a href="https://aramzs.me/gplus" target="_blank"><img src="imgs/socialmedia16/googleplus.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon2" style="left:27%;"><a href="https://friendfeed.com/aramzs" target="_blank"><img src="imgs/socialmedia16/friendfeed.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon2" style="left:48%;"><a href="https://foursquare.com/chronotope" target="_blank"><img src="imgs/socialmedia16/foursquare.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon2" style="left:69%;"><a href="callto://aramzs" target="_blank"><img src="imgs/socialmedia16/skype.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					
					<span class="social-icon3"><a href="https://hacktext.com" target="_blank"><img src="imgs/socialmedia16/social-rss.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon3" style="left:27%;"><a href="https://www.stumbleupon.com/stumbler/AramZS/" target="_blank"><img src="imgs/socialmedia16/stumbleupon.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon3" style="left:48%;"><a href="https://last.fm/user/Shade0" target="_blank"><img src="imgs/socialmedia16/lastfm.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
					<span class="social-icon3" style="left:69%;"><a href="https://open.spotify.com/user/aramzs" target="_blank"><img src="imgs/socialmedia16/spotify.png" width="16px" height="16px" class="miniicon" alt="icon"></a></span>
										
				</a>
			</div>
		</div>
        </nav>
		
    </header>
	<div class="main">
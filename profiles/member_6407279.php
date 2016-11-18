<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Sam's Personal Page</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../css/group.css">
		<style type="text/css">
			h1.main{
				text-align:center;
				font-weight:bold;
				}
			div.top{
				background-color:#C5EDAD;
				}
			a{
				font-weight:bold;
				text-decoration:none;
				color:black;
				position:relative;
				right:110px;
				}
			a:hover{
				text-decoration:underline;
				}
			h3{
				text-decoration:underline;
				}
			#serious{
				font-weight:bold;
				color:red;
				text-decoration:underline;
				}
			.excited{
				color:blue;
				font-variant:small-caps;
				}
		</style>
	</head>
	<body>
		<?php include('../common/header.php') ?>
		<div class="top">
			<h1 class="main"> Sam's Personal Page </h1><hr>
		</div>
		<div style="text-align:center">
		<!--A php function which writes todays date in two seperate formats
		Used the table on http://php.net/manual/en/function.date.php to find the different initials-->
			<?php
			function todaysdate(){
				$todayshort = date("j/n/Y");
				$todaylong = date("l jS \of F Y");
				
				echo $todayshort."<br>".$todaylong;
			}
			todaysdate();
			?>
		<br>
		<!--Use of the HTML5 audio tag to be able record and play a introduction to my page-->
		<audio controls>
			<source src="../audio/member_6407279.mp3" type="audio/mpeg">
			Sam welcoming you to his page.
		</audio>
		</div>
		<h4 style="text-align:right;">My Personal Page Navigation:<br><a href="#OthInt">- Other Interests</a></h4>
		<!--Used a small amount of CSS3 to make my image have curved corners-->
		<img src="../images/member_6407279_photoone.jpg" alt="A photo of Sam Rowe" style="width:300px;height:250px;display:block;margin:auto;border-radius:10px">
		<br>
		<h3 title="General Information about my life">General Information</h3>
		<p>This page contains information about my life currently. It has details about my hobbies, interests and about my life in general. Previously, I went to Christ's College Sixth form in Guildford in which I got my A levels and made some very good friends. I am currently a student, in my first year, at the University of Surrey and I am studying Computing and Information Technology. I find my studies challenging but I take them <span id="serious">very seriously</span> as I want to have a successful career in my chosen field. I also have many hobbies and interests that are very varied as I enjoy many different things. Some of my hobbies and interests include:</p>
		<div style="font-weight:bold;">
			<ul>
				<li> Watching and playing rugby</li>
				<li> Anything to do with Harry Potter </li>
				<li> Socialising with friends </li>
				<li> Spending time with family </li>
				<li> Listening to music. (Especially Rock and Blues)</li>
				<li> Playing Video Games </li>
			</ul>
		</div>
		<?php
			$title = "Information about my Interests";
			echo "<h3>$title</h3>";
		?>
		<p>Although these are my main interests, I do enjoy doing things outside of the activities listed above such as walking my dog and cooking. However, I find that the hobbies and interests that I have listed above to be the things which I enjoy the most and have the <span class="excited">best time</span> while I am doing them. I have had many different influences which have led me to have to have such a diverse range of interests. These range from other family members interests to enjoyment of American culture. Below, I have again listed out my different hobbies and where I first became interested with them.</p>
		<table class="tableformatting">
			<caption>A table listing my interests and their influences</caption>
			<thead>
				<tr>
					<th>Interest</th>
					<th>Influence</th>
				</tr>
			</thead>
			<tr>
				<td>Rugby</td>
				<td>My Dad played rugby so I started playing rugby</td>
			</tr>
			<tr>
				<td>Harry Potter</td>
				<td>I read the books and I loved them</td>
			</tr>
			<tr>
				<td>Socialising</td>
				<td>Meeting people that I like to spend time with</td>
			</tr>
			<tr>
				<td>Family</td>
				<td>Having a nice family who are good to be around</td>
			</tr>
			<tr>
				<td>Music</td>
				<td>Being exposed to a lot of good music</td>
			</tr>
			<tr>
				<td>Video Games</td>
				<td>Being given a PS3 and having friends who also like gaming</td>
			</tr>
		</table>
		<br><br>
		<h4 id="OthInt">Other Interests</h4>
		<p>I also love to spend time with animals. I believe that this is because I was brought up in a family that care about animals and many of my friends have got pets so I feel comfortable around them. For example:</p>
			<!--An array with a foreach statement to read it out-->
			<?php 
				$info = array (1 => array("Relation" => "friend", "Name" => "Jack", "animal" => "dog", "aniname" => "Steve"),2 => array("Relation" => "cousin", "Name" => "Nicola", "animal" => "dog", "aniname" => "Flash"),3 => array("Relation" => "friend", "Name" => "Ellie", "animal" => "dog", "aniname" => "Tilly"));

				foreach($info as $ID => $relation)
					echo "<p>-My $relation[Relation]'s called $relation[Name] and they have a $relation[animal] called $relation[aniname].</p>";
			?>
		<h3>Conclusion:</h3>
		<p> As this is the end of my page I have decided that the best way to end it would be to have a summary list with information which I have revealed before and information that I haven't mentioned. Enjoy!:</p>
			<?php
			$personalxml = simplexml_load_file("../data/member_6407279.xml");
			?>
		<ul>
			<li><?php echo $personalxml->name; ?></li>
			<li><?php echo $personalxml->age; ?></li>
			<li>A level grades</li>
			
				<li>IT: <?php echo $personalxml->alevels->informationtechnology->grade; ?></li>
				<li>Maths: <?php echo $personalxml->alevels->maths->grade; ?></li>
				<li>Economics: <?php echo $personalxml->alevels->economics->grade; ?></li>
			
			<li>My dog's name is <?php echo $personalxml->dogsname; ?></li>
			<li>My favourite places are:</li>
			
				<li><?php echo $personalxml->places->hometown; ?></li>
				<li><?php echo $personalxml->places->bestcity; ?></li>
				<li>My best holidays are <?php echo $personalxml->places->holiday; ?></li>
			
			<li>I have been educated at:</li>
			
				<li>Primary: <?php echo $personalxml->education->primary; ?></li>
				<li>Secondary: <?php echo $personalxml->education->secondary; ?></li>
				<li>College: <?php echo $personalxml->education->college; ?></li>
				<li>University: <?php echo $personalxml->education->university; ?></li>
			
		</ul>	
			<?php include('../common/footer.php') ?>
	</body>
</html>
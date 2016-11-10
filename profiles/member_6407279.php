<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php include('../common/header.php') ?>
<head>
<title>Sam's Personal Page</title>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../css/group.css">
<style type="text/css">
h1.main{text-align:center; font-weight:bold;}
div.top{background-color:#C5EDAD;}
a{font-weight:bold; text-decoration:none; color:black; position:relative; right:110px;}
a:hover{text-decoration:underline;}
h3{text-decoration:underline;}
#serious{font-weight:bold;color:red;text-decoration:underline;}
.excited{color:blue;font-variant:small-caps;}
</style>
</head>
<body>
<div class="top">
<h1 class="main"> Sam's Personal Page </h1><hr>
</div>
<h4 style="text-align:right;">My Personal Page Navigation:<br><a href="#OthInt">- Other Interests</a></h4>
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
</ul></div>
<?php
$title = "Information about my Interests";
echo "<h3>$title</h3>"
?>
<p>Although these are my main interests, I do enjoy doing things outside of the activities listed above such as walking my dog and cooking. However, I find that the hobbies and interests that I have listed above to be the things which I enjoy the most and have the <span class="excited">best time</span> while I am doing them. I have had many different influences which have led me to have to have such a diverse range of interests. These range from other family members interests to enjoyment of American culture. Below, I have again listed out my different hobbies and where I first became interested with them.</p>
<table border="1" cellspacing="2" cellpadding="2">
<caption>A table listing my interests and their influences</caption>
<thead><tr>
<th>Interest</th>
<th>Influence</th>
</tr></thead><tr>
<td>Rugby</td>
<td>My Dad played rugby so I started playing rugby</td>
</tr><tr>
<td>Harry Potter</td>
<td>I read the books and I loved them</td>
</tr><tr>
<td>Socialising</td>
<td>Meeting people that I like to spend time with</td>
</tr><tr>
<td>Family</td>
<td>Having a nice family who are good to be around</td>
</tr><tr>
<td>Music</td>
<td>Being exposed to a lot of good music</td>
</tr><tr>
<td>Video Games</td>
<td>Being given a PS3 and having friends who also like gaming</td>
</tr>
</table><br><br>
<h4 id="OthInt">Other Interests</h4>
<p>I also love to spend time with animals. I believe that this is because I was brought up in a family that care about animals and many of my friends have got pets so I feel comfortable around them. For example:</p>
<?php 
$info = array (1 => array("Relation" => "friend", "Name" => "Jack", "animal" => "dog", "aniname" => "Steve"),2 => array("Relation" => "cousin", "Name" => "Nicola", "animal" => "dog", "aniname" => "Flash"),3 => array("Relation" => "friend", "Name" => "Ellie", "animal" => "dog", "aniname" => "Tilly"));

foreach($info as $ID => $relation)
	echo "<p>-My $relation[Relation]'s called $relation[Name] and they have a $relation[animal] called $relation[aniname].</p>";
?>
</body>
</html>
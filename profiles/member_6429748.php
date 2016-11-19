<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html lang="en">
	<?php include('../common/header.php') ?>
		<head>
			<title>"Lukas Rygh"</title>
			<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
			<link type="text/css" rel="stylesheet" href="../css/group.css"> 

			<style type ="text/css">
				h2.headers { 
				
					text-align:center;
					font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
					color:Green;

				}
				ul {
					color:red;
				}
			
			</style>
		</head>
		<body>
			<h1 id = "top">Lukas Rygh</h1>
		<h4 style="text-align:right;" title = "Because why not get as many marks with one line of code as possible?"> Return to the main page:<br><a href="../index.php">Main</a></h4>
			<div style = "background-color:#66ff99">
			<h2>About Me</h2>
				<img src="../images/member_6429748.jpg" alt="Lukas Rygh" style="width:300px;height:250px;display:block;margin:auto;border-radius:10px">
			</div>
			<h2 class = headers>Past Progamming Experience</h2>
				<p>In my previous school, I was taught python, which has surprisingly similar syntax to Java in some respects. I also had <span style = "font-style:italic; color:blue">some</span> HTML and CSS experience, but it wasn't taught very well and I sucked at it anyway. So while it probably gave me a bit of an advantage, I've still had to put in a lot of work to correct previous misconceptions and keep up with the teaching pace. And of course, it didn't help with PHP or XML.</p>
				
				<?php $hobbies = array("Skiing", "Video Games", "Anime (Mecha, mostly)"); ?>
			
			<h4>Hobbies</h4>
			<ul> 
					<?php
					foreach ($hobbies as $hobbies): ?> 
					<li> <?php echo $hobbies; ?></li>
					<?php endforeach; ?>
					
			</ul>
				
			
				<h4>Schools and opinions</h4>

			<?php 
			$XML = simpleXML_load_file("../data/member_6429748.xml");
			?>
				
			<table border = 2>
				<tr>
					<td> School Name</td>
					<td> Personal Opinion</td>
				</tr>
				<tr>
					<td><?php echo $XML->Schools->PrimarySchool->SchoolName;?></td>
					<td><?php echo $XML->Schools->PrimarySchool->PersonalRating;?></td>
				</tr>
				<tr>
					<td><?php echo $XML->Schools->SecondarySchool->SchoolName;?></td>
					<td><?php echo $XML->Schools->SecondarySchool->PersonalRating;?></td>
				</tr>
				<tr>
					<td><?php echo $XML->Schools->SixthForm->SchoolName;?></td>
					<td><?php echo $XML->Schools->SixthForm->PersonalRating;?></td>
				</tr>
			</table>
			<?php $FragmentPhrase = "Back to top"; 
			echo "<a href = '#top'>" . $FragmentPhrase . "</a>";
			?>
			<br>
			<a href = "#bottom">If you want to skip the following stuff, click this link.</a>
			<br>
			<?php
			function countToTen() {
				$Number = 1;
				echo "This function will count from " . $Number . " to 100.";
				while ($Number <= 100) {
					echo "<br>";
					echo $Number;
					$Number++;
				}
				echo "<br>";
			}			
			countToTen();
			
			
			?>
			
			<a id="bottom" href = "#top">Back to top</a>

		</body>
		<?php include('../common/footer.php') ?>
	</html>
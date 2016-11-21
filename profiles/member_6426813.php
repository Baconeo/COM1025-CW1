<!DOCTYPE HTML>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../css/group.css"> 
		<title>Callum's page</title>		
		<style type = text/css>
		div.top{
			background-color: #00ff99;
			text-align:center;
			display: inline-block;
			width: 100%;
			height: 100px;
			position: relative;
			border-style:solid;
		}
		#pic{
			position: absolute;
			top: 0;
		    right: 0;
			width: 100px;
			height: 100%;
		}	
		img{
			height:100px;
		}	
		h2.headings{
			color: #286BA3;
		}
		h3.headings{
			font-weight:bold;
			color: #4686BC;
		}
		.family{
			padding: 20px;
		}
		table {
			border-collapse: collapse;
			width: 100%
		}
		table, th, td{
			 border: 1px solid black;
		}
		th, td{
			text-align: left;
			padding: 10px;
		}
		th{
			background-color: #00ff99;
		}
		span{
			font-weight:bold;}
                nav > a{
                    padding: 10px;
                }
		</style>
    </head>
    <body>
	<?php include('../common/header.php') ?>
	<div class="top">
		<h1>Callum's page</h1>
		<div id="pic"><img src="../images/member_6426813_2.jpeg" title="me and Rosie (my dog)" alt="me and my dog"></div>
	<?php
		//function displays time and date that user has accessed webpage at 
		//used http://www.w3schools.com/php/php_date.asp as a guide 
		function displayTimeAndDate(){
			//displays date in suitable format
			$date = date("d/m/"."20"."y");
			//changes timezone to GMT+00:00 as that is uk time 
			date_default_timezone_set("Europe/London");
			//displays time in suitable format
			$time = date("h:i:sa");
			//prints time/date in a user-friendly format
			echo "Accessed page at $time on $date";
		}
		displayTimeAndDate();
	?>
	</div>
	<h2 class="headings">A brief introduction</h2>
		<p>This is my personal page which briefly details my life, including information about my <span>education</span>, as well as my <span>key events in my life</span> and <span>hobbbies and interests</span>.</p>
	
	<h2 class="headings">Contents</h2>
		<nav>
			<a href="#xml">Background information</a>
			<a href="#education">Education</a>
			<a href="#dates">Key dates</a>
			<a href="#hobbies">Hobbies/interests</a>
                </nav>
	
        <section>
	<div id="xml">
		<h3 class = "headings">Background information</h3>
		<?php
			$xml = simplexml_load_file("C:/xampp/htdocs/com1025_cw1/data/member_6426813.xml");
			echo "name: ", $xml->name, "<br />";
			echo "age: ", $xml->age, "<br />";
			echo "birthday: ", $xml->birthday, "<br />";
			echo "Immediate family: <br />";
			echo "<div class='family'>";
			foreach($xml->family->person as $person){
					echo $person->name," - ",$person->relation, "<br />";
			}
			echo "</div>";
			echo "Where I have lived: <br />";
			echo "<div class='family'>";
			foreach($xml->places_lived->place as $place){
					echo $place->location," - ",$place->time_lived, "<br />";
			}
			echo $person->person_name;
		?>
	</div>	
        </section>
        <section>
	<div id="education">
	<h3 class = "headings">Education</h3>
		<table id="exams">
			<tr style="color: #286BA3;">
				<th>Exam level</th>
				<th>Subject</th>
				<th>Date</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td rowspan="3">A-level</td>
				<td rowspan="4">June 2016</td>
				<td>Computing</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Maths</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Economics & Business</td>
				<td>A</td>
			</tr>
			<tr>
				<td>AS</td>
				<td>Further Maths</td>
				<td>B</td>
			</tr>
			<tr>
				<td rowspan="9">GCSE</td>
				<td rowspan="6">June 2014</td>
				<td>English Literature</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Further Maths</td>
				<td>A*</td>
			</tr>
			<tr>
				<td>Additional Science</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Computing</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Business Studies</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Spanish</td>
				<td>B</td>
			</tr>
			<tr>
				<td rowspan="3">June 2013</td>
				<td>English Language</td>
				<td>B</td>
			</tr>
			<tr>
				<td>Maths</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Core Science</td>
				<td>B</td>
			</tr>
		</table>
	</div>
        </section>    
	
        <section>
	<div id="dates">
		<h3 class = "headings">Key dates</h3>
		<?php
			$dates = array(array("date" => "1998", "event" => "was born"), 
						   array("date" => "2002", "event" => "started primary school at Heathbrook Primary School"),
						   array("date" => "2008", "event" => "my brother (Kieran) was born"),
						   array("date" => "2009", "event" => "Started secondary school at Southfields Community College"),
						   array("date" => "2014", "event" => "Started sixth form at Southfields Academy"),
						   array("date" => "2014", "event" => "moved out of London to Kent"),
						   array("date" => "2016", "event" => "started university at the University Of Surrey"));
						   
			foreach ($dates as $date) {
				echo "In $date[date] I $date[event] <br>";
			}			   
		?>
	</div>
        </section>    

        <section>
	<div id="hobbies">
		<h3 class = "headings">Hobbies / interests</h3>
		<ul>
			<li>Video games</li>
			<li>Films (especially 80s/90s movies)</li>
			<li>Game Of Thrones</li>
			<li>Star Wars</li>
			<li>coding</li>
			<li>Hanging out with friends & famliy</li>
			<li>Reading</li>
		</ul>
	</div>
        </section>    
	<?php include('../common/footer.php') ?>
    </body>
</html>
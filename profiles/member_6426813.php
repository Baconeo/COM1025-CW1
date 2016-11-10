<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<?php include('../common/header.php') ?>
    <head>
        <title>Callum's page</title>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<style type = text/css>
		h1{
			text-align: center;
			background-color: #00ff99;
		}
		.headings{
			font-weight:bold;
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
			
		</style>
    </head>
    <body>
	<h1>Callum's page</h1>
	
	<h2>A brief introduction</h2>
		<p>This is my personal page which briefly details my life, including information about my education and future plans, as well as my hobbbies and interests.</p>
	
	<h2>Contents</h2>
		<ul>
			<li><a href="#background">Background</a></li>
			<li><a href="#education">Education</a></li>
			<li><a href="#dates">Key dates</a></li>
			<li><a href="#hobbies">Hobbies/interests</a></li>
			<li><a href="#influences">Influences</a></li>
		</ul>
	
	<div id="background">
		<p class = "headings">Background</p>
	</div>
	
	<div id="education">
	<p class = "headings">Education</p>
		<table id="exams">
			<tr>
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
	
	<div id="dates">
		<p class = "headings">Key dates</p>
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

	<div id="hobbies">
		<p class = "headings" id="hobbies">Hobbies / interests</p>
	</div>
		

	
	<div id ="influences">
		<p class = "headings">Influences</p>
	</div>	
    </body>
</html>
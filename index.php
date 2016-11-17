<!DOCTYPE HTML>
<html lang="en">
    <?php include('./common/header.php') ?>

    <head>
        <title>Group 15</title>
        <meta content="charset=UTF-8">
		<link type="text/css" rel="stylesheet" href="css/group.css">
		<style type = "text/css">
		ul{
			margin: auto;
			text-align: center;
			padding: 100px
			}

		li {
			display: inline-block;
			width: 150px;
			position: relative;
		}
                table {
                    border-collapse:collapse;
                }
                th {
                    background-color: #91EFA6;
                }
                .half{
                    top:100%;
                }
                .half2{
                    top:100%;
                }                
		</style>

        
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'> 
        
        <script>
            $(function() {
                $("#mailtoform").submit(function(e) {
                    $("#contactForm").hide();
                    $("#contactFormSubmitted").show();
                });
            });
            
            function thankAlert(){
            alert("Thank You");
            }
        </script>
    </head>
    <body>
        <div id="split container">
            <section id="half" class ="half">
            <header>
                <h1 style="text-align:center">Group 15's Page!</h1>
                <h2><marquee>Welcome To Our Group Page</marquee></h2>
				<h3>Page Navigation:</h3>
				<h5><a href="#table" class="topLink">-Member Information Table</a></h5>
				<h3>Introduction</h3>
                <p>This is group 15's main page! To access any of our members individual pages please click on their image below. This site will contain information about our members and their hobbie and interests. Their work email is also listed on this page should you wish to contact them. Enjoy!</p>
            </header>
            <main>
                <h3 title="Click the image of the member to access their page">Our Members:</h3>
                <ul>
                    <li>
                        <a href="profiles/member_6426813.php">
                            <img src = "images/member_6426813.jpg" class="pics">
                            <div class="textoverlay"><p class="names" title="Callum Seymour" >Callum Seymour</p></div>
                        </a>
                    </li>
                    <li> 
                        <a href="profiles/member_6407279.php">
                            <img src = "images/member_6407279.jpg" class="pics">
                            <div class="textoverlay"><p class="names" title="Sam Rowe" >Sam Rowe</p></div>
                        </a>
                    </li>
                    <li>
                        <a href="profiles/member_6416585.php">
                            <img src = "images/member_6416585.jpg" class="pics">
                            <div class="textoverlay"><p class="names" title="Robert Bacon" >Robert Bacon</p></div>
                        </a>
                    </li>
                    <li> 
                        <a href="profiles/member_6460017.php">
                            <img src = "images/Placeholder_person.jpg" class="pics">
                            <div class="textoverlay"><p class="names" title="Thushanthy Thillainathan" >Thushanthy Thillainathan</p></div>
                        </a>
                    </li>
                    <li> 
                        <a href="profiles/member_6437280.php">
                            <img src = "images/Placeholder_person.jpg" class="pics">
                            <div class="textoverlay"><p class="names" title="Robie Murray" >Robbie Murray</p></div>
                        </a>
                    </li>
                    <li> 
                        <a href="profiles/member_6429748.php">
                            <img src = "images/Placeholder_person.jpg" class="pics">
                            <div class="textoverlay"><p class="names" title="Lukas Rygh" >Lukas Rygh</p></div>
                        </a>
                    </li>
                </ul>
            </section>
            <section id="half2" class ="half2">
                <div style="overflow:auto;">
                    <?php
                            $subtitle = "Contact Information";
                            echo "<h3>$subtitle</h3>";
                    ?>
                    <p>Below is the table containing all of our groups work emails if you need to contact them for any reason.</p>
                    <table style="float:left;" border="1" cellspacing="3" cellpadding="3" id="table">
			<!--Linked to the group XML file and reading out the infromation into a table-->
                        <?php
                        $xml=simplexml_load_file("data/group.xml"); 
                        ?>
                            <caption>Members of Group 15 Details</caption>
                            <tr>
                                    <th id="white">Name</th>
                                    <th id="white">Email</th>
                                    <th id="white">URN</th>
                                    <th id="white">Course</th>
                            </tr>
                            <tr>
                                    <td><?php echo $xml->student[0]->name; ?></td>
                                    <td><?php echo $xml->student[0]->email; ?></td>
                                    <td><?php echo $xml->student[0]->URN; ?></td>
                                    <td><?php echo $xml->student[0]->coursetitle; ?></td>
                            </tr>
                            <tr>
                                    <td><?php echo $xml->student[1]->name; ?></td>
                                    <td><?php echo $xml->student[1]->email; ?></td>
                                    <td><?php echo $xml->student[1]->URN; ?></td>
                                    <td><?php echo $xml->student[1]->coursetitle; ?></td>
                            </tr>
                            <tr>
                                    <td><?php echo $xml->student[2]->name; ?></td>
                                    <td><?php echo $xml->student[2]->email; ?></td>
                                    <td><?php echo $xml->student[2]->URN; ?></td>
                                    <td><?php echo $xml->student[2]->coursetitle; ?></td>
                            </tr>
                            <tr>
                                    <td><?php echo $xml->student[3]->name; ?></td>
                                    <td><?php echo $xml->student[3]->email; ?></td>
                                    <td><?php echo $xml->student[3]->URN; ?></td>
                                    <td><?php echo $xml->student[3]->coursetitle; ?></td>
                            </tr>
                            <tr>
                                    <td><?php echo $xml->student[4]->name; ?></td>
                                    <td><?php echo $xml->student[4]->email; ?></td>
                                    <td><?php echo $xml->student[4]->URN; ?></td>
                                    <td><?php echo $xml->student[4]->coursetitle; ?></td>
                            </tr>
                            <tr>
                                    <td><?php echo $xml->student[5]->name; ?></td>
                                    <td><?php echo $xml->student[5]->email; ?></td>
                                    <td><?php echo $xml->student[5]->URN; ?></td>
                                    <td><?php echo $xml->student[5]->coursetitle; ?></td>
                            </tr>
                    </table>
            </main>
            <footer>
                    <div style="position:relative;" id="contactForm" class="contactForm">
                        <form action="mailto:sr00584@surrey.ac.uk,rm00727@surrey.ac.uk,lr00341@surrey.ac.uk,cs00916@surrey.ac.uk,rb00573@surrey.ac.uk,tt00308@surrey.ac.uk" id="mailtoform" method="POST">
                            <label>Your Email:</label><br />
                            <input type="email"><br />
                            <label>Subject:</label><br />
                            <input type="text"><br />
                            <label>Comment:</label><br />
                            <textarea form="mailtoform" name="commentarea"></textarea><br /> <br />   
                            <button onClick ="thankAlert()">Submit Comment</button>
                        </form>
                    </div>	
                    <div style="display:none" id="contactFormSubmitted" class="contactForm">
                        <p>Form Submitted!</p>
                    </div>
                </div>
				<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$comment = $REQUEST['commentarea'];
					if(!empty($comment)){
						echo "Your message is ". $comment;
					}
				}
				?>
            </footer>
            </section>
        </div>
    </body>
	<?php include('./common/footer.php') ?>
</html>
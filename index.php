<!DOCTYPE HTML>
<html lang="en">
    <?php include('./common/header.php') ?>

    <head>
        <title>Group 15</title>
        <meta charset="UTF-8">
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
        <header>
            <section class ="half">
            <section id="half" class ="half">
                <h1 style="text-align:center">Group 15's Page!</h1>
                <h2><marquee>Welcome To Our Group Page</marquee></h2>
        </header>
        <main>
                <p>This is group 15's main page! To access any of our members individual pages please click on their image below. This site will contain information about our members and their hobbie and interests. Their work email is also listed on this page should you wish to contact them. Enjoy!</p>
                <h3 title="Click the image of the member to access their page">Our Members:</h3>
                <ul>
                    <li>
                        <a href="profiles/member_6426813.php">
                            <img src = "images/Placeholder_person.jpg" class="pics">
                            <div class="textoverlay"><p class="names" title="Callum Seymour" >Callum Seymour</p></div>
                        </a>
                    </li>
                    <li> 
                        <a href="profiles/member_6407279.php">
                            <img src = "images/Placeholder_person.jpg" class="pics">
                            <div class="textoverlay"><p class="names" title="Sam Rowe" >Sam Rowe</p></div>
                        </a>
                    </li>
                    <li>
                        <a href="profiles/member_6416585.php">
                            <img src = "images/Placeholder_person.jpg" class="pics">
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
        </main>
        <footer>
            <section id="half2" class ="half2">
                <div style="overflow:auto;">
                    <p>Below is the table containing all of our groups work emails if you need to contact them for any reason.</p>
                    <table style="float:left;" border="1" cellspacing="3" cellpadding="3">
                            <caption>Members of Group 15 Contact Emails</caption>
                            <tr>
                                    <th id="white">Name</th>
                                    <th id="white">Email</th>
                            </tr>
                            <tr>
                                    <td>Sam Rowe</td>
                                    <td>sr00584@surrey.ac.uk</td>
                            </tr>
                            <tr>
                                    <td>Robbie Murray</td>
                                    <td>rm00727@surrey.ac.uk</td>
                            </tr>
                            <tr>
                                    <td>Lukas Rygh</td>
                                    <td>lr00341@surrey.ac.uk</td>
                            </tr>
                            <tr>
                                    <td>Callum Seymour</td>
                                    <td>cs00916@surrey.ac.uk</td>
                            </tr>
                            <tr>
                                    <td>Robert Bacon</td>
                                    <td>rb00573@surrey.ac.uk</td>
                            </tr>
                            <tr>
                                    <td>Thushanthy Thillainathan</td>
                                    <td>tt00308@surrey.ac.uk</td>
                            </tr>
                    </table>
                    <div style="position:relative;" id="contactForm" class="contactForm">
                        <form action="mailto:sr00584@surrey.ac.uk,rm00727@surrey.ac.uk,lr00341@surrey.ac.uk,cs00916@surrey.ac.uk,rb00573@surrey.ac.uk,tt00308@surrey.ac.uk" id="mailtoform" method="POST">
                            <label>Your Email:</label><br />
                            <input type="email"><br />
                            <label>Subject:</label><br />
                            <input type="text"><br />
                            <label>Comment:</label><br />
                            <textarea form="mailtoform"></textarea><br /> <br />   
                            <button onClick ="thankAlert()">Submit Comment</button>
                        </form>
                    </div>	
                    <div style="display:none" id="contactFormSubmitted" class="contactForm">
                        <p>Form Submitted!</p>
                    </div>
                </div>
            </section>
        </footer>    
        </div>
    </body>
</html>
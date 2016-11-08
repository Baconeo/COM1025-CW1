<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <?php include('./common/header.php') ?>

    <head>
        <title>Group 15</title>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
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
        </style>

        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
        
        <script>
            $(function() {
                $("#mailtoform").submit(function(e) {
                    $("#contactForm").hide();
                    $("#contactFormSubmitted").show();
                });
            });
        </script>
    </head>
    <body>
        <div class="prim-navigation">
            <div> 
                <div><a href="index.php">Home</a></div>
                <div><a href="">About</a></div>
            </div>
        </div>
        
        <h1 style="text-align:center">Group 15's Page!</h1>
        <p>This is group 15's main page! To access any of our members individual pages please click on their image below. This site will contain information about our members and their hobbie and interests. Their work email is also listed on this page should you wish to contact them. Enjoy!</p>
        <h3 title="Click the image of the member to access their page">Our Members:</h3>
        <ul>
            <li>
                <a href="profiles/member_6426813.php" target=_blank>
                    <img src = "images/Placeholder_person.jpg" class="pics">
                    <div class="textoverlay"><p class="names">Callum Seymour</p></div>
                </a>
            </li>
            <li> 
                <a href="profiles/member_6407279.php" target="_blank">
                    <img src = "images/Placeholder_person.jpg" class="pics">
                    <div class="textoverlay"><p class="names">Sam Rowe</p></div>
                </a>
            </li>
            <li>
                <a href="profiles/member_6416585.php">
                    <img src = "images/Placeholder_person.jpg" class="pics">
                    <div class="textoverlay"><p class="names">Robert Bacon</p></div>
                </a>
            </li>
            <li> 
                <a href="profiles/member_6460017.php">
                    <img src = "images/Placeholder_person.jpg" class="pics">
                    <div class="textoverlay"><p class="names">Thushanthy Thillainathan</p></div>
                </a>
            </li>
            <li> 
                <a href="profiles/member_6437280.php" target="_blank" >
                    <img src = "images/Placeholder_person.jpg" class="pics">
                    <div class="textoverlay"><p class="names">Robbie Murray</p></div>
                </a>
            </li>
            <li> 
                <a href="profiles/member_6429748.php">
                    <img src = "images/Placeholder_person.jpg" class="pics">
                    <div class="textoverlay"><p class="names">Lukas Rygh</p></div>
                </a>
            </li>
        </ul>
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
                    <input type="submit" value="Submit Comment">
                </form>
            </div>	
            <div style="display:none" id="contactFormSubmitted" class="contactForm">
                <p>Form Submitted!</p>
            </div>
        </div>
    </body>
    <?php include('./common/footer.php') ?>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <?php include('../common/header.php') ?>

    <head>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="../css/group.css">   
        <title>Robert Bacon's Profile</title>
        <style type='text/css'>
            div {
                width: 100%;
                height: 100%;
            }
            div #frontpage {
                top: 100%
            }
            div  #hobbies {
                position: absolute;
                top: 200%;
            }
            div #projects {
                position: absolute;
                top: 300%;
            }
        </style>
        <script>
            $(function() {
                // Run when an 'a' tag is clicked 
                $('a').click(function(){
                    $('html, body').animate({
                        scrollTop: $( $(this).attr('href') ).offset().top
                    }, 800);
                });
                
                // Show Airsoft section by default
                $("#pcgaming").hide();
                $("#airsoft").show();                
                
                $('a').click(function() {
                    $("#airsoft").toggle();
                    $("#pcgaming").toggle();
                });
            });
        </script>
    </head>
    
    <body>
        <div id='frontpage'>
            <h1 style="text-align:center; position:relative;">Robert Bacon's Profile</h1>
            <img src = "../images/member_6416585.jpg" class="pics">
            <table>
                <tr>
                    <th>Content</th>
                </tr>
                <tr>
                    <td><a title="Hobbies that interest me" href="#hobbies">Hobbies</a></td>
                    <td><a title="Previous projects I have been involved with"href="#projects">Previous Projects</a></td>
                </tr>
            </table>
            
            <div id='hobbies'>
                <div>
                    <h2>Hobbies</h2>
                    <table>
                        <tr>
                            <th>Click a hobby to bring up information</th>
                        </tr>
                        <tr>
                            <td><a class="topLink" title="A sport that is similar to paintball" href="#hobbies">Airsoft</a></td>
                            <td><a class="topLink" title="Games that I play on the PC" href="#hobbies">PC Gaming</a></td>
                        </tr>
                    </table>
                    <section id="airsoft">
                        <h3><span style='color:grey; '>Airsoft</span></h3>
                        <p>Airsoft is a game similar to paintball. Instead of shooting small balls of paint that explode on impact, airsoft uses small plastic 6mm bbs</p>
                        <!-- Source for image - https://www.quora.com/What-are-the-differences-between-paintball-and-airsoft -->
                        <img src='../images/member_6416565_1.jpg'>
                    </section>
                    <section id="pcgaming">
                        <?php
                        $gamingTitle = "<h3>PC Gaming</h3>";
                        echo "$gamingTitle";
                        $xmlData = simplexml_load_file("../data/member_6416585.xml"); 
                        ?>
                        <p><h4 style='padding-left:10px'><span style='color:grey; '>Desktop Specs:</span></h4></p>
                        <ul>
                            <li>
                                <?php echo $xmlData->component[0]->type; ?>:  <?php echo $xmlData->component[0]->name; ?>
                            </li>
                            <li>
                                <?php echo $xmlData->component[1]->type; ?>:  <?php echo $xmlData->component[1]->name; ?>
                            </li>
                            <li>
                                <?php echo $xmlData->component[2]->type; ?>:  <?php echo $xmlData->component[2]->name; ?>
                            </li>
                            <li>
                                <?php echo $xmlData->component[3]->type; ?>:  <?php echo $xmlData->component[3]->name; ?> ¦ <?php echo $xmlData->component[4]->name;?>
                            </li>                            
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </body>
    <?php include('../common/footer.php') ?>
</html>
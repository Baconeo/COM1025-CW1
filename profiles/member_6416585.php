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
            table {
                color: black;
                border: 3px solid #ccc;
                border-radius: 4px;
                padding-top: 5px;
                padding-bottom: 5px;
                width: 20%;
                margin : 0 auto;
                text-align: center;
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
                
                $('#airsoftLink').click(function() {
                    $("#airsoft").show();
                    $("#pcgaming").hide();
                });
                $('#pcgamingLink').click(function() {
                    $("#airsoft").hide();
                    $("#pcgaming").show();
                });
            });
        </script>
    </head>
    
    <body>
        <div id='frontpage'>
            <h1 style="background-color:#B22222;text-align:center; position:relative;">Robert Bacon's Profile</h1>
            <table style='margin: 0 auto;'>
                <tr>
                    <th><h3>Content</h3></th>
                </tr>
                <tr>
                    <td><a class="topLink" title="Hobbies that interest me" href="#hobbies">- Hobbies</a></td>
                </tr>
            </table>
            <br>
            <img style='margin: 0 auto;display:block;width:250px;height:250px;' alt="Robert Bacon's face" src = "../images/member_6416585.jpg">

            <div id='hobbies'>
                <div>
                    <h2>Hobbies</h2>
                    <table style='text-align:unset;'>
                        <tr>
                            <th>Click a hobby to bring up information</th>
                        </tr>
                        <tr>
                            <td><a id="airsoftLink" class="topLink" title="A sport that is similar to paintball" href="#hobbies">Airsoft</a></td>
                            <td><a id="pcgamingLink" class="topLink" title="Games that I play on the PC" href="#hobbies">PC Gaming</a></td>
                        </tr>
                    </table>
                    <section id="airsoft">
                        <h3><span style='color:grey; '>Airsoft</span></h3>
                        <p>Airsoft is a game similar to paintball. Instead of shooting small balls of paint that explode on impact, airsoft uses small plastic 6mm bbs</p>
                        <!-- Source for image - https://www.quora.com/What-are-the-differences-between-paintball-and-airsoft -->
                        <img alt="Paintball vs BB" src='../images/member_6416565_1.jpg'>
                        <h4>My kit:</h4>
                        <ul>
                            <?php
                            $airsoftKit = ["Head" => "Helmet", "Body" => "Plate Carrier", "Belt" => "Belt Rig", "Clothing" => "Camo Clothing", "Primary" => "Rifle", "Secondary" => "Pistol"];
                            foreach ($airsoftKit as $airsoftItem) : ?>
                            <li>
                                <?= $airsoftItem;  ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
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
                                <?php echo $xmlData->component[3]->type; ?>:  <?php echo $xmlData->component[3]->name; ?> Â¦ <?php echo $xmlData->component[4]->name;?>
                            </li>                            
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </body>
    <?php include('../common/footer.php') ?>
</html>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="../css/group.css"> 
        <script type="text/javascript" src="../external/jQuery/jquery-3.1.1.min.js"></script>
        
        <title>Robert Bacon's Profile</title>
        <style type='text/css'>
            div {
                width: 99%;
                height: 100%;
            }
            div  #hobbies {
                position: absolute;
                top: 100%;
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
        <script type="text/javascript">
            $(function() {
                // Run when an 'a' tag is clicked 
                $('a').click(function(){
                    // jQuery function animate used to smoothly scroll
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
        <?php include('../common/header.php') ?>        
        <div>
            <h1 style="background-color:#B22222;text-align:center; position:relative;text-shadow: 2px 2px 5px black;">Robert Bacon's Profile</h1>
            <h4 style="background-color:#ff0000;text-align:center; position:relative;"><?php 
            function displayTimeDate() {
                $timeDate = date("d/m/Y h:i:sa");
                echo "$timeDate";
            }

            displayTimeDate();
            ?></h4>
            <table style='margin: 0 auto;'>
                <tr>
                    <th>Content</th>
                </tr>
                <tr>
                    <td><a class="topLink" title="Hobbies that interest me" href="#hobbies">- Hobbies</a></td>
                </tr>
            </table>
            <br>
            <img style='margin: 0 auto;display:block;width:250px;height:250px;border-radius: 25px;' alt="Robert Bacon's face" src = "../images/member_6416585.jpg">       
            
            <div id='hobbies'>
                <div>
                    <h2>Hobbies</h2>
                    <table style='text-align:unset;'>
                        <tr>
                            <th colspan="2">Click a hobby to bring up information</th>
                        </tr>
                        <tr>
                            <td><a id="airsoftLink" class="topLink" title="A sport that is similar to paintball" href="#hobbies">Airsoft</a></td>
                            <td><a id="pcgamingLink" class="topLink" title="Games that I play on the PC" href="#hobbies">PC Gaming</a></td>
                        </tr>
                    </table>
                    <section id="airsoft">
                        <h3><span style='color:grey;'>Airsoft</span></h3>
                        <p>Airsoft is a game similar to paintball. Instead of shooting small balls of paint that explode on impact, airsoft uses small plastic 6mm bbs</p>
                        <!-- Source for image - https://www.quora.com/What-are-the-differences-between-paintball-and-airsoft -->
                        <img alt="Paintball vs BB" src='../images/member_6416585_1.jpg'>
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
                        <h4 style='padding-left:10px'><span style='color:grey; '>Desktop Specs:</span></h4>
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
                    <div style="height:unset;position:absolute;bottom:0;"><?php include('../common/footer.php') ?></div>                 
                </div>
            </div>
        </div>
    </body>
</html>
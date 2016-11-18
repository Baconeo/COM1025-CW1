<!DOCTYPE HTML>
<html lang="en">
    <?php include('../common/header.php') ?>

    <head>
        <title> Robbie's Awesome Page duh </title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/group.css">
        <style type="text/css">
            h1.main{
                text-align: center;
                background-color: #FFC474;
                font-size: 3em;
            }
            
            img.pics{
                height: 300px;
                width:auto;
                position: relative;
                padding: 10px;
            }
            
            img.profile{
                height: 300px;
                width:auto;
                position: absolute;
                right: 10px;
                padding: 10px;
                z-index: 1000;
            }
            
            .rotate270 {
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg);
            }
            
            th{ 
                background-color: #FFD59B;
            }
            
            tr,th,td{
                border: 1px solid black;
                padding: 15px;
                text-align: center;
            }
      
            span {
                color:#A0A0A0;
            }
            
            html {
                background-image: url("../images/BackgroundDraft2.png");
            }
            
            .grey {
                background-color: #E0E0E0;
                opacity: 0.7;
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
            });
        </script>
    </head>
    <body>
        <span>
            <h1 style="background-color:#FFC474" class="main">
                Robbie's Pagiest Page
            </h1>
            <?php
            function todaysdate(){
                $today = date("l jS \of F Y");
                echo "<div style='text-align:right'>$today</div>";
            }
            todaysdate();
            ?>
        </span>
        
        <p> 
            Hi. My name is Robbie Murray and I am currently studying computer science at the University of Surrey, located in Guildford. I studied Maths, Physics and Computing for A levels; I also took a year out and chose to study music instead of the typic travel around.
        </p>
        
        
        
        <a href="#photos"><img src = "../images/member_6437280_3.jpg" class='profile' title="This photo is of me, taken by my brother, in the Ninh Binh province in Vietnam"></a>
        
        <div class="grey">
            <?php 
            $interestlist ="Here is a list of things I like.";
            echo "<p>$interestlist</p>";        
            ?>

            <?php
            $interests = array("Playing Drums", "Skiing", "Programming", "Taking Photos",
            "Cooking", "Running", "Playing Counter Strike", "Sleeping", "Eating", "Rock Climbing"); ?>

            <ul>
                <?php 
                shuffle($interests);
                foreach ($interests as $interests): ?> 
                <li> <?php echo $interests; ?></li>
                <?php endforeach;
                unset($interests);?>
            </ul>

            <audio controls> 
                <source src="../audio/member_6437280.wav" type="audio/wav">
            </audio>
            
            <p> 
                Here are three extreme sports that I want to try out
            </p>

            <?php
            $sports = array("Paragliding", "Skydiving", "Sucba Diving", "Kite Surfing",
            "Mountain Biking", "Bungee Jumping","White Water Rafting", "Walking on Water");
            $rand_keys = array_rand($sports, 3);
            echo $sports[$rand_keys[0]] . ", " . "\n";
            echo $sports[$rand_keys[1]] . ", " . "\n";
            echo $sports[$rand_keys[2]] . "\n";
            ?>

            <p>
                <br>
            </p>
        </div>
        
        
        
        <p>
            Here is a table with my A level grades.
        </p>
        <?php
        $xml=simplexml_load_file("../data/member_6437280.xml"); 
        ?>
        
        <table style="border-collapse: collapse;">
            <tr>
                <th>Subject</th>
                <th>Grade</th>
                <th>Exam Board</th>
            </tr>
            <tr>
                <td><?php echo $xml->subject[0]->name; ?></td>
                <td><?php echo $xml->subject[0]->grade; ?></td>
                <td><?php echo $xml->subject[0]->examboard; ?></td>
            </tr>
            <tr>
                <td><?php echo $xml->subject[1]->name; ?></td>
                <td><?php echo $xml->subject[1]->grade; ?></td>
                <td><?php echo $xml->subject[1]->examboard; ?></td>
            </tr>
            <tr>
                <td><?php echo $xml->subject[2]->name; ?></td>
                <td><?php echo $xml->subject[2]->grade; ?></td>
                <td><?php echo $xml->subject[2]->examboard; ?></td>
            </tr>
        </table>
        
        <p id='photos'>
            Here are some photos that I have taken.
        </p>
        
        <img src = "../images/member_6437280_1.jpg" class='pics' title="This is a photo of a cylcist, cyling round the roads at Centennial Park in Sydney Australia.">
        <img src = "../images/member_6437280_2.jpg" class='pics' title="This is a photo of back of my friends house in the early hours of a new year.">
        <img src = "../images/member_6437280_4.jpg" class='pics' title="This is a panoramic photo of the Sólheimajökull glacier in Iceland.">
        <img src = "../images/member_6437280_5.jpg" class='pics' title="This is a photo of the cliffs by the village of Vík í Mýrdal in Iceland."> 
        <img src = "../images/member_6437280_6.jpg" class='pics' title="This is a photo of my brother taken at the Summer Palace in Bejing, China.">
        <img src = "../images/member_6437280_7.jpg" class='pics' title="This is a photo taken at the top of the Cugnai Chairlift in Val-d'Isere, France.">
        
    </body>
    <?php include('../common/footer.php') ?>
</html>
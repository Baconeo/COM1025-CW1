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
            }
            
            img.pics{
                height: 150px;
                width: 150px;
                position: absolute;
                right: 10px;
                padding: 10px;
            }
            
            th{ 
                background-color: #FFD59B;
            }
            
            tr,th,td{
                border: 1px solid black;
            }
            
            span {
                color:#A0A0A0;
            }
            
            html {
                background-image: url("../images/BackgroundDraft2.png");
            }
            
            div {
                background-color: "E0E0E0";
                opacity: 1;
            }
            
        </style>
    </head>
    <body>
        <span>
            <h1 style="background-color:#FFC474" class="main">
                Robbie's Pagiest Page
            </h1>
        </span>
        
        <img src = "../images/Placeholder_person.jpg" class='pics'>
        
        <div>
            <p>
                Here is a list of things I like.
            </p>

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

            <p> 
                Here are my three extreme sports that I want to try out
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
        
        
        <table style="border-collapse: collapse;">
            <tr>
                <th>Table heading 1</th>
                <th>Table heading 2</th>
                <th>Table heading 3</th>
            </tr>
            <tr>
                <td>R1 D1</td>
                <td>R1 D2</td>
                <td>R1 D3</td>
            </tr>
            <tr>
                <td>R2 D1</td>
                <td>R2 D2</td>
                <td>R2 D3</td>
            </tr>
        </table>
        
    </body>
</html>
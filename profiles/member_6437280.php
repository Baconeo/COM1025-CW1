<!DOCTYPE HTML>
<html lang="en">
    <?php include('../common/header.php') ?>

    <head>
        <title> Robbie's Awesome Page duh </title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/group.css">
        <style type="text/css">
            h1.main{
                text-align: center
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
            
        </style>
    </head>
    <body>
        <span>
            <h1 style="background-color:#FFC474" class="main">
                Robbie's Pagiest Page
            </h1>
        </span>
        
        <img src = "../images/Placeholder_person.jpg" class='pics'>
        
        <p>
            Content of the paragraph
        </p>
        
        <?php
        $words = array("the ", "quick ", "brown ", "fox ",
        "jumped ", "over ", "the ", "lazy ", "dog ");
        shuffle($words);
        foreach ($words as $word) {
            echo $word;
        };
        
        unset($word);
        ?>
        <ul>
            <li>Content of the list</li>
            <li>Content of the list</li>
            <li>Content of the list</li>
        </ul>
        
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
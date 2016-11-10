<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <?php include('../common/header.php') ?>

    <head>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="../css/group.css">   
        <title>Robert Bacon's Profile</title>
        <style type='text/css'>
            div {
                position:absolute;
                width:100%;
                height:100%;
            }
            div #frontpage {
                top: 100%
            }
            div  #hobbies {
                top: 200%;
            }
            div #projects {
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
            });
        </script>
    </head>
    
    <body>
        <div id='frontpage'>
        <div>
            <h1 style="text-align:center; position:relative; padding-top:70px;">Robert Bacon's Profile</h1>
            <img src = "../images/Placeholder_person.jpg" class="pics">
            <table>
                <tr>
                    <th>Content</th>
                </tr>
                <tr>
                    <td><a title="Hobbies that interest me" href="#hobbies">Hobbies</a></td>
                    <td><a title="Previous projects I have been involved with"href="#projects">Previous Projects</a></td>
                </tr>
            </table>
        </div>
        <div id='hobbies'>
            <div>
                <p>Test</p>
            </div>
        </div>

        <div id='projects'>
            <div>
                <p>Test</p>
            </div>
        </div>
        </div>
    </body>
    <?php include('../common/footer.php') ?>
</html>
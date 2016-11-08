<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <?php include('../common/header.php') ?>

    <head>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" />

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
            div  #airsoft {
                top: 200%;
            }
            div #pcgaming {
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
            <div class="prim-navigation">
                <div> 
                    <div><a href="../index.php">Home</a></div>
                    <div><a href="">About</a></div>
                </div>
            </div>
            <h1 style="text-align:center">Robert Bacon's Profile</h1>
            <img align='middle' src = "../images/Placeholder_person.jpg" class="pics">
            <table>
                <tr>
                    <th>Content</th>
                </tr>
                <tr><td><a href="#airsoft">Airsoft</a></td></tr>
            </table>
        </div>
        <div id='airsoft'>
            <div>
                <p>Test</p>
            </div>
        </div>

        <div id='pcgaming'>
            <div>
                <p>Test</p>
            </div>
        </div>
        </div>
    </body>
    <?php include('../common/footer.php') ?>
</html>
<head>
    <?php 
    $locationCheck = getcwd() . "\index.php";
    $backtrace = debug_backtrace();

    if (in_array($locationCheck, $backtrace[0])) : ?>
        <link type="text/css" rel="stylesheet" href="./css/group.css">   
    <?php else : ?>
        <link type="text/css" rel="stylesheet" href="../css/group.css">   
    <?php endif; ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
</head>
<html>
    <body>

    </body>
</html>
<head>
    <?php 
    
    function locationCheck() {
        $locationCheck = getcwd() . "\index.php";
        $backtrace = debug_backtrace();
        
        return in_array($locationCheck, $backtrace[0]);
    }

    if (locationCheck()) : ?>
        <link type="text/css" rel="stylesheet" href="./css/group.css">   
    <?php else : ?>
        <link type="text/css" rel="stylesheet" href="../css/group.css">   
    <?php endif; ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
    
    <?php
    // Cookie Creation

    // Cookie to store previous pages visited  
    $name = "previousPages";
    $backtrace = debug_backtrace();
    $path = $backtrace[0]['file'];
    $value = substr($path, strrpos($path, "\\") + 1);
    $value = strtok($value, '.');
    
    if (isset($_COOKIE[$name])) {
        $value = $_COOKIE[$name] . " / " . $value;
    }
        
    setcookie($name, $value, time() + (86400 * 30), '/');
    
    ?>
    
</head>
<html>
    <body>
        <div>
            <?php
            // Cookie not set on first visit so will throw an error when trying to print if not set
            if (isset($_COOKIE["previousPages"])) {
                print $_COOKIE["previousPages"];
            }
            ?>
            <div class="prim-navigation">
                <div>
                    <?php if (locationCheck()) : ?>
                    <div><a href="./index.php">Home</a></div>
                    <?php else : ?>
                    <div><a href="../index.php">Home</a></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
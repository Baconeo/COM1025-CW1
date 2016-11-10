<head>
    <?php 
    
    function locationCheck() {
        $locationCheck = getcwd() . "\index.php";
        $backtrace = debug_backtrace();
                
        return in_array($locationCheck, $backtrace[1]);
    }
    
    ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
    
    <?php
    // Cookie Creation

    // Cookie to store previous pages visited  
    $name = "previousPages";
    // Backtrace where the current file is
    $backtrace = debug_backtrace();
    $path = $backtrace[0]['file'];
    // Reduce the string to everything after the last '\'
    $value = substr($path, strrpos($path, "\\") + 1);
    // Remove everything after the last '.' in the string
    $value = strtok($value, '.');
    
    
    if (isset($_COOKIE[$name])) {
        $value = $_COOKIE[$name] . " / " . $value;
    }
     
    $count = 0;
    $countName = "pageCount";
    
    if (isset($_COOKIE[$countName])){
        $count = $_COOKIE[$countName];
    }
    $count++;
    
    setcookie($countName, $count, time() + (86400 * 30), '/');
    setcookie($name, $value, time() + (86400 * 30), '/');
    
    
    ?>
    
</head>
<html>
    <body>
        <div>
            <div class="prim-navigation">
                <div>
                    <?php if (locationCheck()) : ?>
                    <div><a href="./index.php">Home</a></div>
                    <div><a href="./index.php#half2">Contact Us</a></div>
                    <?php else : ?>
                    <div><a href="../index.php">Home</a></div>
                    <div><a href="../index.php#half2">Contact Us</a></div>                    
                    <?php endif; ?>
                </div>
            </div>
            <?php
            // Cookie not set on first visit so will throw an error when trying to print if not set
            if (isset($_COOKIE["previousPages"]) && $_COOKIE["pageCount"] < 10) {
                print $_COOKIE["previousPages"];
            }
            ?>
        </div>
    </body>
</html>
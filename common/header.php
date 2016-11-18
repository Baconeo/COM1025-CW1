<?php 

function locationCheck() {
    $locationCheck = getcwd() . "\index.php";
    $backtrace = debug_backtrace();

    return in_array($locationCheck, $backtrace[1]);
}

?>

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

// Check if the cookie is set already, if it is we append to what is currently within
if (isset($_COOKIE[$name])) {
    $value = $_COOKIE[$name] . " / " . $value;
}

setcookie($name, $value, time() + (86400 * 30), '/');


?>
    
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
    <div>
        <?php
        // Cookie not set on first visit so will throw an error when trying to print if not set
        if (isset($_COOKIE["previousPages"])) {
            print $_COOKIE["previousPages"];
        } 
        ?>
    </div>
</div>

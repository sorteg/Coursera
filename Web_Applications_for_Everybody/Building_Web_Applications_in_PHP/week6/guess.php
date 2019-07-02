<!DOCTYPE html>
<html>
<head>
<title>Susana Ortega</title>
</head>

<body>
<h1>Welcome to my guessing game</h1>
<pre>
<?PHP
    $num = 31;
    
    if (count($_GET) == 0) {
        echo "Missing guess parameter";
    }
    elseif ($_GET["guess"] == '') {
        echo "Your guess is too short";
    }
    elseif (!is_numeric($_GET["guess"])) {
        echo "Your guess is not a number";
    }
    elseif ($_GET["guess"] < $num) {
        echo "Your guess is too low";
    }
    elseif ($_GET["guess"] > $num) {
        echo "Your guess is too high";
    }
    elseif ($_GET["guess"] == $num) {
        echo "Congratulations - You are right";
    }
    ?>

</pre>

</body>


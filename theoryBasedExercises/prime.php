<!-- Write a PHP program to find whether a number is *prime* or not using a for loop and if–else. -->


<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Check</title>
</head>
<body></body>
    <h2>Check if a Number is Prime</h2>
    <form method="post" action="">
        Enter a Number: <input type="number" name="number" required><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        $isPrime = true;

        if ($number <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "<h3>$number is a Prime Number.</h3>";
        } else {
            echo "<h3>$number is not a Prime Number.</h3>";
        }
    }
    ?>
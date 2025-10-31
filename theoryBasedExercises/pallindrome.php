 <!-- Write a PHP program to check whether a number is *palindrome* or not (e.g., 121 → palindrome). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Check if a Number is Palindrome</h2>
    <form method="post" action="">
        Enter a Number: <input type="number" name="number" required><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        $og = $number;
        $reversedNumber = 0;

        while ($number > 0) {
            $digit = $number % 10;
            $reversedNumber = ($reversedNumber * 10) + $digit;
            $number = (int)($number / 10);
        }

        if ($og == $reversedNumber) {
            echo "<h3>$og is a Palindrome.</h3>";
        } else {
            echo "<h3>$og is not a Palindrome.</h3>";
        }
    }
    ?>
    
</body>
</html>
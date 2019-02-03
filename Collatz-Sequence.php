<?php
    function Collatz($input) {
        $output = $input;
        $numbers = array();
        while (!in_array(1, $numbers)) {
            if ($input % 2 != 0) {
                $input = $input * 3 + 1;
                $numbers[count($numbers)] = $input;
            } else if ($input % 2 == 0) {
                $input = $input / 2;
                $numbers[count($numbers)] = $input;
            }
        }
        foreach ($numbers as $num) {
            $output = $output . ", " . $num;
        }
        return $output;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Collatz Sequence</title>
    </head>
    <body>
        <h1>Collatz Sequence in PHP</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <label>Enter a positive Integer: </label>
            <input type="number" name="input">
            <input type="submit" name="submit">
        </form>
        <p><?php if (!empty($_POST['input'])) echo Collatz($_POST['input']); ?></p>
        <p>For the sake of it, here is the sum of all values: <?php echo array_sum(explode(", ", Collatz($_POST['input']))); ?></p>
    </body>
</html>
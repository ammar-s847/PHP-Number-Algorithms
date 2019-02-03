<?php
    function FibonacciPosition($position) {
        $Fibarray = array(0, 1);
        for ($i = 2; $i <= $position; $i++) {
            $Fibarray[$i] = $Fibarray[$i-1] + $Fibarray[$i-2];
        }
        $output = $Fibarray[$position];
        echo number_format($output);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Position on the Fibonacci Sequence</title>
    </head>
    <body>
        <h3>Find the position of a number in the Fibonacci Sequence</h3>
        <p style="text-indent: 10px;">BTW, the first number in the sequence for this program is <strong>1</strong>!</p>
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="position">Type the position: </label>
            <input type="number" name="position" placeholder="Position">
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <div style="width: 500px; height: 1.5px; background-color: #000; float: left; position: relative;"></div>
        <br>
        <?php
            if (!empty($_POST['position'])) {
                echo '<p>' . FibonacciPosition($_POST['position']) . "</p>";
            } else {
                echo "<br>";
            }
        ?>
        <div style="width: 500px; height: 1.5px; background-color: #000; float: left; position: relative;"></div>
    </body>
</html>
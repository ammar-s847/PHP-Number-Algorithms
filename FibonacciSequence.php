<?php
    function FibonacciSequence($length) {
        $Fibarray = array(0, 1);
        for ($i = 2; $i <= $length; ++$i) {
            $Fibarray[$i] = $Fibarray[$i-1] + $Fibarray[$i-2];
        }
        foreach ($Fibarray as $value) {
            echo $value . ", ";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fibonacci Sequence</title>
    </head>
    <body>
        <h1>The Fibonacci Sequence</h1>
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="length">Enter the Length of output: </label>
            <input type="number" name="length" placeholder="Length">
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <?php if (!empty($_POST['length'])) echo "<h2>" . FibonacciSequence($_POST['length']) . "</h2>"; ?>
    </body>
</html>

<!--
function FibonacciSequence ($i) { // Function to get the number at pos n
	if ($i <= 2) {
		return 1;
	} else {
		return FibonacciSequence($i-1) + FibonacciSequence($i-2);
	}
}

function FibonacciSequenceArray($i) { // Function to create the array
        for ($n = 1; $n <= $_GET["n"]; $n++) {
                $fib_array[$n-1] = FibonacciSequence($n);
        }
	return $fib_array;
}

if ($_GET["n"]) {
	// Constraint check
	if (!is_numeric($_GET["n"])) die("Invalid input. n must be an integer.");
	if ($_GET["n"] < 1) die("Invalid input. Constraints: n > 0");
	// End constraint check
	echo var_dump(FibonacciSequenceArray($_GET["n"]));
} else {
	// No input.
	echo "n must be set to an integer greater than 0.";
}
?>
-->

<!--
function FibonacciSequence($length) {
    $numbers = array(1, 1, 2);
    if ($length == 1) {
        echo "1";
    } elseif ($length == 2) {
        echo "1, 1";
    } elseif ($length == 3) {
        echo print_r($numbers);
    } elseif ($length > 3) {
        for ($n = 1; $n <= $length; $n++) {
            for ($i = 3; $i == $i; $i += $addition) {
                array_push($numbers, $i);
                $addition += $numbers[$i-1] + $numbers[$i-2];
            }
        }
        return print_r($numbers);
    }
    else {
        echo "Error";
    }
}
-->
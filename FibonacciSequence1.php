<?php
    function FibonacciSequence($length) {
        $Fibarray = array(1, 1);
        $Fiboutput = "0, ";
        for ($i = 2; $i <= $length; ++$i) {
            $Fibarray[$i] = $Fibarray[$i-1] + $Fibarray[$i-2];
        }
        foreach ($Fibarray as $value) {
            $Fiboutput = $Fiboutput . $value . ", ";
        }
        return substr_replace($Fiboutput, ".", -2, strlen($Fiboutput)-2);
        /* 
        If you don't want a period: 
        return substr($Fiboutput, 0, -2);
        */
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fibonacci Sequence</title>
    </head>
    <body>
        <h1>The Fibonacci Sequence (with a period at the end)</h1>
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="length">Enter the Length of output: </label>
            <input type="number" name="length" placeholder="Length">
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <?php if (!empty($_POST['length'])) echo "<h2>" . FibonacciSequence($_POST['length']) . "</h2>"; ?>
        <span font-family="Helvetica" style="position: absolute; bottom: 15px;">( ͡° ͜ʖ ͡°)</span>
    </body>
</html>
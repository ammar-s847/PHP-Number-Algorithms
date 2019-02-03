<?php
    function pi_degree($degrees) {
        return M_PI ** $degrees;
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pi to the Nth degree</title>
	</head>
	<body>
		<p>Pi to the Nth degree</p>
		<?php if (!empty($_POST["degreeInput"])) echo pi_degree($_POST["degreeInput"]); ?>
		<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
			<label for="degreeInput" />
			<input type="number" name="degreeInput" placeholder="Degrees..." />
			<input type="submit" value="Convert" />
		</form>
	</body>
</html>

<!-- test -->

<?php/*

if (isset($POST['submit'])) {
    function Pi_degree ($function_input) {
        $function_output = pi()**$function_input;
        return $function_output;
    }

    $output = Pi_degree($POST['degree']);
}
*/
?>

<!DOCTYPE html>
<!--
<html>
    <head>
        <title>Pi to the N'th degree</title>
    </head>
    <body>
        <p>enter the degree:</p>
        <br>
        <form method="POST" action="</*?=$_SERVER['PHP_SELF']?>*/">
            <input type="text" name="degree">
            <button type="submit" name="submit" value="true">submit</button>
        </form>
        <br>
        <p><?/* echo "Pi^". $POST['degree'] . " = ". $output; */?></p>
    </body>
</html>-->
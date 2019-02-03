<?php 
    function E_degree($degree) {
        return M_E ** $degree;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>E to the Nth degree</title>
    </head>
    <body>
        <p>E to the Nth Degree</p>
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="degree_input">Degree: </label>
            <input type="number" name="degree_input">
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <?php if (!empty($_POST['degree_input'])) echo "<h1>" . E_degree($_POST['degree_input']) . "</h1>"; ?>
    </body>
</html>
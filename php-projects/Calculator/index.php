<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>

    <?php
    $num1 = "";
    $num2 = "";
    $result = "";
    $operator = "";

    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];


        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operator) {
                case "Add":
                    $result = $num1 + $num2;
                    break;
                case "Subtract":
                    $result = $num1 - $num2;
                    break;
                case "Multiply":
                    $result = $num1 * $num2;
                    break;
                case "Divide":
                    // Prevent division by zero
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Error: Division by zero";
                    }
                    break;
            }
        } else {
            $result = "Please enter valid numbers.";
        }
    }
    ?>

    <form method="post" action="">
        <input type="number" step="any" name="num1" value="<?php echo $num1; ?>" required>

        <select name="operator">
            <option value="Add" <?php if ($operator == 'Add') echo 'selected'; ?>>+</option>
            <option value="Subtract" <?php if ($operator == 'Subtract') echo 'selected'; ?>>-</option>
            <option value="Multiply" <?php if ($operator == 'Multiply') echo 'selected'; ?>>*</option>
            <option value="Divide" <?php if ($operator == 'Divide') echo 'selected'; ?>>/</option>
        </select>

        <input type="number" step="any" name="num2" value="<?php echo $num2; ?>" required>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php if ($result !== ""): ?>
        <h3>Result: <?php echo $result; ?></h3>
    <?php endif; ?>

</body>
</html>
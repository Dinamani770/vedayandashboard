<?php
$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/asso.php');
    include_once ($filepath.'/../lib/Database.php');
    $db=new Database();
    
    
    // Fetch data
    $sql = "SELECT id, centre,sname FROM admission";
    $result = $db->select($sql);
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Combo Box Example</title>
</head>
<body>

<form method="post" action="">
    <label for="items">Choose an option:</label>
    <select id="items" name="items">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['sname'] . "</option>";
            }
        } else {
            echo "<option value=''>No options available</option>";
        }
        ?>
    </select>
    
    <button type="submit">Submit</button>
</form>

</body>
</html>
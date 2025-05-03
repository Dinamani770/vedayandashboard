<?php
$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/asso.php');
    include_once ($filepath.'/../lib/Database.php');
    $db=new Database();
    
    
    // Fetch data
    $sql = "SELECT id,state,centre,sname FROM admission";
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
                echo "<option value='" . $row['id'] . "'>" . $row['state'] . "</option>";
                //echo "<option value='" . $row['id'] . "'>" . $row['sname'] . "</option>";
            }
        } else {
            echo "<option value=''>No options available</option>";
        }
        ?>
    </select>
    <label for="items">Choose an option:</label>
    <select id="items1" name="items1">
            <?php
       if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['state'] . "'>" . $row['sname'] . "</option>";
                //echo "<option value='" . $row['id'] . "'>" . $row['sname'] . "</option>";
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

<?php/*
require ('fpdf.php');
$name="Dinamani";
$pdf=new FPDF();
$pdf->AddPage("P");
$pdf->SetFont("courier");
$pdf->Image("vedayancertificate.jpg",5,5,197,290);
$pdf->cell(150,140,"$name",0,0,"L",0,'',);
$pdf->cell(150,150,"Vedayan Foundation",1,0,"L",0,'');
//$pdf->image("image1.jpg",150,80,30,20);
$pdf->cell(150,10,"Vedayan Foundation",1,0,"L",0,'');
$pdf->output();*/
?>

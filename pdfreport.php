<?php
// Include FPDF library
require('fpdf.php');

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "reg";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database
$sql = "SELECT * FROM record ";
$result = $conn->query($sql);

// Create PDF
$pdf = new FPDF();
$pdf->AddPage("L");
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'Report');

// Check if results exist
if ($result->num_rows > 0) {
    // Add table headers
    $pdf->Ln(10); // Line break
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(10, 10, ' ID', 1);
    $pdf->Cell(50, 10, ' Student Name', 1);
    $pdf->Cell(20, 10, 'Centre', 1);
    $pdf->Cell(20, 10, 'State', 1);
    $pdf->Cell(20, 10, 'Course', 1);
    $pdf->Cell(20, 10, 'Date of Birth', 1);
    $pdf->Cell(20, 10, 'Gendre', 1);
    $pdf->Cell(35, 10, 'Email', 1);
    $pdf->Cell(20, 10, 'Phone', 1);
    $pdf->Ln();

    // Fetch data and add rows
    $pdf->SetFont('Arial', '', 9);
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(10, 10, $row['ID'], 1);
        $pdf->Cell(50, 10, $row['sname'], 1);
        $pdf->Cell(20, 10, $row['centre'], 1);
        $pdf->Cell(20, 10, $row['state'], 1);
        $pdf->Cell(20, 10, $row['course'], 1);
        $pdf->Cell(20, 10, $row['dob'], 1);
        $pdf->Cell(20, 10, $row['gendre'], 1);
        $pdf->Cell(35, 10, $row['email'], 1);
        $pdf->Cell(20, 10, $row['phoneno'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Ln(10);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(40, 10, 'No records found.');
}

// Output the PDF
$pdf->Output();

// Close connection
$conn->close();
?>
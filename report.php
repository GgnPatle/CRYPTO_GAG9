
<!DOCTYPE html>
<html>
<style>
table, th, td {
    border: 1px solid black;
    
}
</style>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gag_9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM payment";
$result = $conn->query($sql);
// report
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while($row = $result->fetch_object()){
  $id = $row->id;
  $name = $row->name;
  $address = $row->address;
  $phone = $row->phone;
  $pdf->Cell(20,10,$id,1);
  $pdf->Cell(40,10,$name,1);
  $pdf->Cell(80,10,$address,1);
  $pdf->Cell(40,10,$phone,1);
  $pdf->Ln();
}
$pdf->Output();
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<table><tr><th>ID</th><th>Name</th><th>date & Time</th></tr>";
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["holder_name"].  "</td><td>" . $row["dt"]. "</td></tr>";
        //echo "<br> id: ". $row["id"]. " - Name: ". $row["holder_name"]. " " . $row["dt"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
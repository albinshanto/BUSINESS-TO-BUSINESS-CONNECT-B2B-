<?php
session_start();
include("DatabaseCon.php");
$db = new DatabaseCon();

// FPDF Library
require("fpdf186/fpdf.php");

if (!isset($_GET['oid'])) {
    echo "Invalid Request!";
    exit;
}

$oid = $_GET['oid'];

// Fetch order details
$q1 = "SELECT * FROM orderm WHERE oid=$oid";
$or = $db->selectData($q1);
$order = mysqli_fetch_array($or);

// Fetch retailer details
$q2 = "SELECT * FROM retailer WHERE rtid=" . $order['uid'];
$ret = $db->selectData($q2);
$retailer = mysqli_fetch_array($ret);

// Fetch item details
$q3 = "SELECT * FROM orderc 
       INNER JOIN item ON item.icode = orderc.icode 
       WHERE oid=$oid";
$itemres = $db->selectData($q3);


// Create PDF
$pdf = new FPDF();
$pdf->AddPage();

// Header
$pdf->SetFont("Arial", "B", 20);
$pdf->Cell(190, 12, "INVOICE", 0, 1, "C");
$pdf->Ln(5);

// Retailer Details
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(100, 8, "Retailer Details", 0, 1);

$pdf->SetFont("Arial", "", 11);
$pdf->Cell(100, 6, "Name: " . $retailer['name'], 0, 1);
$pdf->Cell(100, 6, "Address: " . $retailer['address'], 0, 1);
$pdf->Cell(100, 6, "District: " . $retailer['district'], 0, 1);
$pdf->Cell(100, 6, "Pincode: " . $retailer['pincode'], 0, 1);
$pdf->Cell(100, 6, "Phone: " . $retailer['phn'], 0, 1);
$pdf->Cell(100, 6, "Email: " . $retailer['email'], 0, 1);

$pdf->Ln(8);

// Order Details
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(100, 8, "Order Details", 0, 1);

$pdf->SetFont("Arial", "", 11);
$pdf->Cell(100, 6, "Order ID: " . $order['oid'], 0, 1);
$pdf->Cell(100, 6, "Order Date: " . $order['odate'], 0, 1);
$pdf->Cell(100, 6, "Order Status: " . $order['status'], 0, 1);
$pdf->Cell(100, 6, "Payment Status: " . $order['pstatus'], 0, 1);

$pdf->Ln(8);

// Items Table Header
$pdf->SetFont("Arial", "B", 11);
$pdf->Cell(80, 10, "Item", 1, 0, "C");
$pdf->Cell(25, 10, "Qty", 1, 0, "C");
$pdf->Cell(40, 10, "Amount", 1, 0, "C");
$pdf->Cell(45, 10, "Total", 1, 1, "C");

$pdf->SetFont("Arial", "", 11);

$grand_total = 0;

// Items Loop
while ($row = mysqli_fetch_array($itemres)) {
    $qty = $row['mqty'];
    $amt = $row['amt'];
    $total = $qty * $amt;
    $grand_total += $total;

    $pdf->Cell(80, 10, $row['iname'], 1);
    $pdf->Cell(25, 10, $qty, 1, 0, "C");
    $pdf->Cell(40, 10, "₹ " . $amt, 1, 0, "R");
    $pdf->Cell(45, 10, "₹ " . $total, 1, 1, "R");
}

// Grand Total
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(145, 10, "Grand Total", 1, 0, "R");
$pdf->Cell(45, 10, "₹ " . $grand_total, 1, 1, "R");

$pdf->Ln(10);

// Footer
$pdf->SetFont("Arial", "I", 10);
$pdf->Cell(190, 8, "Thank you for your purchase!", 0, 1, "C");


// -------------------------------
// SAVE PDF ON SERVER
// -------------------------------

$filepath = "invoices/invoice_" . $oid . ".pdf";

// Save file to server
$pdf->Output("F", $filepath);

// Also force download for wholesaler
$pdf->Output("D", "invoice_" . $oid . ".pdf");


// --------------------------------
// Save invoice record in database
// --------------------------------

$insert = "INSERT INTO invoice (oid, filepath) VALUES ($oid, '$filepath')";
$db->insertData($insert);

?>

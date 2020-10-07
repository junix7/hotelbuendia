<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT dni,nombre,apellido FROM tblhotel ORDER BY apellido ASC";
	$resultado = $conexion->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);

	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,6,'dni',1,0,'C',1);
	$pdf->Cell(70,6,'Nombre',1,0,'C',1);
	$pdf->Cell(70,6,'Apellido',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(50,6,utf8_decode($row['dni']),1,0,'C');
		$pdf->Cell(70,6,$row['nombre'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['apellido']),1,1,'C');
		
		
		
	}

	$pdf->Cell(40,10,date('d/m/y'),0,1,'L');
	$pdf->Cell(40,5,date("h:i:s"),0,5,'L');
	$pdf->Output();
?>
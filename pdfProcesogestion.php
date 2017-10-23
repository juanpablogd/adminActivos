<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: "text/html"; charset=iso-8859-1');
require('./libs/fpdf/fpdf.php');

class PDF extends FPDF
{
	//Letter (US)	215.9 x 279.4 - 8.5 x 11
	// Simple table
	function Encabezado()
	{	// Logo
		$this->SetFont('Arial','B',14);
		$this->SetXY(10,10);
		$this->Cell(76,28,null,1);
		$this->Image('./img/logo.png',15,15,50);
		//Título echo $this-> GetX();	//$this->SetXY(86,10);
		$this->Cell(180,14,utf8_decode("PROCESO DE GESTIÓN DE RECURSOS FÍSICOS"),1,null,"C");
		$this->Ln();	$this->SetX(86);
		$this->Cell(180,14,utf8_decode("TRASLADO FÍSICO DE BIENES MUEBLES"),1,null,"C");
		$this->SetXY(266,10);
		$this->SetFont(null,null,8);
		$this->Cell(54,7,utf8_decode("CÓDIGO: A-GRF-FR-003"),1);
		$this->Ln();	$this->SetX(266);
		$this->Cell(54,7,utf8_decode("VERSIÓN: 01"),1);
		$this->Ln();	$this->SetX(266);
		$this->Cell(54,7,utf8_decode("FECHA DE APROBACIÓN: 16/Oct/2013"),1);
		$this->Ln();	$this->SetX(266);
		$this->Cell(54,7,utf8_decode("PÁGINAS"),1);
	}
	function subEncabezado()
	{	// Logo
		$this->SetXY(10,38);
		$this->SetFont('Arial','B',9);
		$this->Cell(155,7,utf8_decode("DATOS DE QUIEN ENTREGA"),1,null,"C");
		$this->Cell(155,7,utf8_decode("DATOS DE QUIEN RECIBE"),1,null,"C");
		$this->Ln();
		$this->SetFont(null,null,8);
		$this->Cell(155,7,utf8_decode("FUNCIONARIO RESPONSABLE: "),1);
		$this->Cell(155,7,utf8_decode("NOMBRE: "),1);
		$this->Ln();
		$this->Cell(155,7,utf8_decode("N° CÉDULA DE CIUDADANIA: "),1);
		$this->Cell(155,7,utf8_decode("N° CÉDULA DE CIUDADANIA: "),1);
		$this->Ln();
		$this->Cell(155,7,utf8_decode("SECRETARIA Y DEPENDENCIA: "),1);
		$this->Cell(155,7,utf8_decode("SECRETARIA Y DEPENDENCIA: "),1);
		$this->Ln();
		$this->Cell(155,7,utf8_decode("FECHA: "),1);
		$this->Cell(155,7,utf8_decode("FECHA: "),1);
		$this->Ln();
	}
	function tituloElementos()
	{	// Logo
		$this->SetXY(10,75);
		$this->SetFont('Arial','B',8);
		$this->Cell(35,8,utf8_decode("ACTIVO FIJO"),1,null,"C");
		$this->Cell(40,8,utf8_decode("N° DE PLAQUETA"),1,null,"C");
		$this->Cell(45,8,utf8_decode("SERIE"),1,null,"C");
		$this->Cell(107,8,utf8_decode("NOMBRE Y ESPECIFICACIONES DE LOS BIENES"),1,null,"C");
		$this->SetFont('Arial','B',6);
		$this->Cell(55,4,utf8_decode("EXISTENCIAS FÍSICAS"),1,null,"C");
		$this->Cell(28,4,utf8_decode("ESTADO DEL BIEN"),1,null,"C");
		$this->Ln();	$this->SetX(237);
		$this->Cell(14,4,utf8_decode("CANTIDAD"),1,null,"C");
		$this->Cell(17,4,utf8_decode("Vr. UNITARIO"),1,null,"C");
		$this->Cell(24,4,utf8_decode("Vr. TOTAL"),1,null,"C");
		$this->Cell(7,4,utf8_decode("B"),1,null,"C");
		$this->Cell(7,4,utf8_decode("R"),1,null,"C");
		$this->Cell(7,4,utf8_decode("M"),1,null,"C");
		$this->Cell(7,4,utf8_decode("I"),1,null,"C");

	}
}

$pdf = new PDF();
// Data loading
$pdf->AddPage('L','Legal');

$pdf->Encabezado();
$pdf->subEncabezado();
$pdf->tituloElementos();
$pdf->Output();
?>
<?php

$pdf = new FPDF('P', 'mm', 'Letter');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

if ($datosfactura) {
  $pdf->Cell(180, 6, 'REPORTES DE INGRESOS', 1, 1, 'C');  
  //ANCHO DE LA CELDA/ ALTO DE LA CELDA/ TEXTO/ BORDES 0 O 1 MARCO/ LN NO SE PA QUE/ C CENTRADO
  $IngresoNetoSumatoria = 0;
  $IvaTotalSumatoria = 0;
  $pdf->Ln();
  //$pdf->Cell(180,5,'CI USUARIO   ||   N FACTURA   ||   NITCLIENTE   ||   CANTIDAD TOTAL   ||   IVA   ||   INGRESO NETO',0,1,'C');   // 3 espacios
  $pdf->Ln();
  $pdf->SetFont('Arial', '', 10);
  $pdf->Cell(20, 5, "FECHA", 1);
  $pdf->Cell(25, 5, "CIUSUARIO", 1);
  $pdf->Cell(25, 5, "N FACTURA", 1);
  $pdf->Cell(25, 5, "NIT CLIENTE", 1);
  $pdf->Cell(25, 5, "MONTO", 1);
  $pdf->Cell(25, 5, "IVA", 1);
  $pdf->Cell(30, 5, "INGRESO NETO", 1);
  $pdf->Ln();
  foreach ($datosfactura->result() as $row) {
    $cantidad = $row->cantidadtotal;
    $Iva = $cantidad * 13 / 100;
    $IngresoNeto = $cantidad - $Iva;
    $IngresoNetoSumatoria = $IngresoNetoSumatoria + $IngresoNeto;
    $IvaTotalSumatoria = $IvaTotalSumatoria + $Iva;
    $pdf->Cell(20, 5, $row->fecha, 1);
    $pdf->Cell(25, 5, $row->ciusuario, 1);
    $pdf->Cell(25, 5, $row->numfactura, 1);
    $pdf->Cell(25, 5, $row->nitcliente, 1);
    $pdf->Cell(25, 5, $row->cantidadtotal . ' bs', 1);
    $pdf->Cell(25, 5, $Iva . ' bs', 1);
    $pdf->Cell(30, 5, $IngresoNeto . ' bs', 1);
    $pdf->Ln();   //salto de linea  
  }
  $pdf->Ln();
  $pdf->Cell(80, 6, 'IVA TOTAL:  ' . $IvaTotalSumatoria . ' bs', 1, 1, 'C');
  $pdf->Cell(80, 6, 'INGRESO TOTAL NETO    ' . $IngresoNetoSumatoria . ' bs', 1, 1, 'C');
} else {
  $pdf->Cell(180, 6, 'NO EXISTEN DATOS', 1, 1, 'C');
}

$pdf->Output();

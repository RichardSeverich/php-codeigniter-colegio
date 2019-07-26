<?php 
	
		$pdf=new FPDF('P','mm','Letter');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',14);	
		
		if($inscripciones)
		{		
			
			
			$pdf->Cell(180,6,'REPORTES DEL CURSO',1,1,'C');  //ANCHO DE LA CELDA/ ALTO DE LA CELDA/ TEXTO/ BORDES 0 O 1 MARCO/ LN NO SE PA QUE/ C CENTRADO
			$pdf->Cell(180,6,'GESTION: '.$aniogestion,0,1,'C');
			$pdf->Cell(180,6,'NIVEL EDUCATIVO: '.$niveleducativo,0,1,'C');
			$pdf->Cell(180,6,'CURSO: '.$nombrecurso,0,1,'C');
			$pdf->Cell(180,6,'PARALELO: '.$paralelocurso,0,1,'C');
			$IngresoNetoSumatoria=0;
			$IvaTotalSumatoria=0;
		
			$pdf->Ln();
			//$pdf->Cell(180,5,'CI USUARIO   ||   N FACTURA   ||   NITCLIENTE   ||   CANTIDAD TOTAL   ||   IVA   ||   INGRESO NETO',0,1,'C');   // 3 espacios
			$pdf->Ln();
			$pdf->SetFont('Arial','',10);
			
			$pdf->Cell(40,5,"CI ESTUDIANTE",1);
			$pdf->Cell(40,5,"NOMBRES",1);
			$pdf->Cell(40,5,"APELLIDOS",1);
			$pdf->Cell(40,5,"DEBE",1);
			$pdf->Ln();
			foreach ($inscripciones -> result() as $row1)
			{
				foreach ($pensiones -> result() as $row2)
				{
					$contador=0;
					if($row1->numinscripcion==$row2->numinscripcion)
					{
						foreach ($estudiantes -> result() as $row3)
						{
							if($row1->ciestudiante==$row3->ciestudiante)
							{
								
								if($row2->pension1=='debe')
								{
									$contador++;
								}
								if($row2->pension2=='debe')
								{
									$contador++;
								}
								if($row2->pension3=='debe')
								{
									$contador++;
								}
								if($row2->pension4=='debe')
								{
									$contador++;
								}
								if($row2->pension5=='debe')
								{
									$contador++;
								}
								if($row2->pension6=='debe')
								{
									$contador++;
								}
								if($row2->pension7=='debe')
								{
									$contador++;
								}
								if($row2->pension8=='debe')
								{
									$contador++;
								}
								if($row2->pension9=='debe')
								{
									$contador++;
								}
								if($row2->pension10=='debe')
								{
									$contador++;
								}
								
								
								
								$pdf->Cell(40,5,$row1->ciestudiante,1);
								$pdf->Cell(40,5,$row3->nombres,1);
								$pdf->Cell(40,5,$row3->apellidos,1);
								$pdf->Cell(40,5,'debe '.$contador.' pensiones',1);
								
								$pdf->Ln();   //salto de linea
							}
						}
					}
						
						
				
					
				}
					
			}  
			$pdf->Ln(); 
		
		}
		else
		{
			$pdf->Cell(180,6,'NO EXISTEN DATOS',1,1,'C');
		}
			
			$pdf->Output();
	
?>
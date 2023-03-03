<?php
    require('../fpdf/fpdf185/fpdf.php');
    require('../controlador/controlador_retos.php');

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('helvetica','',16);

    $controlador=new controladorRetos();
    $resultado=$controlador->listarPdf();
    foreach ($resultado as $mostrar) {
        $pdf->Cell(0, 10, $mostrar['nombreCat'], 0, 1, 'C');
        $pdf->Ln();
        $pdf->Cell(0, 10, $mostrar['nombreReto'], 1);
        $pdf->Ln();
        $pdf->Cell(0, 10, $mostrar['descripcion'], 1);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'El reto comienza: '.$mostrar['fechaInicioReto'].'', 1);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'El reto finaliza: '.$mostrar['fechaFinReto'].'', 1);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Publicado: '.$mostrar['publicado'].'', 1);
        $pdf->AddPage();
    };

    $pdf->Output();
?>
<?php
require('../fpdf186/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        // Arial bold 1
        $this->SetFont('Arial', 'B', 11);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70, 10, utf8_decode('Reporte NICOPX'), 0, 0, 'C');
        // Salto de línea
        $this->Ln(20);

        $this->cell(7, 10, 'ID', 1, 0, 'C', 0);
        $this->cell(40, 10, 'Nombre Pelicula', 1, 0, 'C', 0);
        $this->cell(40, 10, 'Descripcion', 1, 0, 'C', 0);
        $this->cell(30, 10, 'Estado', 1, 0, 'C', 0);
        $this->cell(30, 10, 'Fecha Creacion', 1, 1, 'C', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}



$pdo = new PDO("mysql:host=localhost;dbname=peliculaspdo", "root", "");

// Configurar el manejo de errores y excepciones.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare("SELECT * FROM pelicula");
$consulta->execute();
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $estado;
    if ($row["estado"] == 1) {
        $estado = "Activo";
    } else {
        $estado = "Inactivo";
    }
    $pdf->cell(7, 10, $row["idPelicula"], 1, 0, 'C', 0);
    $pdf->cell(40, 10, $row["nombrePelicula"], 1, 0, 'C', 0);
    $pdf->cell(40, 10, $row["descripcionPelicula"], 1, 0, 'C', 0);
    $pdf->cell(30, 10, $estado, 1, 0, 'C', 0);
    $pdf->cell(30, 10, $row["fecha"], 1, 1, 'C', 0);
}
$pdf->Output();

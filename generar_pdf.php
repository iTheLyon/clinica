<?php
require 'config.php';
require 'fpdf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    // Consulta para obtener los datos del paciente
    $stmt = $conn->prepare("SELECT * FROM pacientes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Crear el PDF usando FPDF
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 10, 'Ficha Tecnica del Paciente', 0, 1, 'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(50, 10, 'ID:', 0, 0);
        $pdf->Cell(140, 10, $row['id'], 0, 1);

        $pdf->Cell(50, 10, 'Nombre:', 0, 0);
        $pdf->Cell(140, 10, $row['nombres'], 0, 1);

        $pdf->Cell(50, 10, 'Apellidos:', 0, 0);
        $pdf->Cell(140, 10, $row['apellidos'], 0, 1);

        $pdf->Cell(50, 10, 'Edad:', 0, 0);
        $pdf->Cell(140, 10, $row['edad'], 0, 1);

        // Salida del PDF
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="ficha_paciente_' . $row['id'] . '.pdf"');
        $pdf->Output();
    } else {
        http_response_code(404);
        echo 'Paciente no encontrado';
    }
    $stmt->close();
    $conn->close();
}
?>

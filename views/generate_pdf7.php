<?php

include '../controllers/dateC.php';
$id_film = $_GET["id_film"];
$datesC = new datesC();

$listdateC = $datesC->joinfilm($id_film);

if (isset($_POST["type"]) && $_POST["type"] === "pdf") {
    require 'vendor/autoload.php';
    require 'vendor/tecnickcom/tcpdf/tcpdf.php';
    error_reporting(0);
    ob_start();

    // Create new PDF instance
    $pdf = new TCPDF();

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Gachita Zied');
    $pdf->SetTitle('Date Table PDF');
    $pdf->SetSubject('Date Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">Date Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Image</th><th>Nom</th><th>Lieu</th></tr></thead>';
    $html .= '<tbody>';

    foreach ($listdateC as $dates) {
        $html .= '<tr>';
        $html .= '<td>' . $dates['id_date'] . '</td>';
        $html .= '<td>' . $dates['date_date'] . '</td>';
        $html .= '<td>' . $dates['heure_date'] . '</td>';
        $html .= '<td>' . $dates['id_film'] . '</td>';
       
        $html .= '</tr>';
    }

    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('Date_table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

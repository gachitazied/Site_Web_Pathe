<?php

include '../controllers/cinemaC.php';
$cinemas = new cinemasC();
$listeUserC = $cinemas->affichercinema();

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
    $pdf->SetTitle('Cinema Table PDF');
    $pdf->SetSubject('Cinema Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">Cinema Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Image</th><th>Nom</th><th>Lieu</th></tr></thead>';
    $html .= '<tbody>';

    foreach ($listeUserC as $cinemas) {
        $html .= '<tr>';
        $html .= '<td>' . $cinemas['id_cinema'] . '</td>';
        $html .= '<td>' . $cinemas['img_cinema'] . '</td>';
        $html .= '<td>' . $cinemas['nom_cinema'] . '</td>';
        $html .= '<td>' . $cinemas['lieu_cinema'] . '</td>';
        $html .= '</tr>';
    }

    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('cinema_table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

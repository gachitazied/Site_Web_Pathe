<?php

include '../controllers/offreC.php';

$offres = new offresC();
$listeoffreC = $offres->afficheroffre();

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
    $pdf->SetTitle('Offre Table PDF');
    $pdf->SetSubject('Offre Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">Offre Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Image</th><th>Nom</th><th>Description</th><th>Date</th></tr></thead>';
    $html .= '<tbody>';
    
    foreach ($listeoffreC as $offres) {
        $html .= '<tr>';
        $html .= '<td>' . $offres['id_offre'] . '</td>';
        $html .= '<td>' . $offres['img_offre'] . '</td>';
        $html .= '<td>' . $offres['nom_offre'] . '</td>';
        $html .= '<td>' . $offres['desc_offre'] . '</td>';
        $html .= '<td>' . $offres['date_offre'] . '</td>';
        $html .= '</tr>';
    }
    
    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('Offre_Table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

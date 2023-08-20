<?php

include '../controllers/reponseC.php';
$reponses = new reponsesC();
$listeReponseC = $reponses->afficherreponse();

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
    $pdf->SetTitle('Reponse Table PDF');
    $pdf->SetSubject('Reponse Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">Reponse Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Email</th><th>Réponse</th><th>ID Contact</th></tr></thead>';
    $html .= '<tbody>';
    
    foreach ($listeReponseC as $reponses) {
        $html .= '<tr>';
        $html .= '<td>' . $reponses['id_reponse'] . '</td>';
        $html .= '<td>' . $reponses['email_reponse'] . '</td>';
        $html .= '<td>' . $reponses['reponse_reponse'] . '</td>';
        $html .= '<td>' . $reponses['id_contact'] . '</td>';
        $html .= '</tr>';
    }
    
    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('Reponse_Table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

<?php

include '../controllers/inscriC.php';

$inscris = new inscrisC();
$listeInscriC = $inscris->afficherinscri();

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
    $pdf->SetTitle('Inscription Table PDF');
    $pdf->SetSubject('Inscription Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">Inscription Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Nombre</th><th>Message</th><th>Nom Offre</th><th>ID Offre</th></tr></thead>';
    $html .= '<tbody>';
    
    foreach ($listeInscriC as $inscris) {
        $html .= '<tr>';
        $html .= '<td>' . $inscris['id_inscri'] . '</td>';
        $html .= '<td>' . $inscris['nom_inscri'] . '</td>';
        $html .= '<td>' . $inscris['prenom_inscri'] . '</td>';
        $html .= '<td>' . $inscris['email_inscri'] . '</td>';
        $html .= '<td>' . $inscris['telephone_inscri'] . '</td>';
        $html .= '<td>' . $inscris['nombre_inscri'] . '</td>';
        $html .= '<td>' . $inscris['message_inscri'] . '</td>';
        $html .= '<td>' . $inscris['nom_offre'] . '</td>';
        $html .= '<td>' . $inscris['id_offre'] . '</td>';
        $html .= '</tr>';
    }
    
    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('Inscription_Table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

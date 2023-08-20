<?php

include '../controllers/contactC.php';
$contacts = new contactsC();
$listeContactC = $contacts->affichercontact();

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
    $pdf->SetTitle('Contact Table PDF');
    $pdf->SetSubject('Contact Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">Contact Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Image</th><th>Nom</th><th>Lieu</th></tr></thead>';
    $html .= '<tbody>';

    foreach ($listeContactC as $contacts) {
        $html .= '<tr>';
        $html .= '<td>' . $contacts['id_contact'] . '</td>';
        $html .= '<td>' . $contacts['nom_contact'] . '</td>';
        $html .= '<td>' . $contacts['prenom_contact'] . '</td>';
        $html .= '<td>' . $contacts['email_contact'] . '</td>';
        $html .= '<td>' . $contacts['message_contact'] . '</td>';
        $html .= '</tr>';
    }

    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('contact_table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

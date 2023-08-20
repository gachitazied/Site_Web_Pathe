<?php

include '../controllers/userC.php';
$users = new usersC();

$listeUserC = $users->afficheruser();

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
    $pdf->SetTitle('User Table PDF');
    $pdf->SetSubject('User Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">User Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Numéro de téléphone</th><th>Adresse</th><th>Rôle</th><th>Email</th><th>Mot de passe</th></tr></thead>';
    $html .= '<tbody>';
    
    foreach ($listeUserC as $users) {
        $html .= '<tr>';
        $html .= '<td>' . $users['id_user'] . '</td>';
        $html .= '<td>' . $users['nom_user'] . '</td>';
        $html .= '<td>' . $users['prenom_user'] . '</td>';
        $html .= '<td>' . $users['num_tel'] . '</td>';
        $html .= '<td>' . $users['adresse_user'] . '</td>';
        $html .= '<td>' . $users['role'] . '</td>';
        $html .= '<td>' . $users['email_user'] . '</td>';
        $html .= '<td>' . $users['password'] . '</td>';
        $html .= '</tr>';
    }
    
    $html .= '</tbody></table>';

    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('User_table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

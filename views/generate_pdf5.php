<?php


include '../controllers/reservationC.php';




$reservations = new reservationsC();

$listeReservationsC = $reservations->afficherreservation();

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
    $pdf->SetTitle('Reservation Table PDF');
    $pdf->SetSubject('Reservation Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">Reservation Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Image</th><th>Nom</th><th>Lieu</th></tr></thead>';
    $html .= '<tbody>';

    foreach ($listeReservationsC as $reservations)  {
        $html .= '<tr>';
        $html .= '<td>' . $reservations['id_reservation'] . '</td>';
        $html .= '<td>' . $reservations['film_reservation'] . '</td>';
        $html .= '<td>' . $reservations['date_reservation'] . '</td>';
        $html .= '<td>' . $reservations['heure_reservation'] . '</td>';
        $html .= '<td>' . $reservations['place_reservation'] . '</td>';
        $html .= '<td>' . $reservations['email_reservation'] . '</td>';

        $html .= '</tr>';
    }

    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('Reservation_Table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

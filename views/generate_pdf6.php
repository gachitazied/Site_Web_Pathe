<?php
include '../controllers/filmC.php';
$id_cinema = $_GET["id_cinema"];
$filmsC = new filmsC();


$listfilmC = $filmsC->joincinema($id_cinema);


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
    $pdf->SetTitle('Film Table PDF');
    $pdf->SetSubject('Film Table');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Output the HTML content with custom design
    $html = '<h1 style="text-align: center;">Film Table</h1>';
    $html .= '<table border="1" cellpadding="5" style="width: 100%;">';
    $html .= '<thead><tr><th>ID</th><th>Image</th><th>Nom</th><th>Lieu</th></tr></thead>';
    $html .= '<tbody>';

    foreach ($listfilmC as $filmsC)  {
        $html .= '<tr>';
        $html .= '<td>' . $filmsC['id_film'] . '</td>';
        $html .= '<td>' . $filmsC['img_film'] . '</td>';
        $html .= '<td>' . $filmsC['nom_film'] . '</td>';
        $html .= '<td>' . $filmsC['desc_film'] . '</td>';
        $html .= '<td>' . $filmsC['genre_film'] . '</td>';
        $html .= '<td>' . $filmsC['dure_film'] . '</td>';
        $html .= '<td>' . $filmsC['salle_film'] . '</td>';
        $html .= '<td>' . $filmsC['id_cinema'] . '</td>';
        $html .= '</tr>';
    }

    $html .= '</tbody></table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the PDF for download
    $pdf->Output('Film_Table.pdf', 'D');
    exit;
    ob_end_clean(); // Clear output buffer
}
?>

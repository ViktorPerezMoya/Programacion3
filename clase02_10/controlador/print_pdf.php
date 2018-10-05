<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Include the main TCPDF library (search for installation path).
require_once('../library/tcpdf/tcpdf.php');
require_once '../dao/ArticuloDAO.php';
require_once '../modelo/Articulo.php';

$artDao = new ArticuloDAO();
$articulos = $artDao->getAll(); 

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');




// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();
// create some HTML content
$html = '<html><head><title>PDF</title><meta charset="utf-8"/>'
        . '<style>'
        . 'h1{color: red;}'
        . 'th{padding-left:5px;}'
        . 'th{background-color: gray;color: white;padding-bottom: 5px;}'
        . '</style>'
        . '</head><body>'
        . '<h1>Articulos</h1>'
        . '<table>'
        . '<thead>'
        . '<tr>'
        . '<th>ID</th>'
        . '<th>DESCRIPCIÓN</th>'
        . '<th>PRECIO</th>'
        . '</tr>'
        . '</thead>'
        . '<tbody>';
foreach ($articulos as $a) {
   $html .= '<tr>'
           . '<td>'.$a->getId().'</td>'
           . '<td>'.$a->getDescripcion().'</td>'
           . '<td>'.$a->getPrecio().'</td>'
           . '</tr>'; 
}

$html .= '</tbody>'
        . '</table>'
        . '</body>'
        . '</html>';

$pdf->writeHTML($html, true, false, true, false, '');

//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

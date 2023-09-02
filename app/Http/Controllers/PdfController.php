<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generatePdf()
    {

        $data = [
            'title' => 'Tabla Dinámica en PDF',
            'datos' => [
                [
                    'Entrada'=>'aaaaaaaa',
                    'HBL'=>'aaaaaaaa',
                    'Marca'=>'aaaaaaaa',
                    'Mercancia'=>'aaaaaaaa',
                    'Embalaje'=>'aaaaaaaa',
                    'Bultos'=>'aaaaaaaa',
                    'Peso'=>'aaaaaaaa',
                    'Volumen'=>'aaaaaaaa',
                    'Faltan'=>'aaaaaaaa',
                    'Sobran'=>'aaaaaaaa',
                    'Averiados'=>'aaaaaaaa',
                    'UN'=>'aaaaaaaa',
                    'IMDG'=>'aaaaaaaa',
                    'SGA'=>'aaaaaaaa',
                    'Obs'=>'aaaaaaaa',
                ],
                [
                    'Entrada'=>'aaaaaaaa',
                    'HBL'=>'aaaaaaaa',
                    'Marca'=>'aaaaaaaa',
                    'Mercancia'=>'aaaaaaaa',
                    'Embalaje'=>'aaaaaaaa',
                    'Bultos'=>'aaaaaaaa',
                    'Peso'=>'aaaaaaaa',
                    'Volumen'=>'aaaaaaaa',
                    'Faltan'=>'aaaaaaaa',
                    'Sobran'=>'aaaaaaaa',
                    'Averiados'=>'aaaaaaaa',
                    'UN'=>'aaaaaaaa',
                    'IMDG'=>'aaaaaaaa',
                    'SGA'=>'aaaaaaaa',
                    'Obs'=>'aaaaaaaa',
                ],
                [
                    'Entrada'=>'aaaaaaaa',
                    'HBL'=>'aaaaaaaa',
                    'Marca'=>'aaaaaaaa',
                    'Mercancia'=>'aaaaaaaa',
                    'Embalaje'=>'aaaaaaaa',
                    'Bultos'=>'aaaaaaaa',
                    'Peso'=>'aaaaaaaa',
                    'Volumen'=>'aaaaaaaa',
                    'Faltan'=>'aaaaaaaa',
                    'Sobran'=>'aaaaaaaa',
                    'Averiados'=>'aaaaaaaa',
                    'UN'=>'aaaaaaaa',
                    'IMDG'=>'aaaaaaaa',
                    'SGA'=>'aaaaaaaa',
                    'Obs'=>'aaaaaaaa',
                ],
                [
                    'Entrada'=>'aaaaaaaa',
                    'HBL'=>'aaaaaaaa',
                    'Marca'=>'aaaaaaaa',
                    'Mercancia'=>'aaaaaaaa',
                    'Embalaje'=>'aaaaaaaa',
                    'Bultos'=>'aaaaaaaa',
                    'Peso'=>'aaaaaaaa',
                    'Volumen'=>'aaaaaaaa',
                    'Faltan'=>'aaaaaaaa',
                    'Sobran'=>'aaaaaaaa',
                    'Averiados'=>'aaaaaaaa',
                    'UN'=>'aaaaaaaa',
                    'IMDG'=>'aaaaaaaa',
                    'SGA'=>'aaaaaaaa',
                    'Obs'=>'aaaaaaaa',
                ],
                [
                    'Entrada'=>'aaaaaaaa',
                    'HBL'=>'aaaaaaaa',
                    'Marca'=>'aaaaaaaa',
                    'Mercancia'=>'aaaaaaaa',
                    'Embalaje'=>'aaaaaaaa',
                    'Bultos'=>'aaaaaaaa',
                    'Peso'=>'aaaaaaaa',
                    'Volumen'=>'aaaaaaaa',
                    'Faltan'=>'aaaaaaaa',
                    'Sobran'=>'aaaaaaaa',
                    'Averiados'=>'aaaaaaaa',
                    'UN'=>'aaaaaaaa',
                    'IMDG'=>'aaaaaaaa',
                    'SGA'=>'aaaaaaaa',
                    'Obs'=>'aaaaaaaa',
                ],
            ],
        ];
        $pdf = PDF::loadView('pdf', $data)->setPaper('a4');
        $dompdf = $pdf->getDomPDF();
        $dompdf->set_option('isFontSubsettingEnabled', true);

        $canvas = $dompdf->getCanvas();
        $width = $canvas->get_width();
        $height = $canvas->get_height();

        
        // Get the image from a local file
        $path = url('https://refis360movildev.s3.us-west-1.amazonaws.com/PlantillasImg/PlantillaPDF_1.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $imagePath = 'data:image/' . $type . ';base64,' . base64_encode($data);
        
        $canvas->image($imagePath, 0, 0, $width, $height);
        
        $path2 = url('https://refis360.s3.amazonaws.com/resources/Removal-577.png');
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $base64 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
        
        $canvas->image($base64, 400, 130, 205, 170);
        
        $canvas->page_script('
            $font = $fontMetrics->get_font("Source Sans Pro", "bold");
            $pdf->text(530, 823, " $PAGE_NUM de $PAGE_COUNT", $font, 8, array(0,0,0));
            $pdf->text(165, 823, "Comercializadora la Junta, S.A. de C.V., Todos los Derechos Reservados", $font, 8, array(0,0,0));
            $pdf->text(140, 25, "Refis360 Móvil", $font, 10, array(0,0,0));
            $pdf->text(140, 45, "Comercializadora la Junta, S.A. de C.V.", $font, 10, array(0,0,0));
            if ($PAGE_NUM !== 1) {
                $image = \'PlantillaPDF_1.png\';
                $pdf->image($image, 0, 0, 595.28, 841.89, "P");
            }
        ');

        return $pdf->stream('result.pdf');

    }
}
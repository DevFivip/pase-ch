<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use DateTime;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use LaravelQRCode\Facades\QRCode;


class MakePdfController extends Controller
{
    //

    public function dimension($proporcion)
    {
        $width = 100 * $proporcion;
        $height = ($width + ($width * 0.30));
        return [$width, $height];
    }

    public function make($id)
    {
        $persona = Persona::find($id);

        $fecha_primera_dosis = (new DateTime($persona->fecha_primera))->format('d/m/Y');
        $fecha_segunda_dosis = (new DateTime($persona->fecha_primera))->modify('+ 41 day')->format('d/m/Y');
        $fecha_tercera_dosis = (new DateTime($persona->fecha_primera))->modify('+ 100 day')->format('d/m/Y');

        $lugar = $persona->sitio;
        $centro_vacunacion = [
            'iquique' => 'Centro de Vacunacion iquique - iquique iquique',
            'valparaiso' => 'Centro de Vacunacion valparaiso',
            'santiago' => 'Centro de Vacunacion Santiago Santiago Santiago',
        ];

        $pdf = new FPDI();

        $pdf->AddPage();
        // $pdf->SetAutoPageBreak(false);

        $pdf->setSourceFile(__DIR__ . '/../../../resources/pdf/base-vinha-2.pdf');

        $tplIdx = $pdf->importPage(1);

        $dimesion = $this->dimension(2.34);
        $pdf->useTemplate($tplIdx, 1, 1, $dimesion[0], $dimesion[1], true);

        $pdf->SetTextColor(67, 135, 68);

        //nombre
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Rect(27, 49, 68, 5, 'F');

        $pdf->SetFont('Arial', 'B', '14');
        $pdf->SetXY(27, 47.7);
        $pdf->Write(8, strtoupper($persona->apellido_primer . " " . $persona->apellido_segundo));

        // Apellidos
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Rect(27, 64, 68, 5, 'F');

        $pdf->SetFont('Arial', 'B', '14');
        $pdf->SetXY(27, 62.8);
        $pdf->Write(8, strtoupper($persona->nombre_primer . " " . $persona->nombre_segundo));

        // Tipo & Documento
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Rect(27, 80, 60, 5, 'F');

        $pdf->SetFont('Arial', 'B', '14');
        $pdf->SetXY(27, 78.8);
        $documento = ($persona->tipo_documento === 'RUN') ? number_format($persona->nro_documento, 0, ",", ".") . '-8' : number_format($persona->nro_documento, 0, ",", ".");
        $pdf->Write(8, strtoupper($persona->tipo_documento . ": " . $documento));

        // Fecha de Nacimiento
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Rect(27, 95, 60, 5, 'F');

        $fecha_nacimiento = (new DateTime($persona->fecha_nacimiento))->format('d/m/Y');
        $pdf->SetFont('Arial', 'B', '14');
        $pdf->SetXY(27.7, 93.7);
        $pdf->Write(8, strtoupper($fecha_nacimiento));


        /**
         * Fechas de vacunacion
         * 
         */
        $pdf->SetTextColor(0, 0, 0);


        $pdf->SetFont('Arial', 'B', '12');
        $pdf->SetXY(133.9, 126);
        $pdf->Write(8, strtoupper($fecha_primera_dosis));

        /**
         * SITIOS DE VACUNACION
         */
        $pdf->SetFont('Arial', 'B', '12');
        $pdf->SetXY(133.9, 137.3);
        $pdf->MultiCell(80, 5, $centro_vacunacion[$lugar], 0, 'L');



        $pdf->SetFont('Arial', 'B', '12');
        $pdf->SetXY(133.9, 168);
        $pdf->Write(8, strtoupper($fecha_segunda_dosis));

        /**
         * SITIOS DE VACUNACION
         */
        $pdf->SetFont('Arial', 'B', '12');
        $pdf->SetXY(133, 180);
        $pdf->MultiCell(80, 5, $centro_vacunacion[$lugar], 0, 'L');




        $pdf->SetFont('Arial', 'B', '12');
        $pdf->SetXY(133, 194 + 17);
        $pdf->Write(8, strtoupper($fecha_tercera_dosis));

        /**
         * SITIOS DE VACUNACION
         */
        $pdf->SetFont('Arial', 'B', '12');
        $pdf->SetXY(133.7, 214 + 9);
        $pdf->MultiCell(80, 5, $centro_vacunacion[$lugar], 0, 'L');





        /** */

        $link = env('APP_URL') . '?ff=' . $persona->qr;

        QRCode::URL($link)->setSize(10)->setMargin(0)->setOutfile('../storage/app/public/qr/' . $id . '.png')->png();


        $pdf->Image('../storage/app/public/qr/' . $id . '.png', 153, 45.8, 52, 52);
        return $pdf->Output(strtoupper($persona->nombre_primer . " " . $persona->nombre_segundo) . '.pdf', 'I');
    }
}

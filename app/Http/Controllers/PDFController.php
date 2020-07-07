<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{

    public function construct()
    {
        $this->middleware('auth');
    }

    public function getFile($filename)
    {
        $file = storage_path('app/pdfs/') . $filename . '.pdf';

        if (file_exists($file)) {
            //je ne connais pas ce type de fichier & donc je force le téléchargement
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment'

            ];

            return response()->download($file, 'Ca fonctionne', $headers);
        } else {
            abort(404, 'File not found!');
        }
    }
}

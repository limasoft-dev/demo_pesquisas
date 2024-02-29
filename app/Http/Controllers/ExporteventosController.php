<?php

namespace App\Http\Controllers;

use App\Exports\EventosExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExporteventosController extends Controller
{
    public function export()
    {
        return Excel::download(new EventosExport, 'eventos.xlsx');
    }
}

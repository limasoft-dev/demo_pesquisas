<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EventosImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ImporteventosController extends Controller
{
    public function index()
    {
        return view('eventos.import');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new EventosImport(), $request->file('file'));

        return redirect()->back()->with('status', 'Eventos importados com sucesso!');
    }

    public function limpar()
    {
        DB::table('eventos')->truncate();

        return redirect()->back()->with('status', 'Tabela limpa com sucesso!');
    }
}

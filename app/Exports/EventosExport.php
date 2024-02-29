<?php

namespace App\Exports;

use App\Models\Evento;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EventosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Evento::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'nome',
            'data',
            'localidade',
            'tipo',
            'ativo'
        ];
    }
}


<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Evento;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EventosImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row)
        {
            Evento::create([
                'nome' => $row['nome'],
                'data' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data'])),
                'localidade' => $row['localidade'],
                'tipo' => $row['tipo'],
                'ativo' => $row['ativo']

            ]);
        }
    }
}

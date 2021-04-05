<?php

namespace App\Exports;

use App\Cadastro;
use Maatwebsite\Excel\Concerns\FromCollection;

class CadastrosFromView implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cadastro::all();
    }
}

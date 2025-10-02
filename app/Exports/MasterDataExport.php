<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MasterDataExport implements FromView
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        // Pastikan view dan variabel sama dengan yang di index
        return view('masterdata.export', [
            'data' => $this->data
        ]);
    }
}

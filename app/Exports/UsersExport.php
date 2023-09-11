<?php

namespace App\Exports;

use App\Models\Order;
use App\Models\User;
use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    // /**
    //  * @return \Illuminate\Support\Collection
    //  */
    // public function collection()
    // {
    //     return User::all();
    // }

    // public function array(): array
    // {
    //     return $this->data->toArray();
    // }
    // public function query()
    // {
    //     return Order::where('amount', '>', 20);
    // }

    public function view(): View
    {
        return view('user', ['datas' => $this->data]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Models\Order;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export()
    {
        $users = User::all();
        return Excel::download(new UsersExport($users), 'users.xlsx');
    }
    public function orderExport()
    {
        $order = Order::all();
        return Excel::download(new OrderExport($order), 'orders.xlsx');
    }
}

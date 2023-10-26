<?php

namespace App\Http\Controllers\crm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowAdminDashboardController extends Controller
{
    public function __invoke()
    {
        return view('crm.dashboard');
    }
}

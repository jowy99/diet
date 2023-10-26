<?php

namespace App\Http\Controllers\crm;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ShowAdminDashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('crm.dashboard');
    }
}

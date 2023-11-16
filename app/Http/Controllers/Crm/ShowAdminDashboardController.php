<?php
declare(strict_types=1);

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ShowAdminDashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('dashboard');
    }
}

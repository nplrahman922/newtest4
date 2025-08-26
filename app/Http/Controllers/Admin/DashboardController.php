<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia; // Jangan lupa import Inertia

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard admin.
     */
    public function index()
    {
        // 'Admin/Dashboard' merujuk ke path file:
        // resources/js/Pages/Admin/Dashboard.vue
        return Inertia::render('Admin/Dashboard');
    }
}

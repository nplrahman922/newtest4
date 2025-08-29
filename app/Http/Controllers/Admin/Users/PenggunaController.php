<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PenggunaController extends Controller
{
    public function pengguna()
    {
        return Inertia::render('Admin/Users/Pengguna');
    }
}

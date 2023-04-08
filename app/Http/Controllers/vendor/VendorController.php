<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:vendor']);
    }

    public function index()
    {
        return view('vendor.dashboard');
    }
}

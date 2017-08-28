<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Http\Requests;

class UsersController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users');
//        return view('layouts.dashboard');
    }
}

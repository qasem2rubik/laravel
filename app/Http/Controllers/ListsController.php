<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListsController extends Controller
{
    public function getIndex()
    {
        return view('lists.index');
    }
    public function getCreate()
    {
        return view('lists.create');
    }
    public function postStore()
    {
        return view('lists.store');
    }
}

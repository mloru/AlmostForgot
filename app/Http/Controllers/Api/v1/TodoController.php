<?php

namespace App\Http\Controllers\Api\v1;


use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }
}

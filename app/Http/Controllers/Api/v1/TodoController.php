<?php declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }
}

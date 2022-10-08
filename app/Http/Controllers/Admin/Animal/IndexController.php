<?php

namespace App\Http\Controllers\Admin\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $animals = Animal::get();
        return view('admin.animal.index', compact('animals'));
    }
}

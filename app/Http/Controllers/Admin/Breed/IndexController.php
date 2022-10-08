<?php

namespace App\Http\Controllers\Admin\Breed;

use App\Http\Controllers\Controller;
use App\Models\Breed;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $breeds = Breed::get();

        return view('admin.breed.index', compact('breeds'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Breed;

use App\Http\Controllers\Controller;
use App\Models\Breed;

class ShowController extends Controller
{
    public function __invoke(Breed $breed)
    {
        return view('admin.breed.show', compact('breed'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;

class ShowController extends Controller
{
    public function __invoke(Animal $animal)
    {
        return view('admin.animal.show', compact('animal'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Breed;

use App\Http\Controllers\Controller;
use App\Models\Breed;

class EditController extends Controller
{
    public function __invoke(Breed $breed)
    {
        $kinds = Breed::getKinds();
        return view('admin.breed.edit', compact('breed', 'kinds'));
    }
}

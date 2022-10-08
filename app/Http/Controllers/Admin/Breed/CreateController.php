<?php

namespace App\Http\Controllers\Admin\Breed;

use App\Http\Controllers\Controller;
use App\Models\Breed;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $kinds = Breed::getKinds();
        return view('admin.breed.create', compact('kinds'));
    }
}

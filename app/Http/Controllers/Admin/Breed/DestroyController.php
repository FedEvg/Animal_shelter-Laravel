<?php

namespace App\Http\Controllers\Admin\Breed;

use App\Http\Controllers\Controller;
use App\Models\Breed;

class DestroyController extends Controller
{
    public function __invoke(Breed $breed)
    {
        $breed->delete();
        return redirect()->route('admin.breed.index');
    }
}

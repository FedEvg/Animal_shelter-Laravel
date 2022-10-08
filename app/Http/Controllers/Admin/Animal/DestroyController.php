<?php

namespace App\Http\Controllers\Admin\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;

class DestroyController extends Controller
{
    public function __invoke(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('admin.animal.index');
    }
}

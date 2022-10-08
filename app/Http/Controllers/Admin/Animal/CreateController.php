<?php

namespace App\Http\Controllers\Admin\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Breed;

class CreateController extends Controller
{
    public function __invoke()
    {
        $breeds = Breed::get();
        $genders = Animal::getGender();
        $sizes = Animal::getSizes();
        $sterilizations = Animal::getSterilization();
        return view('admin.animal.create', compact( 'breeds', 'genders', 'sizes', 'sterilizations'));
    }
}

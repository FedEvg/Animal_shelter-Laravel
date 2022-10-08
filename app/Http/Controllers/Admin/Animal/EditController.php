<?php

namespace App\Http\Controllers\Admin\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Breed;

class EditController extends Controller
{
    public function __invoke(Animal $animal)
    {
        $breeds = Breed::get();
        $genders = Animal::getGender();
        $sizes = Animal::getSizes();
        $sterilizations = Animal::getSterilization();
        return view('admin.animal.edit', compact('animal', 'breeds', 'genders', 'sizes', 'sterilizations'));
    }
}

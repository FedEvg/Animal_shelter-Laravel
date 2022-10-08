<?php

namespace App\Http\Controllers\Admin\Breed;

use App\Http\Controllers\Controller;
use App\Http\Requests\Breed\UpdateRequest;
use App\Models\Breed;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Breed $breed)
    {
        $data = $request->validated();

        $breed->update($data);

        return redirect()->route('admin.breed.index');
    }
}

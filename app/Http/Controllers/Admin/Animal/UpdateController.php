<?php

namespace App\Http\Controllers\Admin\Animal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Animal\UpdateRequest;
use App\Models\Animal;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Animal $animal)
    {
        $data = $request->validated();

        $animal->update($data);

        return redirect()->route('admin.animal.index');
    }
}

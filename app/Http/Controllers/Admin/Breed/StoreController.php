<?php

namespace App\Http\Controllers\Admin\Breed;

use App\Http\Controllers\Controller;
use App\Http\Requests\Breed\StoreRequest;
use App\Models\Breed;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Breed::query()->firstOrCreate($data);

        return redirect()->route('admin.breed.index');
    }
}

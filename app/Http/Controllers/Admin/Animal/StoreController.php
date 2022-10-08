<?php

namespace App\Http\Controllers\Admin\Animal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Animal\StoreRequest;
use App\Models\Animal;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Animal::query()->firstOrCreate($data);

        return redirect()->route('admin.animal.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Domain\UseCases\TempStore;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TempController extends Controller
{
    public function temp()
    {
        return view('temp');
    }

    public function store(Request $request, TempStore $useCase)
    {
        $useCase($request->get('free_word'));

        return redirect()->route('temp');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Engineer;
use Illuminate\Routing\Controller as BaseController;

class SampleController extends BaseController
{
    public function __invoke()
    {
        $engineer = new Engineer;
        $headers = $engineer->headerListScreen();
        $engineers = $engineer->listScreenWithPaginate(20);

        return view('sample.index', compact('headers', 'engineers'));
    }
}

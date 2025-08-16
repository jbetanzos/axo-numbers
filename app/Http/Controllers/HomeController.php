<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|numeric',
        ]);

        $start = $request->input('number');
        $rows = 10;

        $pyramid = [];

        for ($i = 0; $i < $rows; $i++) {
            $n = ($i + 1) * $start;
            $row = '';

            for ($j = $n; $j >= $start; $j -= $start) {
                $row .= $j;
            }

            for ($j = 2 * $start; $j <= $n; $j += $start) {
                $row .= $j;
            }

            $pyramid[] = $row;
        }

        return view('welcome', [
            'pyramid' => $pyramid
        ]);
    }
}

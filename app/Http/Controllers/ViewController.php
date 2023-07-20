<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function master()
    {
        $data = [
            'title' => 'title',
            'msg' => 'こんにちは、世界！',
        ];
        return view('view.master', $data);
    }

    public function comp()
    {
        $data = [
            ''
        ]
    }
}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello()
    {
        // return view('home/hello')->with('id', $id);
        $data = config('admin.admin');
        $data = $data[0];
        $user = ['abc@ac.com','ABC', 'XYZ'];
        return view('welcome.hello', compact('data', 'user'));
    }

    public function insert(Request $request)
    {
        # code...
    }

    public function edit(Request $request)
    {
        # code...
    }
    public function read(Request $request)
    {
        # code...
    }
    public function delete(Request $request)
    {
        # code...
    }
}

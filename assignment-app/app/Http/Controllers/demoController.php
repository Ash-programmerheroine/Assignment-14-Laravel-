<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function demoAction(Request $request){
        $name = $request->input('name');
        $userAgent = $request->header('User-Agent');
        $page = $request->query('page', null);
        $data = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ];
        
        return response()->json($data);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $file->move(public_path('uploads'), $file->getClientOriginalName());
        }
        $rememberToken = $request->cookie('remember_token', null);
                
    }






}

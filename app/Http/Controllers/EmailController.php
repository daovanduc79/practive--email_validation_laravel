<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    public function validationEmail(Request $request)
    {
        $email = $request->email;

        $isEmail = true;

        if (empty($email) or !filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $isEmail = false;
        }

        return view('index', compact('isEmail'));
    }
}

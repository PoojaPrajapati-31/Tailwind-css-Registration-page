<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Retrieve the form data
        $name = $request->input('name');
        $last_name = $request->input('last_name');

        // Perform necessary actions with the form data
        // For example, save the data to the database

        // Redirect back or to another page
        return redirect()->back()->with('success', 'Form submitted successfully.');
    }
}

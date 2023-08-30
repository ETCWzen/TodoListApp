<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function saveTask(Request $request)
    {
        // Retrieve the submitted data from the form
        $highTask = $request->input('highTask');
        $mediumTask = $request->input('mediumTask');
        $lowTask = $request->input('lowTask');

        // You can now do whatever you want with the submitted data
        // For now, we'll just pass the data back to the view
        return view('/list', compact('highTask', 'mediumTask', 'lowTask'));
    }
}

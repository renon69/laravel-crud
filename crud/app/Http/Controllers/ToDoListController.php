<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    function saveTask(Request $request) {
        print($request->task);
    }
}

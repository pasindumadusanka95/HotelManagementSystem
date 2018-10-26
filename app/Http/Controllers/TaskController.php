<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Task;

class TaskController extends Controller
{
    $tasks=  Task::all();
    //
}

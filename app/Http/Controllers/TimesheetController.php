<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    // Show Create Form
    public function timesheetCreate()
    {
        return view('layout.timesheet.create');
    }
}

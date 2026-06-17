<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    // Show Create Form
    public function timesheetCreate()
    {
        // get current Carbon Date
        $carbonDate = Carbon::now();
        // get current year
        $currentYear = $carbonDate->year;

        // find pasquetta
        $smallEaster = $this->getSmallEaster($currentYear);
        dd($smallEaster);

        return view('layout.timesheet.create');
    }

    public function getSmallEaster(int $carbonYear): object
    {
        // find easter
        $easter = Carbon::createFromTimestamp(easter_date($carbonYear), 'UTC')
            ->setTimezone('Europe/Rome');
        // get smallEaster adding a carbon day
        $smallEaster = $easter->addDay();
        // return 
        return $smallEaster;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != "user") {
                return redirect("/");
            }
            $reportType = $request->query('reportType');
            $startDate = $request->query('start');
            $endDate = $request->query('ends');

            // Check if start_date and end_date are set, otherwise use default date range
            if ($startDate && $endDate) {
                $startDate = date('Y-m-d 00:00:00', strtotime($startDate)); // Start of the day
                $endDate = date('Y-m-d 23:59:59', strtotime($endDate)); // End of the day
            } else {
                // If no dates are provided, default to the current month
                $startDate = date('Y-m-01 00:00:00'); // First day of the current month
                $endDate = date('Y-m-t 23:59:59'); // Last day of the current month
            }

            $prefix = "";
            $total = 0;

            if ($reportType == 'monthly') {
                $prefix = "Monthly";
                $labels = [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                ];

                // Modify the query to filter based on the start and end dates
                $withdrawals = DB::table('withdrawals')
                    ->where('userID', '=', $user['userID'])
                    ->whereBetween('created_at', [$startDate, $endDate]) // Filter by date range
                    ->selectRaw('MONTH(created_at) as month, SUM(total) as total')
                    ->groupBy(DB::raw('MONTH(created_at)'))
                    ->pluck('total', 'month');

                // Populate data for each month (default to 0 if no data)
                $data = array_map(function ($month) use ($withdrawals) {
                    return $withdrawals[$month] ?? 0;
                }, range(1, 12));

                $tbl = [];
                $count = 0;
                foreach ($labels as $l) {
                    $tbl[$l] = $data[$count];
                    $total += $data[$count];
                    $count++;
                }
            } else {
                $prefix = "Weekly";
                $labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

                // Modify the query to filter based on the start and end dates
                $withdrawals = DB::table('withdrawals')
                    ->where('userID', '=', $user['userID'])
                    ->whereBetween('created_at', [$startDate, $endDate]) // Filter by date range
                    ->selectRaw('DAYOFWEEK(created_at) as day, SUM(total) as total')
                    ->groupBy(DB::raw('DAYOFWEEK(created_at)'))
                    ->pluck('total', 'day');

                // Populate data for each day (default to 0 if no data)
                $data = array_map(function ($day) use ($withdrawals) {
                    return $withdrawals[$day] ?? 0;
                }, range(1, 7));

                $tbl = [];
                $count = 0;
                foreach ($labels as $l) {
                    $tbl[$l] = $data[$count];
                    $total += $data[$count];
                    $count++;
                }
            }

            return view('user.reports', ['labels' => $labels, 'data' => $data, 'prefix' => $prefix, 'tbl' => $tbl, "total" => $total]);
        }
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

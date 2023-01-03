<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function getReport()
    {

        $reports = Report::where('state', 'OPEN')->get();

        return response()->json($reports);

    }

    public function Report(Request $request)
    {

        $report = Report::create($request->post());
        return response()->json([
            'message' => 'report  Created Successfully!!',
            'report' => $report,
        ]);
    }

    public function BlockReport(Report $report)
    {
        $data = request()->all();
        $report->state = $data['status'];
        $report->save();
        return $report;
    }

    public function ResolveReport(Report $report)
    {
        $data = request()->all();
        $report->state = $data['status'];
        $report->save();
        return $report;

    }
}

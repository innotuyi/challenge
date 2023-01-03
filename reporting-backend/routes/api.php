<?php

use App\Http\Controllers\Report;
use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;






Route::get('reports', [ReportController::class, 'getReport']);
Route::post('report', [ReportController::class, 'Report']);
Route::put('reports/{report}', [ReportController::class, 'BlockReport']);
Route::put('reports/{report}', [ReportController::class, 'ResolveReport']);




<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalReports = Laporan::count(); // Total laporan
        $answeredReports = Laporan::where('id_status', '2')->count(); // Laporan terjawab
        $unansweredReports = Laporan::where('id_status', '1')->count(); // Laporan belum terjawab

        return view('admin', compact('totalReports', 'answeredReports', 'unansweredReports'));
    }
}

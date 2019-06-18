<?php

namespace App\Http\Controllers;
use App\ScanDepartment;
use App\Scanpoint;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['ScanDepartments' => ScanDepartment::all(), 'Scanpoints' => Scanpoint::all()]);
    }

    function csvToArray($filename = '')
    {
        $filepath = public_path('test.csv');
        $fileContent = file_get_contents($filepath);
        $fileContent = mb_convert_encoding($fileContent, "UTF-8");
        $lines = explode("\n", $fileContent);

        array_pop($lines);
        return $lines;
    }

    public function importCsv()
    {
        $file = public_path('test.csv');

        $lines = $this->csvToArray($file);

        return view('scannedpoints.index', ['lines' => $lines]);
    }
}

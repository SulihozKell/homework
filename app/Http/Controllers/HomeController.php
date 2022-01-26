<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $homeworkCount = Homework::count();
        return view("home", ["homeworkCount" => $homeworkCount]);
    }
}

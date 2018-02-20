<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SandboxController extends Controller
{
	public function loanCalculator()
	{
		return view('loanCalulator.loanCalculator');
    }
	public function randomNumberGenerator()
	{
		return view('loanCalulator.loanCalculator');
	}
}

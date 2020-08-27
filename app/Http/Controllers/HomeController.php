<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $stories;
    public function __construct(Story $story){
        $this->stories=$story;
    }
    public function index()
    {
        $stories=Story::all();
        return view('home',compact('stories'));
    }
    public function forLender(){
        return view('lender');
    }
    public function forInvestor(){
        return view('investor');
    }
    public function payments(){
        return view('payments');
    }
    public function promotion(){
        return view('promotion');
    }
}

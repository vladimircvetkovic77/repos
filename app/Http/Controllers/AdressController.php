<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\AdressRepository;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    protected $adresses;
	
    public function __construct(AdressRepository $adresses)
    {
    	$this->adresses = $adresses;
    }
    public function index()
    {
    	dd($this->adresses);
    }
}

<?php

namespace App\Http\Controllers;

use App\Adress;
use Illuminate\Http\Request;
use App\Repositories\Contracts\AdressRepository;

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

    public function create(Request $request)
    {
    	if ($request->validate(Adress::$createRules)) {
            $this->adresses->create([
        		'user_id'=> $request->id,
        		'line1'=> $request->line1
        	]);
        }
    }
}

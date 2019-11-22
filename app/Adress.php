<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
	 protected $fillable = [
    	'user_id',
    	'line1'
    ];

    public static $createRules = [
            'user_id' => 'required',
            'line1' => 'required'
        ];
        
    public static $updateRules = [
            'user_id' => 'required',
            'line1' => 'required'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    
}

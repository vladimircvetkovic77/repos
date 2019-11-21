<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Eloquent\Criteria\ByUser;
use App\Repositories\Eloquent\Criteria\IsLive;
use App\Repositories\Eloquent\Criteria\LatestFirst;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
	protected $topics;
	
    public function __construct(TopicRepository $topics)
    {
    	$this->topics = $topics;
    }

    public function index()
    {
    	$topics = $this->topics->withCriteria([
            new LatestFirst, new IsLive, new ByUser(auth()->id())
        ])->all();
       
    	return view('topics.index', compact('topics'));
    }
}
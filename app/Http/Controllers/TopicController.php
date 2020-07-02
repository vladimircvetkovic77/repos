<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use App\Repositories\Eloquent\Criteria\{
    ByUser, EagerLoad, IsLive, LatestFirst
};
use App\Repositories\Contracts\TopicRepository;

class TopicController extends Controller
{
	protected $topics;
	

    public function __construct(TopicRepository $topics)
    {
    	$this->topics = $topics;
        dd($topics);
      
    }

    public function index()
    {
    	$topics = $this->topics->withCriteria([
            new LatestFirst(), new IsLive(), new EagerLoad ([
                'posts', 'posts.user'])
        ])->all();
    	return view('topics.index', compact('topics'));
    }
}
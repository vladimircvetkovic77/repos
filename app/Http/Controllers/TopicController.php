<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use App\Repositories\Contracts\TopicRepository;

class TopicController extends Controller
{
	protected $topics;

    public function __construct(TopicRepository $topics)
    {
    	$this->topics = $topics;
    }

    public function index()
    {
    	$topics = $this->topics->all();
    	dd($topics);
    }
}

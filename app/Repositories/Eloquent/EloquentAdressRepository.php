<?php

namespace App\Repositories\Eloquent;

use App\Adress;
use App\Repositories\RepositoryAbstract;
use App\Repositories\Contracts\AdressRepository;

class EloquentAdressRepository extends RepositoryAbstract implements AdressRepository
{
	public function entity()
	{
		return Adress::class;
	}
}
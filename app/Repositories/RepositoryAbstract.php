<?php

namespace App\Repositories;

use App\Repositories\Exceptions\NoEntityDefined;
use App\Repositories\Contracts\RepositoryInterface;


abstract class RepositoryAbstract implements RepositoryInterface
{
	protected $entity;

	public function __construct()
	{
		$this->entity = $this->resolveEntity();
		// dd($this->entity);
	}
	
	public function all()
	{
		return $this->entity->all();
	}

	public function resolveEntity()
	{
		if (!method_exists($this, 'entity')) {
			throw new NoEntityDefined();
		}
		return app()->make($this->entity());
	}
}
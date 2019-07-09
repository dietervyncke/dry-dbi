<?php

namespace Tnt\Dbi\Criteria;

use Tnt\Dbi\Contracts\CriteriaInterface;
use Tnt\Dbi\QueryBuilder;

class LessThan implements CriteriaInterface
{
	/**
	 * @var string
	 */
	private $column;

	private $value;

	/**
	 * LessThan constructor.
	 * @param mixed $column
	 * @param $value
	 */
	public function __construct($column, $value)
	{
		$this->column = $column;
		$this->value = $value;
	}

	/**
	 * @param QueryBuilder $queryBuilder
	 */
	public function apply(QueryBuilder $queryBuilder)
	{
		$queryBuilder->where($this->column, '<', $this->value);
	}
}
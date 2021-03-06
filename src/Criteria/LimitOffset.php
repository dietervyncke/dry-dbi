<?php

namespace Tnt\Dbi\Criteria;

use Tnt\Dbi\Contracts\CriteriaInterface;
use Tnt\Dbi\QueryBuilder;

class LimitOffset implements CriteriaInterface
{
	/**
	 * @var int
	 */
	private $limit;

	/**
	 * @var int
	 */
	private $offset;

	/**
	 * LimitOffset constructor.
	 * @param int $limit
	 * @param int $offset
	 */
	public function __construct(int $limit, int $offset = 0)
	{
		$this->limit = $limit;
		$this->offset = $offset;
	}

	/**
	 * @param QueryBuilder $queryBuilder
	 */
	public function apply(QueryBuilder $queryBuilder)
	{
		$queryBuilder->limit($this->limit);

		if ($this->offset) {
			$queryBuilder->offset($this->offset);
		}
	}
}
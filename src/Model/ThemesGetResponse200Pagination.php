<?php

namespace Struqtur\Zigned\Api\Model;

class ThemesGetResponse200Pagination extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The maximum number of items per page
     *
     * @var int
     */
    protected $limit;
    /**
     * The total number of pages
     *
     * @var int
     */
    protected $totalPages;
    /**
     * The current page number
     *
     * @var int
     */
    protected $page;
    /**
     * The total number of results
     *
     * @var int
     */
    protected $totalResults;
    /**
     * The maximum number of items per page
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * The maximum number of items per page
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * The total number of pages
     *
     * @return int
     */
    public function getTotalPages() : int
    {
        return $this->totalPages;
    }
    /**
     * The total number of pages
     *
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(int $totalPages) : self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;
        return $this;
    }
    /**
     * The current page number
     *
     * @return int
     */
    public function getPage() : int
    {
        return $this->page;
    }
    /**
     * The current page number
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page) : self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * The total number of results
     *
     * @return int
     */
    public function getTotalResults() : int
    {
        return $this->totalResults;
    }
    /**
     * The total number of results
     *
     * @param int $totalResults
     *
     * @return self
     */
    public function setTotalResults(int $totalResults) : self
    {
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;
        return $this;
    }
}
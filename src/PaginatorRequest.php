<?php

namespace Avn\Paginator;

class PaginatorRequest
{
    private array $idList;

    private int $currentPage;

    private int $limit;

    public function __construct(array &$idList)
    {
        $this->idList = $idList;
        $this->currentPage = 1;
        $this->limit = 50;
    }

    public function getIdList(): array
    {
        return $this->idList;
    }

    public function setIdList(array &$idList): self
    {
        $this->idList = $idList;
        return $this;
    }

    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage): self
    {
        $this->currentPage = $currentPage;
        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }
}

<?php

namespace Avn\Paginator;

class PaginatorResponse
{
    private array $idList;

    private int $totalPageCount;

    public function getIdList(): array
    {
        return $this->idList;
    }

    public function setIdList(array $idList): self
    {
        $this->idList = $idList;
        return $this;
    }

    public function getTotalPageCount(): int
    {
        return $this->totalPageCount;
    }

    public function setTotalPageCount(int $totalPageCount): self
    {
        $this->totalPageCount = $totalPageCount;
        return $this;
    }
}

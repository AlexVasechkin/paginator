<?php

namespace Avn\Paginator;

class Paginator
{
    public function paginate(PaginatorRequest $request): PaginatorResponse
    {
        $response = new PaginatorResponse();

        $response->setTotalPageCount(ceil(count($request->getIdList()) / $request->getLimit()));

        $offset = ($request->getCurrentPage() - 1) * $request->getLimit();

        $idList = $request->getIdList();

        $response->setIdList(array_splice($idList, $offset, $request->getLimit()));

        return $response;
    }
}

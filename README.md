# Paginator

## How to use
```php
$idList = $someRepository->getIdList(); // [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

$pagination = new Paginator(
    (new PaginatorRequest($idList))
        ->setCurrentPage(3)
        ->setLimit(2)
)

$totalPageCount = $pagination->getTotalPageCount(); // 5
$resultIdList = $pagination->getIdList(); // [5, 6]
```

<?php

namespace Tarelki\Portal\QuickFilter;

class QuickFilterCollection implements QuickFilterCollectionInterface
{
    /** @var QuickFilterRuleInterface */
    private $filters = [];

    public function register(QuickFilterRuleInterface $quickFilter): QuickFilterRuleInterface
    {
        $this->filters[] = $quickFilter;
    }

    public function getFilterNames(Product $product): array
    {
        $filterNameList = [];

        foreach ($this->filters as $filter) {
            if ($filter->check($product)) {
                $filterNameList[] = $filter->getFilterName();
            }
        }

        return $filterNameList;
    }
}

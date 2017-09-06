<?php

namespace Tarelki\Portal\QuickFilter;

use Tarelki\Portal\QuickFilter\Rule\RuleOne;

class QuickFilter
{
    /** @var QuickFilterRepositoryInterface */
    private $filterRepository;
    /** @var QuickFilterCollectionInterface */
    private $collection;

    public function __construct(
        QuickFilterRepositoryInterface $filterRepository,
        QuickFilterCollectionInterface $collection
    ) {

        $this->filterRepository = $filterRepository;
        $this->collection       = $collection;
    }

    public function init(): QuickFilter
    {
        $this->collection->register(new RuleOne());

        return $this;
    }

    public function updateFilters(Product $product)
    {
        $filterNames = $this->collection->getFilterNames($product);

        $this->filterRepository->addProductToFilter($product, $filterNames);
    }
}

<?php

namespace Tarelki\Portal\QuickFilter;

interface QuickFilterRepositoryInterface
{
    public function addProductToFilter(Product $product, array $filterNames);
}

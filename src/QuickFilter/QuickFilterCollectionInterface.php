<?php

namespace Tarelki\Portal\QuickFilter;

interface QuickFilterCollectionInterface
{
    public function register(QuickFilterRuleInterface $quickFilter): QuickFilterRuleInterface;

    public function getFilterNames(Product $product);
}

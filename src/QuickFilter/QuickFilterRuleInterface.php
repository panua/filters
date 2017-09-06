<?php

namespace Tarelki\Portal\QuickFilter;

interface QuickFilterRuleInterface
{
    public function check(Product $product): bool ;
    public function getFilterName(): string;
}

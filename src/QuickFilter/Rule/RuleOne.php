<?php

namespace Tarelki\Portal\QuickFilter\Rule;

use Tarelki\Portal\QuickFilter\Product;
use Tarelki\Portal\QuickFilter\QuickFilterRuleInterface;

class RuleOne implements QuickFilterRuleInterface
{
    public function check(Product $product): bool
    {
        if ($product) {
            return true;
        }
    }

    public function getFilterName(): string
    {
        return 'FilterOne';
    }
}

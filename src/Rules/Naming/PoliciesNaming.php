<?php

declare(strict_types=1);

namespace Mortexa\LaravelArkitect\Rules\Naming;

use Arkitect\Expression\ForClasses\HaveNameMatching;
use Arkitect\Expression\ForClasses\ResideInOneOfTheseNamespaces;
use Arkitect\Rules\DSL\ArchRule;
use Arkitect\Rules\Rule;
use Mortexa\LaravelArkitect\Contracts\RuleContract;
use Mortexa\LaravelArkitect\Rules\BaseRule;

class PoliciesNaming extends BaseRule implements RuleContract
{
    public static function rule(): ArchRule
    {
        return Rule::allClasses()
            ->that(new ResideInOneOfTheseNamespaces('App\Policies'))
            ->should(new HaveNameMatching('*Policy'))
            ->because('It\'s a Laravel naming convention');
    }

    public static function path(): string
    {
        return 'app/Policies';
    }
}

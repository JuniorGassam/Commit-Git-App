<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('var')
;

/*return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
    ])
    ->setFinder($finder)
;*/


return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR12' => true,
        'camel_case_variables' => true,
        'phpdoc_no_alias_tag' => false,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    );

<?php

use PhpCsFixerCustomFixers\Fixer\NoSuperfluousConcatenationFixer;
use PhpCsFixerCustomFixers\Fixer\NoUselessCommentFixer;
use PhpCsFixerCustomFixers\Fixer\NoUselessParenthesisFixer;
use PhpCsFixerCustomFixers\Fixer\NoUselessStrlenFixer;
use PhpCsFixerCustomFixers\Fixer\PhpdocNoIncorrectVarAnnotationFixer;
use PhpCsFixerCustomFixers\Fixer\SingleSpaceAfterStatementFixer;

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->notPath([
        'Kernel.php',
        'HttpKernel.php',
    ])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'blank_line_after_opening_tag' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'comment_to_phpdoc' => true,
        'date_time_immutable' => true,
        'declare_strict_types' => true,
        'doctrine_annotation_array_assignment' => true,
        'doctrine_annotation_braces' => true,
        'doctrine_annotation_indentation' => true,
        'doctrine_annotation_spaces' => true,
        'escape_implicit_backslashes' => true,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'final_internal_class' => false,
        'general_phpdoc_annotation_remove' => false,
        'header_comment' => false,
        'heredoc_to_nowdoc' => false,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'mb_str_functions' => true,
        'method_chaining_indentation' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => true,
        'native_function_invocation' => false,
        'no_alias_functions' => true,
        'no_blank_lines_before_namespace' => false,
        'no_extra_blank_lines' => true,
        'no_null_property_initialization' => true,
        'no_php4_constructor' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => false,
        'ordered_class_elements' => false,
        'php_unit_dedicate_assert' => false,
        'php_unit_expectation' => false,
        'php_unit_method_casing' => ['case' => 'snake_case'],
        'php_unit_mock' => false,
        'php_unit_namespaced' => false,
        'php_unit_no_expectation_annotation' => false,
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_strict' => false,
        'php_unit_test_annotation' => false,
        'php_unit_test_class_requires_covers' => false,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_order' => true,
        'phpdoc_order_by_value' => true,
        'phpdoc_to_return_type' => true,
        'phpdoc_types_order' => false,
        'pow_to_exponentiation' => true,
        'psr_autoloading' => true,
        'random_api_migration' => false,
        'simplified_null_return' => false,
        'single_line_throw' => false,
        'static_lambda' => false,
        'strict_comparison' => true,
        'strict_param' => true,
        'string_line_ending' => true,
        'ternary_to_null_coalescing' => true,
        'void_return' => true,
        'phpdoc_to_comment' => false,
        NoSuperfluousConcatenationFixer::name() => true,
        NoUselessCommentFixer::name() => true,
        NoUselessParenthesisFixer::name() => true,
        NoUselessStrlenFixer::name() => true,
        PhpdocNoIncorrectVarAnnotationFixer::name() => true,
        SingleSpaceAfterStatementFixer::name() => true,
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->registerCustomFixers(new PhpCsFixerCustomFixers\Fixers())
;

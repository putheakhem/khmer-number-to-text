<?php

declare(strict_types=1);

namespace Putheakhem\KhmerNumberToText\Constants;

final class KhmerNumberConstants
{
    public const array DIGIT_WORDS = [
        0 => 'សូន្យ',
        1 => 'មួយ',
        2 => 'ពីរ',
        3 => 'បី',
        4 => 'បួន',
        5 => 'ប្រាំ',
        6 => 'ប្រាំមួយ',
        7 => 'ប្រាំពីរ',
        8 => 'ប្រាំបី',
        9 => 'ប្រាំបួន',
    ];

    public const array KHMER_NUMERAL_MAP = [
        '០' => '0', '១' => '1', '២' => '2', '៣' => '3', '៤' => '4',
        '៥' => '5', '៦' => '6', '៧' => '7', '៨' => '8', '៩' => '9',
    ];

    public const array TENS_WORDS = [
        1 => 'ដប់',
        2 => 'ម្ភៃ',
        3 => 'សាមសិប',
        4 => 'សែសិប',
        5 => 'ហាសិប',
        6 => 'ហុកសិប',
        7 => 'ចិតសិប',
        8 => 'ប៉ែតសិប',
        9 => 'កៅសិប',
    ];

    public const array LARGE_UNITS = [
        1_000_000 => 'លាន',
        1_000 => 'ពាន់',
        100 => 'រយ',
    ];
}

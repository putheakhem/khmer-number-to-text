<?php

declare(strict_types=1);

namespace Putheakhem\KhmerNumberToText;

use Putheakhem\KhmerNumberToText\Constants\KhmerNumberConstants;

final class KhmerNumberConverter
{
    public function toText(string|int $input): string
    {
        $number = is_numeric($input) ? (int) $input : $this->khmerToArabic($input);

        if ($number === 0) {
            return KhmerNumberConstants::DIGIT_WORDS[0];
        }

        return $this->convertNumber($number);
    }

    private function khmerToArabic(string $khmer): int
    {
        $chars = preg_split('//u', $khmer, -1, PREG_SPLIT_NO_EMPTY);
        $arabic = implode('', array_map(fn ($char) => KhmerNumberConstants::KHMER_NUMERAL_MAP[$char] ?? '', $chars));

        return (int) $arabic;
    }

    private function convertNumber(int $number): string
    {
        $parts = [];

        foreach (KhmerNumberConstants::LARGE_UNITS as $value => $label) {
            if ($number >= $value) {
                $parts[] = $this->convertNumber(intdiv($number, $value)).$label;
                $number %= $value;
            }
        }

        if ($number >= 10) {
            $tens = intdiv($number, 10);
            $units = $number % 10;

            if (isset(KhmerNumberConstants::TENS_WORDS[$tens])) {
                $parts[] = KhmerNumberConstants::TENS_WORDS[$tens];
            }

            if ($units > 0) {
                $parts[] = KhmerNumberConstants::DIGIT_WORDS[$units];
            }

            return implode('', $parts);
        }

        if ($number > 0) {
            $parts[] = KhmerNumberConstants::DIGIT_WORDS[$number];
        }

        return implode('', $parts);
    }
}

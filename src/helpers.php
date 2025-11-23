<?php

if (!function_exists('initials')) {
    /**
     * Get the initials from a string.
     *
     * @param string $string
     * @return string
     */
    function initials(string $string): string
    {
        // Split the string by whitespace, filter out empty values
        $words = preg_split('/\s+/', trim($string));
        $letters = array_map(fn($word) => mb_strtoupper(mb_substr($word, 0, 1)), $words);
        return implode('', $letters);
    }
}

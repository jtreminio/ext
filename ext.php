<?php

namespace ext;

/**
 * Quote string with slashes in a C style
 *
 * @param string $str
 * @param string $charlist
 * @return string
 */
function addCSlashes($str, $charlist) {
    return \addcslashes($str, $charlist);
}

/**
 * Quote string with slashes
 *
 * @param string $str
 * @return string
 */
function addSlashes($str)
{
    return \addslashes($str);
}

/**
 * Convert binary data into hexadecimal representation
 *
 * @param string $str
 * @return string
 */
function bin2Hex($str)
{
    return \bin2hex($str);
}

/**
 * Strip whitespace (or other characters) from the end of a string
 *
 * This function is an alias of: rtrim().
 *
 * @param string      $str
 * @param null|string $charlist
 * @return string
 */
function chop($str, $charlist = null)
{
    return \rtrim($str, $charlist);
}

/**
 * Returns a one-character string containing the character specified by ascii.
 *
 * @param int $ascii
 * @return string
 */
function chr($ascii)
{
    return \chr($ascii);
}

/**
 * Split a string into smaller chunks
 *
 * @param string $body
 * @param int    $chunklen
 * @param string $end
 * @return string
 */
function chunkSplit($body, $chunklen = 76, $end = "\r\n")
{
    return \chunk_split($body, $chunklen, $end);
}

/**
 * Convert from one Cyrillic character set to another
 *
 * @param string $str
 * @param string $from
 * @param string $to
 * @return string
 */
function convertCyrString($str, $from, $to)
{
    return \convert_cyr_string($str, $from, $to);
}

/**
 * Decode a uuencoded string
 *
 * @param string $data
 * @return string
 */
function convertUuDecode($data)
{
    return \convert_uudecode($data);
}

/**
 * Uuencode a string
 *
 * @param string $data
 * @return string
 */
function convertUuEncode($data)
{
    return \convert_uuencode($data);
}

/**
 * Return information about characters used in a string
 *
 * @param string $string
 * @param int    $mode
 * @return mixed
 */
function countChars($string, $mode = 0)
{
    return \count_chars($string, $mode);
}

/**
 * Calculates the crc32 polynomial of a string
 *
 * @param string $str
 * @return int
 */
function crc32($str)
{
    return \crc32($str);
}

/**
 * One-way string hashing
 *
 * @param string      $str
 * @param null|string $salt
 * @return string
 */
function crypt($str, $salt = null)
{
    return \crypt($str, $salt);
}

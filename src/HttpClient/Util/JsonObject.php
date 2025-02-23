<?php

declare(strict_types=1);

/*
 * This file is part of the DigitalOcean API library.
 *
 * (c) Antoine Kirk <contact@sbin.dk>
 * (c) Graham Campbell <hello@gjcampbell.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOceanV2\HttpClient\Util;

use DigitalOceanV2\Exception\RuntimeException;
use stdClass;

/**
 * The is the JSON object helper class.
 *
 * @internal
 *
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
final class JsonObject
{
    /**
     * Create an empty PHP object.
     */
    public static function empty(): stdClass
    {
        return new stdClass();
    }

    /**
     * Decode a JSON string into a PHP object.
     *
     * @throws RuntimeException
     */
    public static function decode(string $json): stdClass
    {
        /** @var scalar|array|stdClass|null */
        $data = \json_decode($json);

        if (\JSON_ERROR_NONE !== \json_last_error()) {
            throw new RuntimeException(\sprintf('json_decode error: %s', \json_last_error_msg()));
        }

        if (!$data instanceof stdClass) {
            throw new RuntimeException(\sprintf('json_decode error: Expected JSON of type object, %s given.', \get_debug_type($data)));
        }

        return $data;
    }

    /**
     * Encode a PHP array into a JSON string.
     *
     * @throws RuntimeException
     */
    public static function encode(array $value): string
    {
        $json = \json_encode($value);

        if (\JSON_ERROR_NONE !== \json_last_error()) {
            throw new RuntimeException(\sprintf('json_encode error: %s', \json_last_error_msg()));
        }

        /** @var string */
        return $json;
    }
}

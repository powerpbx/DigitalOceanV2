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

namespace DigitalOceanV2;

use DigitalOceanV2\Api\AbstractApi;
use DigitalOceanV2\Exception\ExceptionInterface;
use Generator;

interface ResultPagerInterface
{
    /**
     * Fetch a single result from an api call.
     *
     * @throws ExceptionInterface
     */
    public function fetch(AbstractApi $api, string $method, array $parameters = []): array;

    /**
     * Fetch all results from an api call.
     *
     * @throws ExceptionInterface
     */
    public function fetchAll(AbstractApi $api, string $method, array $parameters = []): array;

    /**
     * Lazily fetch all results from an api call.
     *
     * @throws ExceptionInterface
     */
    public function fetchAllLazy(AbstractApi $api, string $method, array $parameters = []): Generator;

    /**
     * Check to determine the availability of a next page.
     */
    public function hasNext(): bool;
}

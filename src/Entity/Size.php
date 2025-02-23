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

namespace DigitalOceanV2\Entity;

/**
 * @author Yassir Hannoun <yassir.hannoun@gmail.com>
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
final class Size extends AbstractEntity
{
    /**
     * @var string
     */
    public string $slug;

    /**
     * @var bool
     */
    public bool $available;

    /**
     * @var int
     */
    public int $memory;

    /**
     * @var int
     */
    public int $vcpus;

    /**
     * @var int
     */
    public int $disk;

    /**
     * @var int
     */
    public int $transfer;

    /**
     * @var string
     */
    public string $priceMonthly;

    /**
     * @var string
     */
    public string $priceHourly;

    /**
     * @var string[]
     */
    public array $regions = [];

    /**
     * @var string
     */
    public string $description;
}

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
 * @author Michael Shihjay Chen <shihjay2@gmail.com>
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
final class MonitoringAlert extends AbstractEntity
{
    /**
     * @var array
     */
    public array $alerts;

    /**
     * @var string
     */
    public string $compare;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var array
     */
    public array $entities;

    /**
     * @var array
     */
    public array $tags;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var int
     */
    public int $value;

    /**
     * @var string
     */
    public string $window;
}

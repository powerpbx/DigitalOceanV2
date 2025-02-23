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
final class AppInstanceSize extends AbstractEntity
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $slug;

    /**
     * @var string
     */
    public string $cpuType;

    /**
     * @var string
     */
    public string $cpus;

    /**
     * @var string
     */
    public string $memoryBytes;

    /**
     * @var string
     */
    public string $usdPerMonth;

    /**
     * @var string
     */
    public string $usdPerSecond;

    /**
     * @var string
     */
    public string $tierSlug;

    /**
     * @var string
     */
    public string $tierUpgradeTo;

    /**
     * @var string
     */
    public string $tierDowngradeTo;
}

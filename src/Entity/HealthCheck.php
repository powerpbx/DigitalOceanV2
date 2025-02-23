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
 * @author Jacob Holmes <jwh315@cox.net>
 */
class HealthCheck extends AbstractEntity
{
    /**
     * @var string
     */
    public string $protocol;

    /**
     * @var int
     */
    public int $port;

    /**
     * @var string
     */
    public string $path;

    /**
     * @var int
     */
    public int $checkIntervalSeconds;

    /**
     * @var int
     */
    public int $responseTimeoutSeconds;

    /**
     * @var int
     */
    public int $healthyThreshold;

    /**
     * @var int
     */
    public int $unhealthyThreshold;
}

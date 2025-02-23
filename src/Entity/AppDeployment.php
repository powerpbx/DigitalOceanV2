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
final class AppDeployment extends AbstractEntity
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var array
     */
    public array $spec;

    /**
     * @var array
     */
    public array $services;

    /**
     * @var array
     */
    public array $staticSites;

    /**
     * @var array
     */
    public array $workers;

    /**
     * @var array
     */
    public array $jobs;

    /**
     * @var string
     */
    public string $phaseLastUpdatedAt;

    /**
     * @var string
     */
    public string $createdAt;

    /**
     * @var string
     */
    public string $updatedAt;

    /**
     * @var string
     */
    public string $cause;

    /**
     * @var string
     */
    public string $clonedFrom;

    /**
     * @var array
     */
    public array $progress;

    /**
     * @var string
     */
    public string $phase;

    /**
     * @var string
     */
    public string $tierSlug;
}

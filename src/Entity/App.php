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
final class App extends AbstractEntity
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $ownerUuid;

    /**
     * @var array
     */
    public array $spec;

    /**
     * @var string
     */
    public string $defaultIngress;

    /**
     * @var string
     */
    public string $createdAt;

    /**
     * @var string
     */
    public string $updatedAt;

    /**
     * @var array
     */
    public array $activeDeployment;

    /**
     * @var array
     */
    public array $inProgressDeployment;

    /**
     * @var string
     */
    public string $lastDeploymentCreatedAt;

    /**
     * @var string
     */
    public string $liveUrl;

    /**
     * @var array
     */
    public array $region;

    /**
     * @var string
     */
    public string $tierSlug;

    /**
     * @var string
     */
    public string $liveUrlBase;

    /**
     * @var string
     */
    public string $liveDomain;

    /**
     * @var array
     */
    public array $domains;
}

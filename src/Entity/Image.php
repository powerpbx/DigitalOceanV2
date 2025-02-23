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
final class Image extends AbstractEntity
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $distribution;

    /**
     * @var string
     */
    public string $slug;

    /**
     * @var int
     */
    public int $minDiskSize;

    /**
     * @var float
     */
    public float $sizeGigabytes;

    /**
     * @var string
     */
    public string $createdAt;

    /**
     * @var bool
     */
    public bool $public;

    /**
     * @var string[]
     */
    public array $regions = [];

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string[]
     */
    public array $tags = [];

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $error_message;

    /**
     * @param string $createdAt
     *
     * @return void
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = static::convertToIso8601($createdAt);
    }
}

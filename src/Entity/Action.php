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
 * @author Antoine Kirk <contact@sbin.dk>
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
final class Action extends AbstractEntity
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $startedAt;

    /**
     * @var string|null
     */
    public ?string $completedAt;

    /**
     * @var string
     */
    public string $resourceId;

    /**
     * @var string
     */
    public string $resourceType;

    /**
     * @var Region
     */
    public Region $region;

    /**
     * @var string
     */
    public string $regionSlug;

    /**
     * @param array $parameters
     *
     * @return void
     */
    public function build(array $parameters): void
    {
        parent::build($parameters);

        foreach ($parameters as $property => $value) {
            if ('region' === $property && \is_object($value)) {
                $this->region = new Region($value);
            }
        }
    }

    /**
     * @param string $startedAt
     *
     * @return void
     */
    public function setStartedAt(string $startedAt): void
    {
        $this->startedAt = static::convertToIso8601($startedAt);
    }

    /**
     * @param string|null $completedAt
     *
     * @return void
     */
    public function setCompletedAt(?string $completedAt): void
    {
        $this->completedAt = null === $completedAt ? null : static::convertToIso8601($completedAt);
    }
}

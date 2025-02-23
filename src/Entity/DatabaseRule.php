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
 * @author Filippo Fortino <filippofortino@gmail.com>
 */
final class DatabaseRule extends AbstractEntity
{
    /**
     * @var string
     */
    public string $uuid;

    /**
     * @var string
     */
    public string $clusterUuid;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $value;

    /**
     * @var string
     */
    public string $createdAt;

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

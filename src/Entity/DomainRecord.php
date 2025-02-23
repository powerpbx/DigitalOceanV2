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
final class DomainRecord extends AbstractEntity
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $data;

    /**
     * @var int
     */
    public int $priority;

    /**
     * @var int
     */
    public int $port;

    /**
     * @var int
     */
    public int $ttl;

    /**
     * @var int
     */
    public int $weight;

    /**
     * @var int
     */
    public int $flags;

    /**
     * @var string
     */
    public string $tag;
}

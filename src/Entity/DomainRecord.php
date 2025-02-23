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
    public int $id;

    public string $type;

    public string $name;

    public string $data;

    public int $priority;

    public int $port;

    public int $ttl;

    public int $weight;

    public int $flags;

    public string $tag;
}

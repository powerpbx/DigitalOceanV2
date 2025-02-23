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
final class Region extends AbstractEntity
{
    /**
     * @var string
     */
    public string $slug;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var bool
     */
    public bool $available;

    /**
     * @var string[]
     */
    public array $sizes = [];

    /**
     * @var string[]
     */
    public array $features = [];
}

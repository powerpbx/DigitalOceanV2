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
final class DatabaseConnection extends AbstractEntity
{
    /**
     * @var string
     */
    public string $uri;

    /**
     * @var string
     */
    public string $database;

    /**
     * @var string
     */
    public string $host;

    /**
     * @var int
     */
    public int $port;

    /**
     * @var string
     */
    public string $user;

    /**
     * @var string
     */
    public string $password;

    /**
     * @var bool
     */
    public bool $ssl;
}

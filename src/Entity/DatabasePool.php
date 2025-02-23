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
final class DatabasePool extends AbstractEntity
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $mode;

    /**
     * @var int
     */
    public int $size;

    /**
     * @var string
     */
    public string $db;

    /**
     * @var string
     */
    public string $user;

    /**
     * @var DatabaseConnection
     */
    public DatabaseConnection $connection;

    /**
     * @var DatabaseConnection
     */
    public DatabaseConnection $privateConnection;

    /**
     * @param array $parameters
     *
     * @return void
     */
    public function build(array $parameters): void
    {
        parent::build($parameters);

        foreach ($parameters as $property => $value) {
            if ('connection' === $property && \is_object($value)) {
                $this->connection = new DatabaseConnection($value);
            }

            if ('private_connection' === $property && \is_object($value)) {
                $this->privateConnection = new DatabaseConnection($value);
            }
        }
    }
}

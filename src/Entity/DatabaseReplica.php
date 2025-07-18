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
final class DatabaseReplica extends AbstractEntity
{
    public string $name;

    public DatabaseConnection $connection;

    public DatabaseConnection $privateConnection;

    public string $region;

    public string $status;

    public string $createdAt;

    /**
     * @var string[]
     */
    public array $tags = [];

    public string $privateNetworkUuid;

    public function build(array $parameters): void
    {
        foreach ($parameters as $property => $value) {
            $property = static::convertToCamelCase($property);

            if ('connection' === $property) {
                $this->connection = new DatabaseConnection($value);
            } elseif ('privateConnection' === $property) {
                $this->privateConnection = new DatabaseConnection($value);
            } elseif (\property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = static::convertToIso8601($createdAt);
    }
}

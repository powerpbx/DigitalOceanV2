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
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 * @author Manuel Christlieb <manuel@christlieb.eu>
 */
final class ReservedIp extends AbstractEntity
{
    public string $ip;

    public ?Droplet $droplet = null;

    public Region $region;

    public bool $locked;

    public string $projectId;

    public function build(array $parameters): void
    {
        foreach ($parameters as $property => $value) {
            $property = static::convertToCamelCase($property);

            if ('droplet' === $property && null !== $value) {
                $this->droplet = new Droplet($value);
            } elseif ('region' === $property) {
                $this->region = new Region($value);
            } elseif (\property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }
}

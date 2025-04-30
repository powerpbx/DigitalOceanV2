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
 */
final class FloatingIp extends AbstractEntity
{
    public string $ip;

    public ?Droplet $droplet;

    public Region $region;

    public function build(array $parameters): void
    {
        parent::build($parameters);

        foreach ($parameters as $property => $value) {
            if ('droplet' === $property) {
                $this->droplet = new Droplet($value);
            }

            if ('region' === $property) {
                $this->region = new Region($value);
            }
        }
    }
}

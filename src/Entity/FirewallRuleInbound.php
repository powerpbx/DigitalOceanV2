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
final class FirewallRuleInbound extends FirewallRule
{
    public FirewallLocations $sources;

    public function build(array $parameters): void
    {
        foreach ($parameters as $property => $value) {
            switch ($property) {
                case 'sources':
                    if (\is_object($value)) {
                        $this->sources = new FirewallLocations($value);
                    }
                    unset($parameters[$property]);

                    break;
            }
        }

        parent::build($parameters);
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['sources'] = $this->sources->toArray();

        return $data;
    }
}

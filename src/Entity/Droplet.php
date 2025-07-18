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
final class Droplet extends AbstractEntity
{
    public int $id;

    public string $name;

    public int $memory;

    public int $vcpus;

    public int $disk;

    public Region $region;

    public Image $image;

    public Kernel $kernel;

    public Size $size;

    public string $sizeSlug;

    public bool $locked;

    public string $createdAt;

    public string $status;

    /**
     * @var string[]
     */
    public array $tags = [];

    /**
     * @var Network[]
     */
    public array $networks = [];

    /**
     * @var int[]
     */
    public array $backupIds = [];

    /**
     * @var string[]
     */
    public array $volumeIds = [];

    /**
     * @var int[]
     */
    public array $snapshotIds = [];

    /**
     * @var string[]
     */
    public array $features = [];

    public bool $backupsEnabled;

    public bool $privateNetworkingEnabled;

    public bool $ipv6Enabled;

    public bool $virtIOEnabled;

    public NextBackupWindow $nextBackupWindow;

    public string $vpcUuid;

    public function build(array $parameters): void
    {
        foreach ($parameters as $property => $value) {
            $property = static::convertToCamelCase($property);

            if ('networks' === $property) {
                if (\property_exists($value, 'v4')) {
                    foreach ($value->v4 as $subValue) {
                        $subValue->version = 4;
                        $this->networks[] = new Network($subValue);
                    }
                }

                if (\property_exists($value, 'v6')) {
                    foreach ($value->v6 as $subValue) {
                        /** @var object{ip_address: string, netmask: int, gateway: string, type: string} $subValue */
                        $this->networks[] = new Network((object) [
                            'ip_address' => $subValue->ip_address,
                            'netmask' => null,
                            'gateway' => $subValue->gateway,
                            'type' => $subValue->type,
                            'cidr' => \sprintf('%s/%d', $subValue->ip_address, $subValue->netmask),
                            'version' => 6,
                        ]);
                    }
                }
            } elseif ('kernel' === $property) {
                $this->kernel = new Kernel($value);
            } elseif ('size' === $property) {
                $this->size = new Size($value);
            } elseif ('region' === $property) {
                $this->region = new Region($value);
            } elseif ('image' === $property) {
                $this->image = new Image($value);
            } elseif ('nextBackupWindow' === $property) {
                $this->nextBackupWindow = new NextBackupWindow($value);
            } elseif (\property_exists($this, $property)) {
                $this->$property = $value;
            }
        }

        $this->backupsEnabled = \in_array('backups', $this->features, true);
        $this->virtIOEnabled = \in_array('virtio', $this->features, true);
        $this->privateNetworkingEnabled = \in_array('private_networking', $this->features, true);
        $this->ipv6Enabled = \in_array('ipv6', $this->features, true);
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = static::convertToIso8601($createdAt);
    }
}

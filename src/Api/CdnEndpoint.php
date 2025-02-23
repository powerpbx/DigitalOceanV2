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

namespace DigitalOceanV2\Api;

use DigitalOceanV2\Entity\CdnEndpoint as CdnEndpointEntity;
use DigitalOceanV2\Exception\ExceptionInterface;
use DigitalOceanV2\Exception\InvalidArgumentException;

/**
 * @author Christian Fuentes <christian@topworksheets.com>
 */
class CdnEndpoint extends AbstractApi
{
    /**
     * @throws ExceptionInterface
     */
    public function create(string $origin, ?int $ttl = null, ?string $certificateId = null, ?string $customDomain = null): CdnEndpointEntity
    {
        $body = ['origin' => $origin];

        if (null !== $ttl) {
            $body['ttl'] = $ttl;
        }
        if (null !== $certificateId) {
            $body['certificate_id'] = $certificateId;
        }
        if (null !== $customDomain) {
            $body['custom_domain'] = $customDomain;
        }

        $endpoint = $this->post('cdn/endpoints', $body);

        return new CdnEndpointEntity($endpoint->endpoint);
    }

    /**
     * @throws ExceptionInterface
     */
    public function getById(string $id): CdnEndpointEntity
    {
        $endpoint = $this->get(\sprintf('cdn/endpoints/%s', $id));

        return new CdnEndpointEntity($endpoint->endpoint);
    }

    /**
     * @throws ExceptionInterface
     *
     * @return CdnEndpointEntity[]
     */
    public function getAll(): array
    {
        $endpoints = $this->get('cdn/endpoints');

        return \array_map(function ($action) {
            return new CdnEndpointEntity($action);
        }, $endpoints->endpoints);
    }

    /**
     * @throws ExceptionInterface
     * @throws InvalidArgumentException
     */
    public function update(string $id, ?int $ttl = null, ?string $certificateId = null, ?string $customDomain = null): CdnEndpointEntity
    {
        if (null === $ttl && null === $certificateId && null === $customDomain) {
            throw new InvalidArgumentException('Update method requires at least one parameter to be not null');
        }

        $endpoint = $this->put(\sprintf('cdn/endpoints/%s', $id), [
            'ttl' => $ttl,
            'certificate_id' => $certificateId,
            'custom_domain' => $customDomain,
        ]);

        return new CdnEndpointEntity($endpoint->endpoint);
    }

    /**
     * @throws ExceptionInterface
     */
    public function remove(string $id): void
    {
        $this->delete(\sprintf('cdn/endpoints/%s', $id));
    }

    /**
     * @throws ExceptionInterface
     */
    public function purgeCache(string $id, ?array $fileList = null): void
    {
        $files = $fileList ?? ['*'];

        $this->delete(\sprintf('cdn/endpoints/%s/cache', $id), [
            'files' => $files,
        ]);
    }
}

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
 * @author Jacob Holmes <jwh315@cox.net>
 */
class ForwardingRule extends AbstractEntity
{
    /**
     * @var string
     */
    public string $entryProtocol;

    /**
     * @var int
     */
    public int $entryPort;

    /**
     * @var string
     */
    public string $targetProtocol;

    /**
     * @var int
     */
    public int $targetPort;

    /**
     * @var string|null
     */
    public ?string $certificateId;

    /**
     * @var bool|null
     */
    public ?bool $tlsPassthrough;

    /**
     * @return $this
     */
    public function setStandardHttpRules()
    {
        $this->entryProtocol = 'http';
        $this->targetProtocol = 'http';
        $this->entryPort = 80;
        $this->targetPort = 80;

        return $this;
    }

    /**
     * @return $this
     */
    public function setStandardHttpsRules()
    {
        $this->entryProtocol = 'https';
        $this->targetProtocol = 'https';
        $this->entryPort = 443;
        $this->targetPort = 443;
        $this->tlsPassthrough = true;

        return $this;
    }
}

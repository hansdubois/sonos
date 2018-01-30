<?php
declare(strict_types = 1);

namespace HansDubois\Sonos;

class Sonos {
    /**
     * @var string
     */
    private $ipAddress;
    /**
     * @var string
     */
    private $port;

    /**
     * @param string $ipAddress
     * @param string $port
     */
    public function __construct(string $ipAddress, string $port)
    {
        $this->ipAddress = $ipAddress;
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getRequestUrl(): string
    {
        return $this->ipAddress . ':' . $this->port;
    }
}

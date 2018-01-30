<?php
declare(strict_types=1);

namespace HansDubois\Sonos\Request;

use HansDubois\Sonos\Envelope;

interface RequestInterface
{
    /**
     * @return Envelope
     */
    public function createEnvelope(): Envelope;

    /**
     * @return string
     */
    public function getSoapAction():string;

    /**
     * @return string
     */
    public function getUrl(): string;
}

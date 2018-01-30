<?php
declare(strict_types=1);

namespace HansDubois\Sonos\Request;

use HansDubois\Sonos\Envelope;

class NowPlaying implements RequestInterface
{
    /**
     * @var string
     */
    const ACTION = 'GetPositionInfo';

    /**
     * @var string
     */
    const URL = '/MediaRenderer/AVTransport/Control';

    /**
     * @var string
     */
    const TRANSPORT = 'urn:schemas-upnp-org:service:AVTransport:1';

    /**
     * @return Envelope
     */
    public function createEnvelope(): Envelope
    {
        $arguments = '<InstanceID>0</InstanceID>';

        return new Envelope(self::ACTION, self::TRANSPORT, $arguments);
    }

    /**
     * @return string
     */
    public function getSoapAction(): string
    {
        return self::TRANSPORT . "#" . self::ACTION;
    }


    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URL;
    }
}

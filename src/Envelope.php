<?php
declare(strict_types = 1);

namespace HansDubois\Sonos;

class Envelope {
    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $service;

    /**
     * @var string
     */
    private $arguments;

    /**
     * @param string $action
     * @param string $service
     * @param string $arguments
     */
    public function __construct(string $action, string $service, string $arguments)
    {
        $this->action = $action;
        $this->service = $service;
        $this->arguments = $arguments;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $envelope = '<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/" s:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">';
        $envelope .= '<s:Body>';
        $envelope .= '<u:' . $this->action. ' xmlns:u="' . $this->service. '">';
        $envelope .= $this->arguments;
        $envelope .= '</u:' . $this->action . '>';
        $envelope .= '</s:Body>';
        $envelope .= '</s:Envelope>';

        return $envelope;
    }
}

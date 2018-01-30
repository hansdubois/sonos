<?php
declare(strict_types = 1);

namespace HansDubois\Sonos;

use GuzzleHttp\Client as GuzzleClient;
use HansDubois\Sonos\Request\RequestInterface;

class Client {

    /**
     * @param Sonos $sonos
     * @param RequestInterface $request
     */
    public function request(Sonos $sonos, RequestInterface $request)
    {
        $client = new GuzzleClient();
        $url = $sonos->getRequestUrl() . $request->getUrl();

        $result = $client->request('POST', $url, [
            'headers' => [
                "Content-Type" => "text/xml",
                "SOAPAction" => $request->getSoapAction()
            ],
            'body' => (string)$request->createEnvelope()
        ]);

        var_dump($result->getBody()->getContents());
    }
}

<?php

namespace PhpStock\HereApi;

class Geocode
{
    /**
     * request URL
     *
     * @var string
     */
    private string $url = 'https://geocoder.ls.hereapi.com/6.2/geocode.json';

    /**
     * Request result
     *
     * @var mixed
     */
    private mixed $result;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $locationId
     */
    public function __construct(string $apiKey, string $locationId)
    {
        $client = new Client($apiKey, ['locationid' => $locationId]);

        $this->result = $client->get($this->url);
    }

    /**
     * Result to array
     *
     * @return array
     */
    public function toArray(): array
    {
        $data = json_decode($this->result, true);

        return $data['Response']['View'][0]['Result'][0] ?? [];
    }
}

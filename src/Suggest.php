<?php

namespace PhpStock\HereApi;

class Suggest
{
    /**
     * request URL
     *
     * @var string
     */
    private string $url = 'https://autocomplete.geocoder.ls.hereapi.com/6.2/suggest.json';

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
     * @param string $query
     */
    public function __construct(string $apiKey, string $query)
    {
        $client = new Client($apiKey, ['query' => $query]);

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

        return $data['suggestions'] ?? [];
    }
}

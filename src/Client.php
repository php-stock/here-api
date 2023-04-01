<?php

namespace PhpStock\HereApi;

use GuzzleHttp\Client as GuzzleHttpClient;

class Client
{
    /**
     * HTTP client instance
     *
     * @var GuzzleHttpClient
     */
    private GuzzleHttpClient $client;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param array $query
     */
    public function __construct(string $apiKey, array $query = [])
    {
        $this->client = new GuzzleHttpClient([
            'query' => array_merge($query, ['apiKey' => $apiKey])
        ]);
    }

    /**
     * Get data
     *
     * @param string $uri
     * @return mixed
     */
    public function get(string $uri): mixed
    {
        return $this->client->get($uri)->getBody()->getContents();
    }
}

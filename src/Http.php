<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package google-image-search
 */
namespace odannyc\GoogleImageSearch;

use GuzzleHttp\Client;

/**
 * Class Http. Used for the http query.
 *
 * @package odannyc\GoogleImageSearch
 */
class Http
{
    public $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->client = new Client();
    }

    public function query($query)
    {
        return $this->client->get($this->config->baseUrl, ['query' => [
            'q' => $query,
            'cx' => $this->config->cx(),
            'key' =>$this->config->apiKey(),
            'searchType' => 'image'
        ]])->getBody();
    }
}

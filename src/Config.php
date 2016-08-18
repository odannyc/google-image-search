<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package google-image-search
 */
namespace odannyc\GoogleImageSearch;

/**
 * Class Config. Singleton pattern.
 *
 * @package odannyc\GoogleImageSearch
 */
class Config
{
    private static $instance = null;
    private $apiKey;
    private $cx;
    public $baseUrl = 'https://www.googleapis.com/customsearch/v1';

    /**
     * Sets or returns the instance.
     *
     * @return null
     */
    public static function instance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new Config();
        }
        return static::$instance;
    }

    /**
     * Sets or returns the api key.
     *
     * @param null $key
     * @return mixed
     */
    public function apiKey($key = null)
    {
        if (empty($key)) {
            return $this->apiKey;
        }

        $this->apiKey = $key;
    }

    /**
     * Sets or returns the cx.
     *
     * @param null $cx
     * @return mixed
     */
    public function cx($cx = null)
    {
        if (empty($cx)) {
            return $this->cx;
        }

        $this->cx = $cx;
    }
}

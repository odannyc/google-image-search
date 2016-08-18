<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package google-image-search
 */
namespace odannyc\GoogleImageSearch;

/**
 * Class ImageSearch. Used as the main entry point to search images.
 *
 * @package odannyc\GoogleImageSearch
 */
class ImageSearch
{
    /**
     * Used to search for images.
     *
     * @param $query
     * @return mixed
     */
    public function search($query)
    {
        return Image::search($query);
    }

    /**
     * Used to set or get config values.
     *
     * @return null
     */
    public function config()
    {
        return Config::instance();
    }
}

<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package google-image-search
 */
namespace odannyc\GoogleImageSearch;

/**
 * Class Image. Used to query google images.
 *
 * @package odannyc\GoogleImageSearch
 */
class Image
{
    public static function search($query)
    {
        $http = new Http(Config::instance());

        return json_decode((string) $http->query($query), true);
    }
}

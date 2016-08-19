<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package google-image-search
 */
namespace odannyc\tests;
use odannyc\GoogleImageSearch\ImageSearch;

/**
 * Class ImageSearchTest. Main test class for image search.
 */
class ImageSearchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Just a main image search test.
     */
    public function testImageSearch()
    {
        ImageSearch::config()->apiKey(GoogleCreds::$apiKey);
        ImageSearch::config()->cx(GoogleCreds::$cx);

        $this->assertArrayHasKey('items', ImageSearch::search('civic'));
    }
}

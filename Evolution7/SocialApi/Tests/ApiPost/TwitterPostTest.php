<?php

namespace Evolution7\SocialApi\Tests\ApiPost;

use Evolution7\SocialApi\ApiPost\TwitterPost;

class TwitterPostTest extends \PHPUnit_Framework_TestCase
{

    private function getTestRaw()
    {
        return '{
            "id_str": "1234567890",
            "text": "Say hello to my little friend",
            "user": {
                "screen_name": "Evolution_7"
            },
            "media": {
                "media_url": "http:\/\/pbs.twimg.com\/media\/A7EiDWcCYAAZT1D.jpg"
            }
        }';
    }

    public function testGetId()
    {
        $post = new TwitterPost($this->getTestRaw());
        $this->assertEquals('1234567890', $post->getId());
    }

    public function testGetBody()
    {
        $post = new TwitterPost($this->getTestRaw());
        $this->assertEquals('Say hello to my little friend', $post->getBody());
    }

    public function testGetUrl()
    {
        $post = new TwitterPost($this->getTestRaw());
        $this->assertEquals('https://twitter.com/Evolution_7/status/1234567890', $post->getUrl());
    }

    public function testGetUsername()
    {
        $post = new TwitterPost($this->getTestRaw());
        $this->assertEquals('Evolution_7', $post->getUsername());
    }
    
    public function testGetMediaUrl()
    {
        $post = new TwitterPost($this->getTestRaw());
        $this->assertEquals('http://pbs.twimg.com/media/A7EiDWcCYAAZT1D.jpg', $post->getMediaUrl());
    }
    
}

<?php

use YtCheck\Yt;

class YtTest extends \PHPUnit\Framework\TestCase
{
    public function testIfNotAvailableYoutubeVideoReutrnsEmptyObject()
    {
        $yt = new Yt('w');

        $this->assertFalse(property_exists($yt, 'title'));
    }

    public function testIfNotAvailableYoutubeVideoReutrnsFalse()
    {
        $yt = Yt::isValid('w');

        $this->assertFalse($yt);
    }

    public function testIfAvailableYoutubeVideoReutrnsTrue()
    {
        $yt = Yt::isValid('BUykFA7FCo4');

        $this->assertTrue($yt);
    }

    public function testIfAvailableYoutubeVideoWorksFine()
    {
        $yt = new Yt('https://www.youtube.com/shorts/BUykFA7FCo4');

        $this->assertEquals('Send this video to your friends without any title||Not clickbait||#shorts', $yt->title);
    }
}
<?php

namespace YtCheck;

use YtCheck\Inc\Request;
use YtCheck\Inc\Validator;

class Yt
{
    use Validator;

    /**
     * Does something interesting ;)
     *
     * @param String $id Id or Url of the youtube video
     * @throws null
     * @return Yt $this
     */
    public function __construct(String $id)
    {
        $oembed = self::oembed($id);

        if ($oembed !== NULL) {

            foreach ($oembed as $key => $value) {
                $this->{$key} = $value;
            }

        }

        return $this;
    }

    /**
     * Gets video oembed from youtube oembed.
     *
     * @param String $id Id or Url of the youtube video
     * @throws null
     * @return Object $video An object of oemeded video
     */
    public static function oembed(String $id)
    {
        $id = self::validateId($id);

        if (!$id) {
            return null;
        }

        $url = "https://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=$id&format=json";

        $video = Request::get($url);

        return $video ? (object) json_decode($video, true) : null;
    }
    
    /**
     * Checks if the video is available or not.
     *
     * @param String $id Id or Url of the youtube video
     * @return Bool
     */
    public static function isValid(String $id)
    {
        return self::oembed($id) ? true : false;
    }
}
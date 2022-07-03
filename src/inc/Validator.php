<?php

namespace YtCheck\Inc;

trait Validator
{
    /**
     * Validates video id.
     *
     * 
     * @param String $id Id or Url of the youtube video
     * @throws null
     * @return String $id
     */
    public static function validateId(String $id) {
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $id, $matches);
    
        if (isset($matches[1])) {
            return $matches[1];
        } else {
            if (strlen($id) !== 11) {
                return null;
            }
            return $id;
        }
    }
}
<?php

use JetBrains\PhpStorm\Pure;

class CCreatePostValidation
{
    public static function validateHeadline(String $Headline) : bool
    {
        if(strlen($Headline)<=30 && strlen($Headline) != 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function validateHashtags(String $Hashtag) : bool
    {

        if(strlen($Hashtag) != 0 && strlen($Hashtag)<=20 && str_starts_with($Hashtag,'#'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function validatePictureFile(String $PictureFile) : bool
    {
        if(strlen($PictureFile)<=1024 && strlen($PictureFile)!=0 &&
            (str_ends_with($PictureFile,".png") || str_ends_with($PictureFile,".jpg") || str_ends_with($PictureFile,".jpeg")))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function validateTextFile(String $Textfile) : bool
    {
        if(strlen($Textfile)<=1024 && strlen($Textfile) != 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    #[Pure] public static function validateAll($PictureFile, $Heading, $Hashtags, $PostTextfile, $Longitude, $Latitude) : bool
    {
        if(is_string($PictureFile) && is_string($Heading) && is_string($Hashtags) && is_string($PostTextfile)
            && is_string($Longitude) && is_string($Latitude))

        {
            if(self::validatePictureFile($PictureFile) && self::validateHashtags($Hashtags) && self::validateHeadline($Heading) && self::validateTextFile($PostTextfile) === true )
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 06/06/17
 * Time: 10:36
 */

namespace AppBundle\Services;


class Sluggyfier
{

    /**
     *
     */
    public function slugTitle($title)
    {
        $result = preg_replace('/\W/','-',strtolower($title));

        return trim($result, '-');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 18:47
 */

namespace Core\Common\Entity;


abstract class AbstractEntity
{
    public static function uuid(String $id = '') {
        return new Uuid($id);
    }
}
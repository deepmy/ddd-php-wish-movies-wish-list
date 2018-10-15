<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 18:49
 */

namespace Core\Common\Entity;


class Entity extends AbstractEntity
{
    protected $id;

    public function __construct()
    {
        $this->id = self::uuid()->getId();
    }

    public function getId() {
        return $this->id;
    }
}
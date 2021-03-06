<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 16:27
 */

namespace Core\Domain\Entity;


use Core\Common\Entity\Entity;

class Wish extends Entity
{
    /** @var User */
    private $user;

    /** @var Movie */
    private $movie;

    /** @var \DateTime */
    private $createdAt;

}
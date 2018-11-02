<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 17:08
 */

namespace Core\Domain\Entity;


use Core\Common\Entity\Entity;

class Friend extends Entity
{

    /** @var User */
    private $user;

    /** @var String */
    private $friendId;

    /** @var String */
    private $state;

    /** @var \DateTime */
    private $createdAt;
}
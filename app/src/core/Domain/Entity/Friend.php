<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 17:08
 */

namespace Core\Domain\Entity;


use Core\Common\Entity\Entity;
use Core\Common\Enum\State;

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

    public static function add(User $user, String $friendId) {
        $friend = new Friend();

        $friend->user = $user;
        $friend->friendId = $friendId;
        $friend->state = State::ACTIVE;
        $friend->createdAt = new \DateTime();

        return $friend;
    }
}
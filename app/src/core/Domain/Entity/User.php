<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 12:38
 */

namespace Core\Domain\Entity;


use Core\Common\Entity\Entity;
use Core\Domain\ValueObject\Address;
use Core\Domain\ValueObject\Contact;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;

/**
 * The User class demonstrates how to annotate a simple
 * PHP class to act as a Doctrine entity.
 *
 * @ORM\Entity()
 * @ORM\Table(name="user")
 */
class User extends Entity
{

//    /** @var Contact */
//    private $contact;
//
//    /** @var Address */
//    private $address;
//
//    /** @var Wish[] */
//    private $wishes;

    private $username;

    private $name;

//    /** @var Friend[] */
//    private $friends;
//
//    /** @var String */
//    private $password;

    private $createdAt;

    public static function create($username, $name) {
        $user = new User();
        $user->username = $username;
        $user->name = $name;
        $user->createdAt =  new \DateTime();

        return $user;
    }
}
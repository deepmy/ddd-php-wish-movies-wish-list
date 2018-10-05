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

class User extends Entity
{

    /** @var Contact */
    private $contact;

    /** @var Address */
    private $address;

    /** @var Wish[] */
    private $wishes;

    /** @var String */
    private $username;

    /** @var Friend[] */
    private $friends;

    /** @var String */
    private $password;

    /** @var \DateTime */
    private $createdAt;
}
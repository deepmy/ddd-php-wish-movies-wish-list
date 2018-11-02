<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 13:06
 */

namespace Core\Domain\ValueObject;


class Contact
{
    /** @var String */
    private $name;

    /** @var String */
    private $surname;

    /** @var String */
    private $phone;

    /** @var String */
    private $email;

    public static function create(String $name, String $surname, String $phone, String $email) {
        $contact = new Contact();

        $contact->name = $name;
        $contact->phone = $phone;
        $contact->email = $email;
        $contact->surname = $surname;

        return $contact;
    }
}
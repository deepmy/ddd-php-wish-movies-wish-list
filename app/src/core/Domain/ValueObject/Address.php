<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 14:04
 */

namespace Core\Domain\ValueObject;


class Address
{
    /** @var String */
    private $country;

    /** @var String */
    private $city;

    /** @var String */
    private $homeAddress;

    public static function create(String $country, String $city, String $homeAddress) {
        $address = new Address();

        $address->country = $country;
        $address->city = $city;
        $address->homeAddress = $homeAddress;

        return $address;
    }
}
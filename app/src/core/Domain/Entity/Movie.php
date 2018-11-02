<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 14:39
 */

namespace Core\Domain\Entity;


use Core\Common\Entity\Entity;
use Core\Common\Enum\State;

class Movie extends Entity
{
    /** @var String */
    private $name;

    /** @var Wish[] */
    private $wishes;

    /** @var String */
    private $synopsis;

    /** @var \DateTime */
    private $createdAt;

    /** @var String */
    private $status;

    public static function create(String $name, String $synopsis = null) {
        $movie = new Movie();

        $movie->name = $name;
        $movie->synopsis = $synopsis;
        $movie->status = State::ACTIVE;
        $movie->createdAt = new \DateTime();

        return $movie;
    }
}
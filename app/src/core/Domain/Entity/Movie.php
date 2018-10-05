<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 14:39
 */

namespace Core\Domain\Entity;


use Core\Common\Entity\Entity;

class Movie extends Entity
{
    /** @var String */
    private $name;

    /** @var Wish[] */
    private $wishes;

    /** @var String */
    private $sinopsis;

    /** @var \DateTime */
    private $createdAt;

    /** @var String */
    private $status;
}
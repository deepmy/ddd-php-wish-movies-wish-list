<?php
/**
 * Created by PhpStorm.
 * User: testuser
 * Date: 30/09/18
 * Time: 18:40
 */

namespace Core\Common\Entity;

use Ramsey\Uuid\Uuid as Uid;

class Uuid
{
    /** @var String */
    private $id;

    /**
     * Uuid constructor.
     * @param string $id
     * @throws \Exception
     */
    public function __construct($id = '')
    {
        $this->setId($id);
    }

    /**
     * @param $id
     * @throws \Exception
     */
    private function setId($id) {
        if (! is_string($id)) {
            throw new \Exception("El id debe ser un string");
        }

        if ($id == '') {
            $this->id = Uid::uuid4();
        } else {
            if (! Uid::isValid($id)) {
                throw new \Exception("El id debe ser del tipo uuid");
            }
            $this->id = $id;
        }
    }

    public function getId() {
        return $this->id;
    }
}
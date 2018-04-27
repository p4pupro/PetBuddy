<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Domingo Perez <domingoperezgerrero@gmail.com>
 */


/**
 * @ORM\Entity(repositoryClass="App\Repository\PetsRepository")
 */
class Pets
{
    /**
     * var $id
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var $name
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var PetType $type
     * @ORM\ManyToOne(targetEntity="App\Entity\PetType")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }


}

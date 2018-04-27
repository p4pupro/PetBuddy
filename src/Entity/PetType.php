<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Domingo Perez <domingoperezgerrero@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="App\Repository\PetTypeRepository")
 */
class PetType
{
    /**
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
     * @var $pets
     * @ORM\OneToMany(targetEntity="App\Entity\Pets", mappedBy="type")
     */
    private $pets;

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
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * @param mixed $pets
     */
    public function setPets($pets): void
    {
        $this->pets = $pets;
    }



}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HotelsRepository")
 */
class Hotels
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var $name
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var $rooms
     * @ORM\OneToMany(targetEntity="App\Entity\Room", mappedBy="hotel")
     */
    private $rooms;

    /**
     * @var $maxRooms
     * @ORM\Column(name="maxRooms", type="integer", nullable=false)
     */
    private $maxRooms;

    /**
     * @var $reservedRooms
     * @ORM\OneToMany(targetEntity="App\Entity\ReservedRooms", mappedBy="hotel")
     */
    private $reservedRooms;

    /**
     * @var $enable
     * @ORM\Column(name="enable", type="boolean")
     */
    private $enable;

    /**
     * @var $createdAt
     *@ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var $updateAt
     *@ORM\Column(name="update_at", type="datetime")
     */
    private $updateAt;

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
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param mixed $rooms
     */
    public function setRooms($rooms): void
    {
        $this->rooms = $rooms;
    }

    /**
     * @return mixed
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * @param mixed $enable
     */
    public function setEnable($enable): void
    {
        $this->enable = $enable;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * @param mixed $updateAt
     */
    public function setUpdateAt($updateAt): void
    {
        $this->updateAt = $updateAt;
    }

    /**
     * @return mixed
     */
    public function getMaxRooms()
    {
        return $this->maxRooms;
    }

    /**
     * @param mixed $maxRooms
     */
    public function setMaxRooms($maxRooms): void
    {
        $this->maxRooms = $maxRooms;
    }

    /**
     * @return mixed
     */
    public function getReservedRooms()
    {
        return $this->reservedRooms;
    }

    /**
     * @param mixed $reservedRooms
     */
    public function setReservedRooms($reservedRooms): void
    {
        $this->reservedRooms = $reservedRooms;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Domingo Perez <domingoperezgerrero@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="App\Repository\OccupiedRoomsRepository")
 */
class OccupiedRooms
{
    /**
     * @var $id
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var $room
     * @ORM\OneToOne(targetEntity="App\Entity\Room")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    private $room;

    /**
     * @var $pet
     * @ORM\OneToOne(targetEntity="App\Entity\Pets")
     * @ORM\JoinColumn(name="pet_id", referencedColumnName="id")
     */
    private $pet;

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
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param mixed $room
     */
    public function setRoom($room): void
    {
        $this->room = $room;
    }

    /**
     * @return mixed
     */
    public function getPet()
    {
        return $this->pet;
    }

    /**
     * @param mixed $pet
     */
    public function setPet($pet): void
    {
        $this->pet = $pet;
    }






}

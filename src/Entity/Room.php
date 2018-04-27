<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Domingo Perez <domingoperezgerrero@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 */
class Room
{
    /**
     * @var $id
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var $number
     * @ORM\Column(name="code", type="integer")
     */
    private $number;


    /**
     * @var $occupiedRoom
     * @ORM\Column(name="occupied_room", type="integer")
     */
    private $occupiedRoom;


    /**
     * @var $hotel
     * @ORM\ManyToOne(targetEntity="App\Entity\Hotels")
     * @ORM\JoinColumn(name="hotel_id", referencedColumnName="id")
     */
    private $hotel;


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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param mixed $hotel
     */
    public function setHotel($hotel): void
    {
        $this->hotel = $hotel;
    }

    /**
     * @return mixed
     */
    public function getOccupiedRoom()
    {
        return $this->occupiedRoom;
    }

    /**
     * @param mixed $occupiedRoom
     */
    public function setOccupiedRoom($occupiedRoom): void
    {
        $this->occupiedRoom = $occupiedRoom;
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

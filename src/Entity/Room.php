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
     * @var $hotel
     * @ORM\ManyToOne(targetEntity="App\Entity\Hotels")
     * @ORM\JoinColumn(name="hotel_id", referencedColumnName="id")
     */
    private $hotel;



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





}

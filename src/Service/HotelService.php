<?php
/**
 * Created by PhpStorm.
 * User: A664477
 * Date: 25/04/2018
 * Time: 16:30
 */

namespace App\Service;


use App\Entity\Hotels;
use App\Entity\ReservedRooms;
use App\Entity\Room;
use Doctrine\ORM\EntityManager;

class HotelService
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Find All reserved rooms by hotels
     * @return array
     * @author Domingo Perez <domingoperezgerrero@gmail.com>
     */
    public function findReservedRoomForAllHotels()
    {
        $hotels = $this->entityManager->getRepository(Hotels::class)
            ->findAll();

        $totalReservedRooms = $this->entityManager->getRepository(ReservedRooms::class)
            ->findAll();

        $rooms = $this->entityManager->getRepository(Room::class)
            ->findAll();


        $counter = 0;
         foreach ($totalReservedRooms as $totalReservedRoom)
        {
            $counter += 1;
        }


        $data = [];

        foreach ($hotels as $hotel) {
            $occupiedRooms = [];

                foreach ($rooms as $occupiedRoom) {

                    $occupiedRooms = [
                        'petId' => $occupiedRoom->getPet() ? $occupiedRoom->getPet()->getId() : null,
                        'petType' =>  $occupiedRoom->getPet() ? $occupiedRoom->getPet()->getType()->getId() : null,
                        'petName' => $occupiedRoom->getPet() ? $occupiedRoom->getPet()->getName() : null
                    ];

                }

            $data[] = [
                [

                    'active' => $hotel->getEnable(),
                    'maxRooms' => $hotel->getMaxRooms(),
                    'rooms' => $occupiedRooms
                ]
            ];


        }
        
        return $data;
    }

    /**
     * Disable hotel to maintenance.
     * @param integer $hotelId
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @author Domingo Perez <domingoperezgerrero@gmail.com>
     */
    public function disableHotelByHotelId($hotelId)
    {
       $hotel = $this->entityManager->getRepository(Hotels::class)
           ->find($hotelId);

       $hotel->setEnable(false);
       $this->entityManager->flush($hotel);
    }

    /**
     * Book a room from any hotel.
     * @param json $data
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @author Domingo Perez <domingoperezgerrero@gmail.com>
     */

    public function bookRoom($pet_id)
    {
        $hotels = $this->entityManager->getRepository(Hotels::class)
            ->findAll();

        $rooms = $this->entityManager->getRepository(Room::class)
            ->findAll();

    }

}
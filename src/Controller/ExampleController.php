<?php

namespace App\Controller;

use App\Entity\Hotels;
use App\Entity\ReservedRooms;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Domingo Perez <domingoperezgerrero@gmail.com>
 */

/**
 * @Rest\Route("/api", name="api_")
 */
class ExampleController extends FOSRestController
{
    /**
     * @Rest\Get("/find-all-reserved-rooms", name="find_reserved_rooms")
     */
    public function findReservedRoomsByHotels()
    {
        $data = $this->get('app.service.hotel_service')->findReservedRoomForAllHotels();
        return new View($data, Response::HTTP_OK);
    }


    /**
     * @Rest\Post("/disable-hotel", name="disable_hotel")
     * @Rest\QueryParam(name="hotelId", requirements="\d+", nullable=false, default="null")
     */
    public function disableHotel(Request $request)
    {
        $hotelId = +$request->get('hotelId');
        if($hotelId) {
            $this->get('app.service.hotel_service')->disableHotelByHotelId($hotelId);
            return new View(['message' => 'Operation successful'], Response::HTTP_OK);
        } else {
            return new View(['message' => 'Missing query param'], Response::HTTP_BAD_REQUEST);
        }
    }


    /**
     * @Rest\Post("/book-room", name="book_room")
     * @Rest\QueryParam(name="hotelId", requirements="\d+", nullable=false, default="null")
     */
    public function bookRoom(Request $request)
    {
        $data = $request->get();
        if($data) {
            $this->get('app.service.hotel_service')->bookRoom($data);
            return new View(['message' => 'Operation successful'], Response::HTTP_OK);
        } else {
            return new View(['message' => 'Missing query param'], Response::HTTP_BAD_REQUEST);
        }

    }
}

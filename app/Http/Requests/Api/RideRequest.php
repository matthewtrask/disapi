<?php

declare(strict_types=1);

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RideRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function getName() : string
    {
        return $this->get('name');
    }

    public function getParkId() : int
    {
        return $this->get('parkId');
    }

    public function getOpeningYear() : int
    {
        return $this->get('opening_year');
    }

    public function getRideType() : string
    {
        return $this->get('ride_type');
    }

    public function getRideVehicle() : string
    {
        return $this->get('ride_vehicle');
    }

    public function getInteractiveQueue() : bool
    {
        return $this->get('interactive_queue');
    }

    public function getGiftStoreFinish() : bool
    {
        return $this->get('gift_store_finish');
    }

    public function getSingleRider() : bool
    {
        return $this->get('single_rider');
    }

    public function getRidePhoto() : bool
    {
        return $this->get('ride_photo');
    }

    public function getHeightRestriction() : bool
    {
        return $this->get('height_restriction');
    }

    /** @return string[] */
    public function rules() : array
    {
        return [
            'name'              => 'required|string',
            'parkId'            => 'required|int',
            'openingYear'       => 'required|int',
            'rideType'          => 'required|string',
            'rideVehicle'       => 'required|string',
            'interactiveQueue'  => 'required|boolean',
            'giftStoreFinish'   => 'required|boolean',
            'singleRider'       => 'required|boolean',
            'ridePhoto'         => 'required|boolean',
            'heightRestriction' => 'required|boolean',
        ];
    }
}

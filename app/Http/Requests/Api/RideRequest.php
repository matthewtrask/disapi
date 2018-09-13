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
        return $this->get('openingYear');
    }

    public function getRideType() : string
    {
        return $this->get('rideType');
    }

    public function getRideVehicle() : string
    {
        return $this->get('rideVehicle');
    }

    public function getInteractiveQueue() : bool
    {
        return (bool) $this->get('interactiveQueue');
    }

    public function getGiftStoreFinish() : bool
    {
        return (bool) $this->get('giftStoreFinish');
    }

    public function getSingleRider() : bool
    {
        return (bool) $this->get('singleRider');
    }

    public function getRidePhoto() : bool
    {
        return (bool) $this->get('ridePhoto');
    }

    public function getHeightRestriction() : bool
    {
        return (bool) $this->get('heightRestriction');
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

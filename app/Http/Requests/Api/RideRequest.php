<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function getId() : int
    {
        return $this->get('id');
    }

    public function getName() : string
    {
        return $this->get('name');
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|int',
        ];
    }
}

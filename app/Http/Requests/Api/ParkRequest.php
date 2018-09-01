<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ParkRequest extends FormRequest
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

    public function getName() : string
    {
        return $this->get('name');
    }

    public function getCentralAttraction() : string
    {
        return $this->get('centralAttraction');
    }

    public function getYearOpened() : int
    {
        return $this->get('yearOpened');
    }

    public function getRideCount() : int
    {
        return $this->get('rideCount');
    }

    public function getResortCount() : int
    {
        return $this->get('resortCount');
    }

    public function getRestaurantCount() : int
    {
        return $this->get('restaurantCount');
    }

    public function getSize() : int
    {
        return $this->get('size');
    }

    public function getFireworks() : int
    {
        return $this->get('fireworks');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|string',
            'centralAttraction' => 'required|string',
            'yearOpened'        => 'required|integer',
            'rideCount'         => 'required|integer',
            'restaurantCount'   => 'required|integer',
            'resortCount'       => 'required|integer',
            'size'              => 'required|integer',
            'fireworks'         => 'required|integer',
        ];
    }
}

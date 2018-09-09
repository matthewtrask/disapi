<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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

    public function getParkId() : int
    {
        return $this->get('parkId');
    }

    public function getQuickService() : bool
    {
        return $this->get('quickService');
    }

    public function getTableService() : bool
    {
        return $this->get('tableService');
    }

    public function getAlcohol() : bool
    {
        return $this->get('alcohol');
    }

    public function getDiningPlan() : bool
    {
        return $this->get('diningPlan');
    }

    public function getMealTypes() : array
    {
        return $this->get('mealTypes');
    }

    public function getFoodTypes() : array
    {
        return $this->get('foodTypes');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'parkId' => 'required|integer',
            'quickService' => 'required|boolean',
            'tableService' => 'required|boolean',
            'alcohol' => 'required|boolean',
            'diningPlan' => 'required|boolean',
            'mealTypes' => 'required|array',
            'foodTypes' => 'required|array'
        ];
    }
}

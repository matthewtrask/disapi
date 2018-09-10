<?php

declare(strict_types=1);

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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

    public function getQuickService() : bool
    {
        return (bool) $this->get('quickService');
    }

    public function getTableService() : bool
    {
        return (bool) $this->get('tableService');
    }

    public function getAlcohol() : bool
    {
        return (bool) $this->get('alcohol');
    }

    public function getDiningPlan() : bool
    {
        return (bool) $this->get('diningPlan');
    }

    /** @return string[] */
    public function getMealTypes() : array
    {
        return $this->get('mealTypes');
    }

    /** @return string[] */
    public function getFoodTypes() : array
    {
        return $this->get('foodTypes');
    }

    /** @return string[] */
    public function rules() : array
    {
        return [
            'name' => 'required|string',
            'parkId' => 'required|integer',
            'quickService' => 'required|boolean',
            'tableService' => 'required|boolean',
            'alcohol' => 'required|boolean',
            'diningPlan' => 'required|boolean',
            'mealTypes' => 'required|array',
            'foodTypes' => 'required|array',
        ];
    }
}

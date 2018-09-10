<?php

declare(strict_types=1);

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ResortsRequest extends FormRequest
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

    public function getResortType() : string
    {
        return $this->get('resortType');
    }

    public function getTransportOptions() : string
    {
        return $this->get('transportOptions');
    }

    public function getCategory() : string
    {
        return $this->get('category');
    }

    public function getNumOfRooms() : int
    {
        return $this->get('numOfRooms');
    }

    public function getQuickServiceRestaurants() : bool
    {
        return $this->get('quickServiceRestaurants');
    }

    public function getTableServiceRestaurants() : bool
    {
        return $this->get('tableServiceRestaurants');
    }

    public function getGiftShop() : bool
    {
        return $this->get('giftShop');
    }

    public function getArcade() : bool
    {
        return $this->get('giftShop');
    }

    public function getPool() : bool
    {
        return $this->get('pool');
    }

    /** @return string[] */
    public function rules() : array
    {
        return [
            'name'                      => 'required|string',
            'parkId'                    => 'required|int',
            'resortType'                => 'required|string',
            'transportOptions'          => 'required|string',
            'category'                  => 'required|string',
            'numOfRooms'                => 'required|int',
            'quickServiceRestaurants'   => 'required|bool',
            'tableServiceRestaurants'   => 'required|bool',
            'giftShop'                  => 'required|bool',
            'arcade'                    => 'required|bool',
            'pool'                      => 'required|bool',
        ];
    }
}

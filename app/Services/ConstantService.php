<?php

declare(strict_types=1);

namespace App\Services;

class ConstantService
{
    public const ACCEPT_CONTENT = 'identity';

    public const CONTENT_TYPE = 'application/json';

    public const ACCEPT_TYPE = 'application/json';

    public const MK_ID = 1;

    public const EP_ID = 2;

    public const HS_ID = 3;

    public const AK_ID = 4;

    public const MK = 'Magic Kingdom';

    public const EP = 'Epcot';

    public const HS = 'Hollywood Studios';

    public const AK = 'Animal Kingdom';

    public const PARK = 'park';

    public const RIDE = 'ride';

    public const RESORT = 'resort';

    public const RESTAURANT = 'restaurant';

    public const MK_CENTRAL_ATTRACTION = 'Cinderella\'s Castle';

    public const EP_CENTRAL_ATTRACTION = 'Spaceship Earth';

    public const HS_CENTRAL_ATTRACTION = 'The Chinese Theater';

    public const AK_CENTRAL_ATTRACTION = 'The Tree of Life';

    public const API_ENDPOINT = 'https://disapi.co/api/%s/%s';

    public const PARKS_ENDPOINT = 'parks';

    public const RIDES_ENDPONT = 'rides';

    public const RESTAURANTS_ENDPOINT = 'restaurants';

    public const RESORTS_ENDPONT = 'resorts';

    public const GET_ACTION = 'get';

    public const POST_ACTION = 'post';

    public const PUT_ACTION = 'put';

    public const DELETE_ACTION = 'delete';
}

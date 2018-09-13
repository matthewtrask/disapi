<?php

namespace App\Listeners;

use App\Events\UserHitEndpoint;
use App\Models\Activity;

class HandleUserActivity
{
    public function handle(UserHitEndpoint $event) : void
    {
        $activity = new Activity();
        $activity->setUserToken($event->getToken());
        $activity->setEndpoint($event->getEndpoint());
        $activity->setAction($event->getAction());
        $activity->setSuccess($event->getSuccess());
        $activity->setError($event->getError());

        $activity->save();
    }
}

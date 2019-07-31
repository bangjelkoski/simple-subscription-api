<?php

namespace App\Enums;

abstract class SubscriberState
{
    const ACTIVE = 'active';
    const JUNK = 'junk';
    const UNSUBSCRIBED = 'unsubscribed';
    const BOUNCED = 'bounced';
    const UNCONFIRMED = 'unconfirmed';

    public static function getStates()
    {
        return [
            static::ACTIVE,
            static::JUNK,
            static::UNCONFIRMED,
            static::UNSUBSCRIBED,
            static::BOUNCED,
        ];
    }
}

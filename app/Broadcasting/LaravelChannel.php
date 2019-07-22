<?php

namespace DemoLaravel\Broadcasting;

use DemoLaravel\User;

class LaravelChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \DemoLaravel\User  $user
     * @return array|bool
     */
    public function join(User $user)
    {
        //
    }
}

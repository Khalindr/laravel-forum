<?php

namespace App\Policies;

use App\Message;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class policy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //        $this->authorize("manage",$message);

    public function manage (User $user, Message $message){
        return ($user->id == $message->user_id);
    }

}

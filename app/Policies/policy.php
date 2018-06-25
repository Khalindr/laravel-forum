<?php

namespace App\Policies;

use App\Message;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class policy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(User $user, Message $message)
    {
        return TRUE;
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id > 0;
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $user, Message $message )
    {
        return $user->id == $message->user_id;
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\User  $user
*     * @return mixed
     */
    public function delete(User $user, Message $message)
    {
        return $user->id == $message->user_id;
    }

}

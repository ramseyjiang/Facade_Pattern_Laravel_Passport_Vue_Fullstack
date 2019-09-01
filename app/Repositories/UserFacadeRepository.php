<?php

namespace Fspafs\Repositories;

use Fspafs\Contracts\Repositories\UserRepositoryContract;
use Fspafs\Models\User;

class UserFacadeRepository implements UserRepositoryContract
{
    /**
     * Find a user info
     *
     * @param integer $userId
     * @return void
     */
    public function findOne(int $userId)
    {
        return User::find($userId);
    }

    /**
     * Create a user.
     *
     * @param array $data
     * @return void
     */
    public function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    /**
     * Update a user info.
     *
     * @param array $data
     * @return void
     */
    public function updateUser(array $data)
    {

    }

    public function deleteUserByEmail(string $email)
    {
        return User::where('email',$email)->delete();
    }
}
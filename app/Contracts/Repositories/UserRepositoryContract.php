<?php

namespace Fspafs\Contracts\Repositories;

interface UserRepositoryContract
{
    /**
     * Find a user info
     *
     * @param integer $userId
     * @return void
     */
    public function findOne(int $userId);

    /**
     * Create a user.
     *
     * @param array $data
     * @return void
     */
    public function createUser(array $data);

    /**
     * Update a user info.
     *
     * @param array $data
     * @return void
     */
    public function updateUser(array $data);

    /**
     * Delete a user by email
     *
     * @param string $email
     * @return void
     */
    public function deleteUserByEmail(string $email);
}
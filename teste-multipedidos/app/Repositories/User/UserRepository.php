<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Base\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    protected function getEntityName()
    {
        return 'usuário';
    }

    protected function handleDeleteRelations($user)
    {
        $user->cars()->detach();
    }
}
<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    /**
     * 建立一個新的控制器實例。
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
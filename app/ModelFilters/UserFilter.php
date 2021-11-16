<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class UserFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function firstname($firstName)
    {
        return $this->where(function($q) use ($firstName) {
            return $q->where('firstname', 'LIKE', "%$firstName%");
        });
    }

    public function email($email)
    {
        return $this->where(function($q) use ($email) {
            return $q->where('email', '=', $email);
        });
    }

    public function userNicknames($nickname)
    {
        return $this->related('userNicknames', 'nickname','LIKE', "%$nickname%");
    }
}

<?php

namespace App\Models;

use App\ModelFilters\UserFilter;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Filterable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'housenumber',
        'postalcode',
        'postalcode',
        'city',
        'email',
        'gender',
    ];

    public function userNicknames()
    {
        return $this->hasMany(UserNickname::class);
    }

    /**
     * @return string|null
     */
    public function modelFilter()
    {
        return $this->provideFilter(UserFilter::class);
    }
}

<?php

namespace {{App\}}Models;

use Laravel\Cashier\Billable;
use {{App\}}Models\User;
use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    use Billable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_meta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'phone',
        'is_active',
        'activation_token',
        'marketing',
        'stripe_id',
        'card_brand',
        'card_last_four',
        'terms_and_cond',
    ];

    /**
     * User
     *
     * @return Relationship
     */
    public function user()
    {
        return User::where('id', $this->user_id)->first();
    }
}

<?php

namespace DemoLaravel;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use SoftDeletes;

    protected $table = 'password_resets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'token',
    ];
}

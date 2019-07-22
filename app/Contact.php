<?php

namespace DemoLaravel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'url',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}

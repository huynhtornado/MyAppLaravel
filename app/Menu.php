<?php

namespace DemoLaravel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{

    use SoftDeletes;

    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'url',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}

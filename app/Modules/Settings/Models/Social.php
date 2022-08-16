<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model {

    protected $table = 'socials';
    protected $fillable = [
        'id',
        'created_at'
    ];

}

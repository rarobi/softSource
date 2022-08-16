<?php

namespace App\Modules\Portfolio\Models;

use App\Modules\Category\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {

    protected $table = 'portfolios';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}

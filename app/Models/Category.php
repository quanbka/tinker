<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    protected $table = 'chi_category';

    protected $appends = ['url'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('sort', function (Builder $builder) {
            $builder->orderBy('chi_category.sorder', 'desc')
                    ->orderBy('chi_category.id', 'asc');
        });
    }

    // Begin Relationship

    public function children () {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'chi_product_n_category');
    }

    // End Relationship

    // Begin overwrite attribute

    public function getUrlAttribute () {
            return route('category', ['slug' => $this->slug, 'id' => $this->id]);
    }

    // End overwrite attribute


}

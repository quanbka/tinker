<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    protected $table = 'chi_product';
    protected $appends = ['url'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('sort', function (Builder $builder) {
            $builder->orderBy('chi_product.sorder', 'desc')
                    ->orderBy('chi_product.id', 'desc');
        });
    }

    public function getImageUrlAttribute ($value) {
        return "https://chiaki.vn/upload/$value";
    }

    public function getUrlAttribute ($value) {
        if ($value) {
            return $value;
        }
        return route('category', ['slug' => $this->slug, 'id' => $this->id]);
    }

}

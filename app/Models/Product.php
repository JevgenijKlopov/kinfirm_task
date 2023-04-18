<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'photo',
        'size',
        'tags',
        'description'
    ];
    protected $casts = [
        'tags' => 'array'
    ];
    public $with = ['stocks'];
    public function stocks(): BelongsTo
    {
        return $this->belongsTo(Stock::class, 'sku', 'sku');
    }
}

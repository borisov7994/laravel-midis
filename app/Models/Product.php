<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'user_id',
        'status', // Добавляем статус
        'status_reason' // Причина изменения статуса
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

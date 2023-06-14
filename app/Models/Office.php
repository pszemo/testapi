<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    use HasFactory;

    protected $fillable =
        ['name', 'address', 'description'];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
    public function cats(): HasMany
    {
        return $this->hasMany(Cat::class);
    }
}

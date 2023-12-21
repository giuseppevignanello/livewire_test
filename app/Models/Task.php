<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'deadline',
        'user_id'
    ];

    protected $casts = [
        'deadline' => 'date',
        'user_id' => 'integer',
        'status' => Status::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

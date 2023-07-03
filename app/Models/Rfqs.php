<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rfqs extends Model
{
    use HasFactory;

    protected $fillable = [
        'rfq_no',
        'rfq_date',
        'unit_code',
        'status',
        'vessel_id',
        'user_id',
        'service_type'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detail(): HasMany
    {
        return $this->hasMany(RFQDetail::class, 'rfq_id');
    }
}

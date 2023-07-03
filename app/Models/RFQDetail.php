<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RFQDetail extends Model
{
    use HasFactory;
    protected $table = "rfq_details";
    public function rfq(): BelongsTo
    {
        return $this->belongsTo(Rfqs::class, 'rfq_id');
    }
}

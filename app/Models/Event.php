<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function masterEvent()
    {
        return $this->belongsTo(MasterEvent::class, 'event_master_id');
    }
}

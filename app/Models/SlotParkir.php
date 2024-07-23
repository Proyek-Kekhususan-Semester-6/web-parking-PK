<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotParkir extends Model
{
    use HasFactory;
    protected $table = 'slot_parkir';
    protected $primaryKey = 'id_slot_parkir';
    protected $guarded = ['id_slot_parkir'];
}

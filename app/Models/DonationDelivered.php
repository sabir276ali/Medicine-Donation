<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationDelivered extends Model
{
    use HasFactory;
    protected $fillable=[
        'email',
        'd_id',
        'p_id',
    ];
}

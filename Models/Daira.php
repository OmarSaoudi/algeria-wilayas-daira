<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'ar_name',
        'wilaya_id',
    ];

    public function wilaya()
    {
       return $this->belongsTo(Wilaya::class);
    }
}

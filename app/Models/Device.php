<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = ['name','user_id','manufacture_id'];
    public function manufactures()
    {
        return $this->belongsTo(Manufacture::class, 'manufacture_id');
    }
    public function repairs()
    {
        return $this->hasMany(Repair::class, 'device_id','id');
    }
    protected $casts = [
        'created_at' => 'datetime:M d, Y h:i:s',
        'updated_at' => 'datetime:M d, Y h:i:s',
    ];
}

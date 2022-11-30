<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairProduct extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','device_id','manufacture_id','repair_id','title','sub_title','description','real_price','sale_price','quantity','status','seo_title','meta_description','image'];
    public function manufactures()
    {
        return $this->belongsTo(Manufacture::class, 'manufacture_id');
    }
    public function repairs()
    {
        return $this->belongsTo(Repair::class, 'repair_id');
    }
    public function devices()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }
    protected $casts = [
        'created_at' => 'datetime:M d, Y h:i:s',
        'updated_at' => 'datetime:M d, Y h:i:s',
    ];
}

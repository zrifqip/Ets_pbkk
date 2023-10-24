<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'kondisi_id',
        'keterangan',
        'kecacatan',
        'Jumlah',
        'Gambar'
    ];
    public function category(){
        return $this->hasOne(Category::class,'id');
    }
    public function condition(){
        return $this->hasOne(Kondisi::class,'id');
    }

}

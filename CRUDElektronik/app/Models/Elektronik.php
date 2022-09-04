<?php

namespace App\Models;

use App\Models\ElektronikType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Elektronik extends Model
{
    use HasFactory;

    protected $table ='elektroniks';
    // protected $fillable =['item_type_id','name', 'qty', 'price'];
    protected $guarded = [];

    public function elektronikType()
    {
        return $this->belongsTo(ElektronikType::class);
    }
}

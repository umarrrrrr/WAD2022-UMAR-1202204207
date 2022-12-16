<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    protected $table = "showrooms";
    use HasFactory;
    public $timestamps = false;

    protected $guarded = ['id'];
    protected $fillable = ['name','owner','brand','purchase_date','description','image','status'];
    
}

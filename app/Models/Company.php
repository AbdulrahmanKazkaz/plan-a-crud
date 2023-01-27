<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];
    protected $appends = ["fullLogoUrl"];

    public function getFullLogoUrlAttribute() {
         return asset('/storage') . '/' .  $this->attributes['logo'];
    }
}

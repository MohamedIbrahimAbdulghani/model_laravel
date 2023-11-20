<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    // لازم تعملها علشان تعرف الموديل ان الحقول دي هتنضاف عليها بيانات داخل الداتابيز
    protected $fillable = ["title", "body"];
    // لو مش عايز تحدد الحقول وعايز تقوله هختار الحقول كلها  ( protected $guarded = []; )

    use SoftDeletes;
}

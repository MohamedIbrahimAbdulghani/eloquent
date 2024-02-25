<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    // عايز اضيف فيهم بيانات داخل الداتابيز title & body هنا بعرفه وبقولة ان ال
    protected $fillable = ["title", "body"];
    // protected $guarded = []; // لو مش عايز تحدد الحقول وعايز تقولة اختار الحقول كلها

    // to use softdelete
    use SoftDeletes;

    // this function made to make scope query
    public function scopeMyQueryFunction($query) {
        return $query->where("title", "this is post number 1");
    }
}

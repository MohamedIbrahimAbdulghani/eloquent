<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // عايز اضيف فيهم بيانات داخل الداتابيز title & body هنا بعرفه وبقولة ان ال
    protected $fillable = ["title", "body"];
    // protected $guarded = []; // لو مش عايز تحدد الحقول وعايز تقولة اختار الحقول كلها
}

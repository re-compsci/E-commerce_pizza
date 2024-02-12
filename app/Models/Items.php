<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $fillable = [
      "itemName",
      "callories",
      "qty",
      "itemgroupno",
      "price",
      "itemImg",
      "desc"
    ];
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'description', 'price', 'quantity', 'sku', 'picture'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

?>
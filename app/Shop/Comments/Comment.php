<?php
namespace App\Shop\Comments;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: php
 * Date: 03.11.18
 * Time: 10:39
 */
class Comment extends Model
{
    public function comments()
    {
        return $this->hasMany(Product::class);
    }
}
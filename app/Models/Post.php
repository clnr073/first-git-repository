<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // fillが可能なプロパティを指定する
    protected $fillable = [
        'title',
        'body'
        ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        // updated_atカラムの降順で並び替え　// ページネーションして取得
    }
}

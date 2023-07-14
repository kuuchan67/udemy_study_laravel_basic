<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'title',
        'url',
        'gender',
        'age',
        'contact',
    ];

    public function scopeSearch($query, $search)
    {

        if ($search === null) return $query;
        $searchSplit = mb_convert_kana($search, 'S');//全角スペースを半角スペースに
        $searchSplit2 = preg_split('/[\s]+/', $searchSplit);//空白で区切る
        foreach ($searchSplit2 as $value) {
            $query->where("name", "like", '%'. $value. '%');
        }
        return $query;
    }
}

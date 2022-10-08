<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breed extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'breeds';
    protected $guarded = false;

    const KIND_DOG = 0;
    const KIND_CAT = 1;

    public static function getKinds()
    {
        return [
            self::KIND_DOG => 'Dog',
            self::KIND_CAT => 'Cat',
        ];
    }

    public function animals()
    {
        return $this->hasMany(Animal::class, 'breed_id', 'id');
    }

    public function getNameKind($id)
    {
        $data = $this->getKinds();
        foreach ($data as $key => $elem)
        {
            if ($key === $id){
                return $elem;
            }
        }
    }


}

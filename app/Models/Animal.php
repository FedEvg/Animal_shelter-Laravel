<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'animals';
    protected $guarded = false;

    const GENDER_GIRL = 0;
    const GENDER_BOY = 1;

    const SIZE_SMALL = 0;
    const SIZE_AVERAGE = 1;
    const SIZE_BIG = 2;

    const STERILIZATION_UNSTERILIZED = 0;
    const STERILIZATION_STERILIZED = 1;

    public static function getGender()
    {
        return [
            self::GENDER_GIRL => 'Girl',
            self::GENDER_BOY => 'Boy',
        ];
    }

    public static function getSizes()
    {
        return [
            self::SIZE_SMALL => 'Small',
            self::SIZE_AVERAGE => 'Average',
            self::SIZE_BIG => 'Big',
        ];
    }

    public static function getSterilization()
    {
        return [
            self::STERILIZATION_UNSTERILIZED => 'Unsterilized',
            self::STERILIZATION_STERILIZED => 'Sterilized',
        ];
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class, 'breed_id', 'id');
    }

    public function getNameGender($id)
    {
        $data = $this->getGender();

        return $this->getNameConst($data, $id);
    }

    public function getNameSize($id)
    {
        $data = $this->getSizes();

        return $this->getNameConst($data, $id);
    }

    public function getNameSterilization($id)
    {
        $data = $this->getSterilization();

        return $this->getNameConst($data, $id);
    }

    public function getNameConst($data, $id)
    {
        foreach ($data as $key => $elem)
        {
            if ($key === $id){
                return $elem;
            }
        }
    }

}

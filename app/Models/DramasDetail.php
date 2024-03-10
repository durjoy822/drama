<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DramasDetail extends Model
{
    use HasFactory;
    protected $fillable = ['image'];

    private static $newDramaDetail , $photoName, $dir, $imgUrl;



    public static function newDramaDetail($id, $data)
    {
        foreach ($data as $item)
        {

                self::$newDramaDetail = new DramasDetail();
                self::$newDramaDetail->drama_id  = $id;
                if(array_key_exists('image',$item)){
                    if ($item['image']){
                        if (file_exists(self::$newDramaDetail->image)){
                            unlink(self::$newDramaDetail->image);
                        }
                        self::$newDramaDetail->image      =self::saveImage($item);
                    }
                }
                    self::$newDramaDetail->description     = $item['description'];
                self::$newDramaDetail->save();
        }
    }

    public static function saveImage($item){
        $image=$item['image'];
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photoName=rand().$timestamp.'.'.$image->getClientOriginalExtension();
        $dir='adminAsset/drama/';
        $imgUrl=$dir.$photoName;
        $image->move($dir,$photoName);
        return $imgUrl;
    }

    public function drama()
{
    return $this->belongsTo(Drama::class);
}

}
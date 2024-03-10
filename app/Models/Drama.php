<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drama extends Model
{
    use HasFactory;
    protected $fillable = ['title',];

    private static $drama, $dramaUpdate;

    public static function newDrama($request )
    {
//        if ($id!=null){
//            self::$drama = Drama::find($id);
//        }else{
//            self::$drama =new Drama();
//        }
        return self::saveBasicInfo( new Drama(), $request);
    }
    private static function saveBasicInfo($drama, $request )
    {
        $drama->title        = $request->title;
        $drama->drama_status = $request->drama_status;
        $drama->video_link   = $request->video_link;
        $drama->status       = $request->status;
        $drama->save();
        return $drama;
    }

    public function dramadetails(){
        return $this->hasMany(DramasDetail::class);
    }

    public function dramaDetail()
    {
        return $this->hasOne(DramasDetail::class);
    }

}
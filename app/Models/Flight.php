<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Flight extends Model
{
    // protected $table = 'my_flights';
    public $timestamps = false;
    protected $guarded = [];
    // protected $primaryKey = 'flight_id';
    protected $attributes =[
        'age'=>100

    ];
// public function contact(){
//     return $this->hasOne(Contact::class,'student_id','id');
// }
    

public function contact(){
    return $this->hasMany(Contact::class,'student_id','id');
}
    


}

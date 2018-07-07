<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserAddress
 *
 * @mixin \Eloquent
 */
class UserAddress extends Model
{
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    protected $dates = ['last_used_at'];

    public function user()
    {
//      关联模型多个地址只属于一个用户
        return $this->belongsTo(User::class);
    }

    public function getFullAddressAttribute()
    {

//      在之后的代码里可以直接通过 $address->full_address 来获取完整的地址
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}

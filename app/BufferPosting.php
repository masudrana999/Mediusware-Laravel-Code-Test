<?php

namespace Bulkly;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BufferPosting extends Model
{	
	// protected $appends = ['time','datee'];
   public function groupInfo()
    {
        return $this->hasOne(SocialPostGroups::Class, 'id', 'group_id')->select('id', 'name', 'type');
    }
   public function accountInfo()
    {
        return $this->hasOne(SocialAccounts::Class, 'id', 'account_id')->select('id', 'avatar');
    }



    public function getSentAtAttribute($value)
    {
        return Carbon::parse($value)->format('M D Y, h:mm:ss a');
    }


}

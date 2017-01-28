<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class ItemAds extends Model
{

  protected $table    = 'item_ads';

  protected $fillable = [
    'user_id', 'category_id', 'title', 'description', 'picture', 'no_hp', 'city', 'sold', 'published'
  ];

  public function category(){
    return $this->hasOne();
  }
}

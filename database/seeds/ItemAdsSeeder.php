<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ItemAdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('category_ads')->delete();
      $item = app()->make('App\ItemAds');
      $item->fill([
        'user_id'     => 1,
        'category_id' => 1,
        'title'       => 'Macbook Pro 14 in',
        'description' => 'Di jual macbook pro masih mulus keluaran 2012 thanks gan',
        'picture'     => 'macbook-pro-2012.php',
        'no_hp'       => 085758381457,
        'city'        => 'Berlin',
        'sold'        => false,
        'published'   => false
      ]);
      $item->save();
    }
}

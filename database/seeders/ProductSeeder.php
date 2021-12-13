<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('products')->insert([
      [
        'name' => 'Huawei',
        'price' => '300',
        'category' => 'mobile',
        'description' => 'A smartphone with 8gb and much more feature',
        'gallery' => 'https://www.albayan.ae/polopoly_fs/1.3770651.1580914309!/image/image.jpg'
      ],
      [
        'name' => 'philips Tv',
        'price' => '400',
        'category' => 'tv',
        'description' => 'A Smart TV 4K UHD، LED | Philips',
        'gallery' => 'https://images.philips.com/is/image/PhilipsConsumer/58PUT6604_81-IMS-ar_EG?$jpglarge$&wid=960'
      ],
      [
        'name' => 'Sony Tv',
        'price' => '450',
        'category' => 'tv',
        'description' => 'A smart Tv 4K with much more feature',
        'gallery' => 'https://www.sony.com/image/53d7c185420c8f2a09c5b73efaf8fcd5?fmt=png-alpha&wid=720'
      ],
      [
        'name' => 'LG fridge',
        'price' => '800',
        'category' => 'fridge',
        'description' => 'A fridge with much more feature',
        'gallery' => 'https://www.lg.com/eg_en/images/refrigerators/md07510631/gallery/medium_01.jpg'
      ],
    ]);
  }
}

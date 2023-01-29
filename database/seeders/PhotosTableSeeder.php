<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creo un indice da 1 a 27
        for($i=1; $i<=27; $i++){
             $photos = new Photo();
             $photos->title ='photo :'.$i;
             $photos->url='/img'.$i.'.png ';

             $photos->save();

        }
    }
}

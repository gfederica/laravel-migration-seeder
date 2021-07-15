<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTravel = config('travels');

        foreach ($arrayTravel as $item) {
            $travel = new Travel();
            $travel->destination = $item["destination"];
            $travel->days = $item["days"];
            $travel->type = $item["type"];
            $travel->roomAndBoard = $item["roomAndBoard"];
            $travel->guidedTours = $item["guidedTours"];
            $travel->price = $item["price"];
           
            $travel->save();
        }
        
    
    }
}

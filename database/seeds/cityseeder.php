<?php
use App\city;
use Illuminate\Database\Seeder;

class cityseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new city();
        $city ->city="alex";
        $city->save();

        $city2 = new city();
        $city2 ->city="cairo";
        $city2->save();


    }
}

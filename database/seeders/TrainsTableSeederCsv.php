<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainsData = Helpers::getDataFromCsv(__DIR__ . '/trains.csv');
        foreach($trainsData as $key => $train){
            if( $key !== 0){
                $newTrain = new Train();
                $newTrain->company = Str::of($train[0])->ucfirst();
                $newTrain->departure_station = Str::of($train[1])->ucfirst();
                $newTrain->arrival_station = Str::of($train[2])->ucfirst();
                $newTrain->departures_schedule = $train[3];
                $newTrain->arrivals_schedule = $train[4];
                $newTrain->train_code = $train[5];
                $newTrain->coaches_nr = $train[6];
                $newTrain->on_schedule = $train[7];
                $newTrain->canceled = $train[8];
                $newTrain->save();
            }
        }
    }
}

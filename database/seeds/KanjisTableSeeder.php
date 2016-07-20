<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class KanjisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $csv = Reader::createFromString(Storage::get('csv/kanji.csv'));
        $csv->each(function ($row) {

            if(empty($row)){
                return false;
            }

            DB::table('kanjis')->insert([
                'kanji' => $row[0],
                'meaning' => $row[1],
                'jlpt-level' => $row[2]

            ]);

            return true;
        });

    }
}

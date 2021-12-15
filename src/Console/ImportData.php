<?php
namespace Devsbuddy\Laraworld\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ImportData extends Command
{
    protected $signature = 'world:import';

    protected $description = 'Create country state and city tables and import data.';

    public function handle()
    {
        $this->info('Importing Country...');
        $this->importCountry();
        $this->info('Importing States...');
        $this->importState();
        $this->info('Importing Cities...');
        $this->importCity();

        $this->info('Data imported successfully!');
    }

    private function importCountry(){
        $country = File::get(__DIR__ . '/../../database/countries.sql');
        \DB::unprepared($country);
    }

    private function importState(){
        $state = File::get(__DIR__ . '/../../database/states.sql');
        \DB::unprepared($state);
    }

    private function importCity(){
        $city = File::get(__DIR__ . '/../../database/cities.sql');
        \DB::unprepared($city);
    }
}
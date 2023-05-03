<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ItalianCity;
use File;

class ItalianCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItalianCity::truncate();

        $json = File::get('database/data/elenco_comuni.json');
        $italian_cities = json_decode($json, true);

        foreach ($italian_cities as $key => $value) {
            ItalianCity::create([
                'id' => $value['Codice Catastale del comune'],
                'name' => $value['Denominazione comune'],
                'province_id' => $value['Codice Provincia'],
                'province_name' => $value['Denominazione provincia'],
                'province_code' => $value['Sigla provincia'],
                'region_id' => $value['Codice Regione'],
                'region_name' => $value['Denominazione Regione']
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();
        DB::table('regions')->insert([
            'nameRegion' => 'Iquique'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Antofagasta'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Copiapó'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Coquimbo'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Valparaíso'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Rancagua'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Talca'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Concepción'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Temuco'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Puerto Montt'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Coyhiaique'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Punta Arenas'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Santiago'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Valdivia'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Arica'
        ]);
        DB::table('regions')->insert([
            'nameRegion' => 'Chillán'
        ]);
    }
}

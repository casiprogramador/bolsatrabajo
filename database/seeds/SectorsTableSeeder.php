<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->delete();
        $sectors = array(
            array( 'name' => 'Selecciona'),
            array( 'name' => 'Agricultura / Pesca / Ganadería'),
            array( 'name' => 'Construcción / obras'),
            array( 'name' => 'Educación'),
            array( 'name' => 'Energía'),
            array( 'name' => 'Entretenimiento / Deportes'),
            array( 'name' => 'Fabricación'),
            array( 'name' => 'Finanzas / Banca'),
            array( 'name' => 'Gobierno / No Lucro'),
            array( 'name' => 'Hostelería / Turismo'),
            array( 'name' => 'Informática / Hardware'),
            array( 'name' => 'Informática / Software'),
            array( 'name' => 'Internet'),
            array( 'name' => 'Legal / Asesoría'),
            array( 'name' => 'Materias Primas'),
            array( 'name' => 'Medios de Comunicación'),
            array( 'name' => 'Publicidad / RRPP'),
            array( 'name' => 'RRHH / Personal'),
            array( 'name' => 'Salud / Medicina'),
            array( 'name' => 'Servicios Profesionales'),
            array( 'name' => 'Telecomunicaciones'),
            array( 'name' => 'Transporte'),
            array( 'name' => 'Venta al consumidor'),
            array( 'name' => 'Venta al por mayor')
        );
        DB::table('sectors')->insert($sectors);
    }
}

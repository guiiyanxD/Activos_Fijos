<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Proveedore;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prov1= new Proveedore();
        $prov1->id_proveedor=1;
        $prov1->nombre="Bill";
        $prov1->contacto_id=1;
        $prov1->estado_id=1;
        $prov1->save();


    } 
}

<?php

namespace Database\Seeders;

use App\Models\Rubro;
use Illuminate\Database\Seeder;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rubro1= new Rubro();
       
        $rubro1->nombre="Equipos Informaticos";
        $rubro1->descripcion="Todo tipo de dispositivos tecnologicos";
        $rubro1->vida_util=5;
        $rubro1->coeficiente=5;
        $rubro1->depreciar=5;
        $rubro1->actualiza=5;
        $rubro1->save();
    }
}

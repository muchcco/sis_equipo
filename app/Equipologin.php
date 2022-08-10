<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipologin extends Model
{
    protected $table = 'equipos';

    protected $primaryKey = 'id_equipo';

    protected $fillable = [ 'nom_completo', 'nombre', 'ap_paterno', 'ap_materno', 'DNI', 'correo', 'cargo', 'oficina', 'n_celular', 'estado_cel', 'IMEI', 'SIM', 'marca', 'modelo', 'adaptador', 'cable_usb', 'sim_card', 'archivo', 'flag', 'tipo_reparto', ];

}

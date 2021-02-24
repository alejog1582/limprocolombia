<?php

namespace App\Imports;

use App\Servicio;
use Maatwebsite\Excel\Concerns\ToModel;

class ServiciosCargue implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Servicio([
            'tipo_servicio' => $row[0], 
            'ciudad' => $row[1],
            'fecha_servicio'  => $row[2],
            'plan' => $row[3],
            'valor_plan' => $row[4],
            'hora_inicio' => $row[5],
            'lugar_servicio' => $row[6],
            'tipo_documento' => $row[7],
            'numero_documento' => $row[8],
            'nombre_cliente' => $row[9],
            'direccion_servicio' => $row[10],
            'email' => $row[11],
            'celular_contacto' => $row[12],
            'metodo_pago' => $row[13],
            'kit_productos' => $row[14],
            'estado' => $row[15],
        ]);
    }
}

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Funcionaria::class, function (Faker $faker) {
    return [

        'tipo_documento' => $faker->randomElement($array = array('cc', 'cc')),
        'numero_documento' => $faker->numberBetween($min = 10000, $max = 100000),
        'nombre_funcionaria' => $faker->name(),
        'edad' => $faker->numberBetween($min = 18, $max = 60),
		'email'=> $faker->email(),
		'celular_contacto'=> $faker->e164PhoneNumber(),
        'fijo_contacto'=> $faker->e164PhoneNumber(),
        'direccion_casa'=> $faker->address(),
        'barrio_casa'=> $faker->address(),
        'oficio'=> $faker->randomElement($array = array('servicios generales', 'administrativo')),
        'experiencia_oficio'=> $faker->randomElement($array = array('si', 'no')),
		'url_foto' => $faker->imageUrl(300, 300),
        'nombre_funcionaria_abreviado'=> $faker->name(),
        'fecha_nacimiento'=> $faker->date($format = 'Y-m-d'),
		'tipo_sangre' => $faker->randomElement($array = array('a+', 'o+', 'a-', 'o-')),
        'fecha_expedicion_cedula'=> $faker->date($format = 'Y-m-d'),
        'eps'=> $faker->randomElement($array = array('famisanar', 'compensar', 'salud total')),
        'pension'=> $faker->randomElement($array = array('porvenir', 'proteccion', 'colpensiones')),
        'operador_celular'=> $faker->randomElement($array = array('claro', 'avantel', 'movistar')),
        'cuenta_ahorro'=> $faker->randomElement($array = array('davivienda', 'daviplata')),
        'numero_cuenta_ahorro'=> $faker->numberBetween($min = 10000, $max = 100000),
        'talla_uniforme'=> $faker->randomElement($array = array('s', 'm', 'xl')),
        'talla_zapato'=> $faker->randomElement($array = array('36', '37', '38')),
        'cocina'=> $faker->randomElement($array = array('si', 'no')),
        'plancha'=> $faker->randomElement($array = array('si', 'no')),
        'cafeteria'=> $faker->randomElement($array = array('si', 'no')),
        'tratamiento_pisos'=> $faker->randomElement($array = array('si', 'no')),
        'productos_aseo'=> $faker->randomElement($array = array('si', 'no')),
        'manipulacion_alimentos'=> $faker->randomElement($array = array('si', 'no')),
        'fecha_manipulacion_alimentos'=> $faker->date($format = 'Y-m-d'),
		'nombre_acudiente'=> $faker->name(),
       'celular_acudiente'=>$faker->e164PhoneNumber(),
        'trabajo_anterior'=> $faker->realText($maxNbChars = 20),
        'experiencia_laboral'=> $faker->realText($maxNbChars = 20),
        'fortalezas'=> $faker->realText($maxNbChars = 20),
        'debilidades'=> $faker->realText($maxNbChars = 20),
        'hijos'=> $faker->numberBetween($min = 1, $max = 5),
        'conformacion_familia'=> $faker->realText($maxNbChars = 20),
        'tipo_vivienda'=> $faker->randomElement($array = array('propia', 'arriendo')),
        'estudios'=> $faker->realText($maxNbChars = 20),
        'tiempo_libre'=> $faker->realText($maxNbChars = 20),
        'disponibilidad_tiempo'=> $faker->randomElement($array = array('completa', 'parcial')),
        'antecedentes_medicos'=>  $faker->realText($maxNbChars = 20),
        'fecha_entrevista'=> $faker->date($format = 'Y-m-d'),
        'concepto_entrevista'=>  $faker->realText($maxNbChars = 20),
        'examenes_medicos'=>  $faker->realText($maxNbChars = 20),
        'visita_domiciliaria'=>  $faker->realText($maxNbChars = 20),
        'antecedentes'=>  $faker->realText($maxNbChars = 20),
        'referencias_laborales'=>  $faker->realText($maxNbChars = 20),
        'fecha_vinculacion'=> $faker->date($format = 'Y-m-d'),
        'fecha_dotacion'=> $faker->date($format = 'Y-m-d'),
        'fecha_desvinculacion'=> $faker->date($format = 'Y-m-d'),
        'motivo_desvinculacion'=>  $faker->realText($maxNbChars = 20),
        'estado'=> $faker->randomElement($array = array('aspirante', 'entrevistada', 'funcionaria', 'exfuncionaria', 'descartada')),
        'created_at' => $faker->dateTimeThisDecade,
		'updated_at' => $faker->dateTimeThisDecade,
    ];
});

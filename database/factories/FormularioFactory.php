<?php

namespace Database\Factories;

use App\Models\Formulario;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormularioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formulario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'forma_de_pago' => $this->faker->text,
        'metodo_envio' => $this->faker->text,
        'tecnologia_venta_producto' => $this->faker->text,
        'publicidad_de_producto' => $this->faker->text,
        'fue_util_para_el_negocio' => $this->faker->text,
        'noto_aumento_de_ventas' => $this->faker->text,
        'siguio_utlizando' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

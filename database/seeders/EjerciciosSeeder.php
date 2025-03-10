<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EjerciciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ejercicios')->insert([
            // 1ER PLAN - GANANCIA MUSCULAR
            // Nivel 1: Leve (Aficionado)
            [
                'imagen' => '',
                'nombres' => 'Sentadilla con barra',
                'descripcion' => 'Ejercicio compuesto para trabajar piernas y glúteos.',
                'series' => 3,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pierna',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Ejercicio de empuje para trabajar el pecho y los tríceps.',
                'series' => 3,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Remo con barra',
                'descripcion' => 'Ejercicio para fortalecer la espalda y bíceps.',
                'series' => 3,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Espalda',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Ejercicio para trabajar tríceps y pectorales.',
                'series' => 2,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Curl de bíceps con barra',
                'descripcion' => 'Ejercicio de aislamiento para el desarrollo del bíceps.',
                'series' => 2,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Leve'
            ],
            // Nivel 2: Medio (Intermedios)
            [
                'imagen' => '',
                'nombres' => 'Sentadilla con barra',
                'descripcion' => 'Ejercicio compuesto para tren inferior.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Ejercicio para fortalecer el pecho.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Remo con barra',
                'descripcion' => 'Ejercicio para fortalecer la espalda.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Espalda',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Ejercicio de empuje para tríceps y pecho.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Curl de bíceps con barra',
                'descripcion' => 'Ejercicio de aislamiento para bíceps.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Elevaciones laterales con mancuernas',
                'descripcion' => 'Ejercicio de aislamiento para hombros.',
                'series' => 4,
                'repeticiones' => '12-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Media'
            ],
            // Nivel 3: Alta (Avanzado)
            [
                'imagen' => '',
                'nombres' => 'Sentadilla con barra',
                'descripcion' => 'Ejercicio compuesto para piernas.',
                'series' => 6,
                'repeticiones' => '13-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Peso muerto',
                'descripcion' => 'Ejercicio compuesto para espalda baja y glúteos.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Ejercicio compuesto para el tren superior.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Remo con barra',
                'descripcion' => 'Ejercicio de espalda y bíceps.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Espalda',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Ejercicio para tríceps y pectorales.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Curl de bíceps con barra',
                'descripcion' => 'Ejercicio de aislamiento para bíceps.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Elevaciones laterales con mancuernas',
                'descripcion' => 'Ejercicio de aislamiento para hombros.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Alta'
            ],
            // 2DO PLAN - DEFINICION
            // Nivel 1: Leve (Aficionado)
            [
                'imagen' => '',
                'nombres' => 'Sentadillas con barra',
                'descripcion' => 'Ejercicio compuesto para fortalecer piernas y glúteos.',
                'series' => 3,
                'repeticiones' => '10-13',
                'tipo' => 'Definición',
                'musculo' => 'Pierna',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Ejercicio compuesto para el desarrollo del pecho.',
                'series' => 3,
                'repeticiones' => '10-13',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Ejercicio para fortalecer tríceps y pecho.',
                'series' => 3,
                'repeticiones' => '10-13',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Circuito metabólico',
                'descripcion' => 'Rutina de alta intensidad con ejercicios funcionales.',
                'series' => 3,
                'repeticiones' => '30 segundos por ejercicio',
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            // Nivel 2: Medio (Intermedios)
            [
                'imagen' => '',
                'nombres' => 'Sentadilla con barra',
                'descripcion' => 'Ejercicio compuesto para piernas y glúteos.',
                'series' => 4,
                'repeticiones' => '10-12',
                'tipo' => 'Definición',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Ejercicio de pecho para fuerza y definición muscular.',
                'series' => 4,
                'repeticiones' => '12-15',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Ejercicio de empuje para tríceps y pecho.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Circuito metabólico (4 rondas)',
                'descripcion' => 'Sentadillas con salto, burpees y mountain climbers.',
                'series' => 4,
                'repeticiones' => '1',
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Cardio HIIT (10 minutos)',
                'descripcion' => 'Sprints en bicicleta estática: 30 seg alta velocidad + 1 min caminando.',
                'series' => 1,
                'repeticiones' => 10,
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            // Nivel 3: Alta (Avanzado)
            [
                'imagen' => '',
                'nombres' => 'Sentadillas con barra',
                'descripcion' => 'Ejercicio compuesto para trabajar piernas y glúteos con barra.',
                'series' => 5,
                'repeticiones' => '12-15',
                'tipo' => 'Definición',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Ejercicio compuesto para fortalecer el pecho, tríceps y hombros.',
                'series' => 5,
                'repeticiones' => '12-15',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Fondos en paralelas (con lastre)',
                'descripcion' => 'Ejercicio para fortalecer tríceps y pectorales con carga adicional.',
                'series' => 4,
                'repeticiones' => 12,
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Circuito metabólico (5 rondas)',
                'descripcion' => 'Rutina de alta intensidad con ejercicios dinámicos para quemar grasa.',
                'series' => 5,
                'repeticiones' => 1,
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Cardio HIIT (15 minutos)',
                'descripcion' => 'Intervalos de alta intensidad en bicicleta para mejorar resistencia y quemar grasa.',
                'series' => 1,
                'repeticiones' => 1,
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            // 3ER PLAN - PERDIDA DE PESO
            // Nivel 1: Leve (Aficionado)
            [
                'imagen' => '',
                'nombres' => 'Peso muerto con pesa rusa',
                'descripcion' => 'Ejercicio para fortalecer la cadena posterior y mejorar la estabilidad.',
                'series' => 3,
                'repeticiones' => '12-13',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Flexiones de pecho',
                'descripcion' => 'Ejercicio de empuje para fortalecer el tren superior.',
                'series' => 3,
                'repeticiones' => '10-13',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pectoral',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Sentadillas con salto',
                'descripcion' => 'Ejercicio explosivo para piernas y resistencia.',
                'series' => 3,
                'repeticiones' => '12-13',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Circuito funcional (3 rondas)',
                'descripcion' => 'Combinación de ejercicios para quemar calorías y mejorar el rendimiento.',
                'series' => 3,
                'repeticiones' => 1, // Se considera 1 repetición por ronda
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Cardio moderado (30 minutos)',
                'descripcion' => 'Caminata rápida en inclinación para mejorar resistencia cardiovascular.',
                'series' => 1,
                'repeticiones' => 1, // Se considera una sesión
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            // Nivel 2: Medio (Intermedios)
            [
                'imagen' => '',
                'nombres' => 'Peso muerto con pesa rusa',
                'descripcion' => 'Ejercicio de fuerza para piernas y espalda baja con kettlebell.',
                'series' => 4,
                'repeticiones' => '15-17',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Flexiones de pecho con elevación de pies',
                'descripcion' => 'Flexiones con los pies elevados para mayor intensidad en el tren superior.',
                'series' => 4,
                'repeticiones' => '12-14',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pectoral',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Sentadillas con salto',
                'descripcion' => 'Ejercicio explosivo para piernas y resistencia cardiovascular.',
                'series' => 4,
                'repeticiones' => '15',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Circuito metabólico (4 rondas)',
                'descripcion' => 'Circuito de alta demanda con sentadillas con salto, burpees y mountain climbers.',
                'series' => 4,
                'repeticiones' => 1,
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Cardio HIIT (10 minutos)',
                'descripcion' => 'Sprints en bicicleta estática alternando alta velocidad con recuperación.',
                'series' => 1,
                'repeticiones' => 1,
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            // Nivel 3: Alta (Avanzado)
            [
                'imagen' => '',
                'nombres' => 'Peso muerto con pesa rusa (a mayor carga)',
                'descripcion' => 'Ejercicio de fuerza para femorales, glúteos y espalda baja.',
                'series' => 5,
                'repeticiones' => '12-15',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta',
            ],
            [
                'imagen' => '',
                'nombres' => 'Flexiones de pecho con lastre',
                'descripcion' => 'Flexiones con peso adicional para mayor resistencia y desarrollo muscular.',
                'series' => 5,
                'repeticiones' => '12-15',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pectoral',
                'intensidad' => 'Alta',
            ],
            [
                'imagen' => '',
                'nombres' => 'Sentadillas con salto',
                'descripcion' => 'Ejercicio pliométrico para fuerza explosiva en piernas y glúteos.',
                'series' => 5,
                'repeticiones' => '20',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta',
            ],
            [
                'imagen' => '',
                'nombres' => 'Circuito metabólico (5 rondas)',
                'descripcion' => 'Circuito de alta intensidad con ejercicios pliométricos.',
                'series' => 5,
                'repeticiones' => 'Sentadillas con salto (60s), Burpees (45s), Mountain climbers (60s)',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta',
            ],
            [
                'imagen' => '',
                'nombres' => 'Cardio HIIT (15 minutos)',
                'descripcion' => 'Sprints en bicicleta estática con intervalos de alta intensidad.',
                'series' => 1,
                'repeticiones' => '30s a máxima velocidad + 1 min caminando',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta',
            ],
            // 4TO PLAN - EJERCICIOS CARDIOVASCULARES
            // Nivel 1: Leve (Aficionado)
            [
                'imagen' => '',
                'nombres' => 'Caminata rápida en inclinación',
                'descripcion' => 'Caminata a ritmo acelerado en superficie inclinada.',
                'series' => 1,
                'repeticiones' => '25 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Bicicleta estática a ritmo moderado',
                'descripcion' => 'Ejercicio cardiovascular en bicicleta estática a ritmo moderado.',
                'series' => 1,
                'repeticiones' => '25 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Nadar a ritmo suave',
                'descripcion' => 'Sesión de natación a un ritmo suave para mejorar la resistencia.',
                'series' => 1,
                'repeticiones' => '25 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => '',
                'nombres' => 'Cardio LISS (Low-Intensity Steady State)',
                'descripcion' => 'Caminata ligera de larga duración para mejorar la resistencia.',
                'series' => 1,
                'repeticiones' => '25 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            // Nivel 2: Medio (Intermedios)
            [
                'imagen' => '',
                'nombres' => 'Caminata rápida con intervalos de trote',
                'descripcion' => 'Ejercicio de intensidad media para mejorar la resistencia.',
                'series' => 1,
                'repeticiones' => '45 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Bicicleta estática con intervalos de alta velocidad',
                'descripcion' => 'Aumenta la quema de calorías y mejora el rendimiento cardiovascular.',
                'series' => 1,
                'repeticiones' => '45 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Nadar con intervalos de alta intensidad',
                'descripcion' => 'Fortalece el sistema cardiovascular con mayor esfuerzo.',
                'series' => 1,
                'repeticiones' => '40 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => '',
                'nombres' => 'Cardio HIIT',
                'descripcion' => '30 segundos de sprint + 1 minuto caminando, repetido por 15-20 minutos.',
                'series' => 1,
                'repeticiones' => '15-20 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            // Nivel 3: Alta (Avanzado)
            [
                'imagen' => '',
                'nombres' => 'Correr a ritmo constante en pendiente',
                'descripcion' => 'Carrera continua en inclinación para mejorar resistencia cardiovascular.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Bicicleta estática con intervalos de máxima velocidad',
                'descripcion' => 'Ejercicio en bicicleta estática alternando velocidad máxima y descanso.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Nadar con intervalos de alta velocidad',
                'descripcion' => 'Natación intercalando velocidad máxima y ritmo moderado.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Cardio HIIT (High-Intensity Interval Training)',
                'descripcion' => 'Sprints de 30 segundos seguidos de 1 minuto de caminata.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => '',
                'nombres' => 'Sprints en bicicleta estática (HIIT)',
                'descripcion' => 'Alternancia entre sprints intensos y recuperación activa en bicicleta.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ]
        ]);
    }
}

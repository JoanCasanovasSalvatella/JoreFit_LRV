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
                'imagen' => 'https://drive.google.com/file/d/1f7fuSYX-CuxPop0fIsNR6uJds-1-2xxM/view?usp=drive_link',
                'nombres' => 'Sentadilla con barra',
                'descripcion' => 'Baja las caderas hacia atrás y flexiona las rodillas, asegurándote de que las rodillas no pasen los pies. Luego, empuja con los talones para volver a la posición inicial.',
                'series' => 3,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pierna',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/16GWunZZsASyem5g-buz3ovp8Tnqck0FL/view?usp=drive_link',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Sostén la barra con las manos ligeramente más anchas que los hombros. Baja la barra controladamente hacia el pecho y luego empuja hacia arriba hasta extender completamente los brazos.',
                'series' => 3,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/11_sFTpKVpaf4ssHPJBwRrKxib_oHFYcw/view?usp=drive_link',
                'nombres' => 'Remo con barra',
                'descripcion' => 'Sujeta la barra con las manos al ancho de los hombros. Tira de la barra hacia el abdomen, apretando los omóplatos al final del movimiento, y luego baja la barra de manera controlada.',
                'series' => 3,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Espalda',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1APCNbYWaSMBDIem0Ck5f3d6yjIhW7F4q/view?usp=drive_link',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Baja flexionando los codos hasta que los brazos estén a 90 grados, luego empuja con los tríceps para volver a la posición inicial.',
                'series' => 3,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/15KC-CzGUVbfNLuenmgqUgBdscwTtQWN1/view?usp=drive_link',
                'nombres' => 'Curl de bíceps con barra',
                'descripcion' => 'Flexiona los codos para levantar la barra hacia los hombros, asegurándote de no mover el torso. Luego, baja la barra controladamente hasta la posición inicial.',
                'series' => 3,
                'repeticiones' => '8-10',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Leve'
            ],
            // Nivel 2: Medio (Intermedios)
            [
                'imagen' => 'https://drive.google.com/file/d/1f7fuSYX-CuxPop0fIsNR6uJds-1-2xxM/view?usp=drive_link',
                'nombres' => 'Sentadilla con barra',
                'descripcion' => 'Flexiona las rodillas y lleva las caderas hacia atrás, manteniendo la espalda recta. Baja hasta que los muslos estén paralelos al suelo o un poco más abajo, luego empuja con los talones para regresar a la posición inicial.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/16GWunZZsASyem5g-buz3ovp8Tnqck0FL/view?usp=drive_link',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Baja la barra hacia el pecho controladamente, asegurándote de que los codos formen un ángulo de 45 grados. Luego, empuja la barra hacia arriba hasta extender completamente los brazos.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/11_sFTpKVpaf4ssHPJBwRrKxib_oHFYcw/view?usp=drive_link',
                'nombres' => 'Remo con barra',
                'descripcion' => 'Tira de la barra hacia tu abdomen, apretando los omóplatos al final del movimiento. Luego, baja la barra de manera controlada hasta la posición inicial.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Espalda',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1APCNbYWaSMBDIem0Ck5f3d6yjIhW7F4q/view?usp=drive_link',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Colócate entre dos barras paralelas y, sujetándote de ellas, baja el cuerpo flexionando los codos hasta que tus brazos estén a 90 grados. Luego, empuja con los tríceps para elevar el cuerpo hasta la posición inicial.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/15KC-CzGUVbfNLuenmgqUgBdscwTtQWN1/view?usp=drive_link',
                'nombres' => 'Curl de bíceps con barra',
                'descripcion' => 'Sostén una barra con las manos al frente, a la altura de los muslos, con las palmas hacia arriba. Flexiona los codos para levantar la barra hacia los hombros, evitando mover el torso. Luego, baja la barra de manera controlada hasta la posición inicial.',
                'series' => 4,
                'repeticiones' => '10-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/10Jb_7gG7ZMCLS-nkgAoOFWDTlYHz1w4L/view?usp=drive_link',
                'nombres' => 'Elevaciones laterales con mancuernas',
                'descripcion' => 'Levanta las mancuernas hacia los lados hasta que los brazos estén paralelos al suelo, apretando los hombros al final del movimiento. Baja las mancuernas de manera controlada hasta la posición inicial.',
                'series' => 4,
                'repeticiones' => '12-13',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Media'
            ],
            // Nivel 3: Alta (Avanzado)
            [
                'imagen' => 'https://drive.google.com/file/d/1f7fuSYX-CuxPop0fIsNR6uJds-1-2xxM/view?usp=drive_link',
                'nombres' => 'Sentadilla con barra',
                'descripcion' => 'Baja el cuerpo flexionando las rodillas y llevando las caderas hacia atrás, asegurándote de que las rodillas no sobrepasen los dedos de los pies. Baja hasta que los muslos estén paralelos al suelo, luego empuja hacia arriba con los talones para regresar a la posición inicial.',
                'series' => 6,
                'repeticiones' => '13-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1P66B2j3gszHl0gWjedfwYc77BDvSc4Iw/view?usp=drive_link',
                'nombres' => 'Peso muerto',
                'descripcion' => 'Flexiona las rodillas ligeramente y, con la espalda recta, agáchate para tomar la barra con ambas manos. Manteniendo la espalda recta, empuja las caderas hacia adelante mientras te enderezas, levantando la barra hasta que estés completamente erguido.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/16GWunZZsASyem5g-buz3ovp8Tnqck0FL/view?usp=drive_link',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Acuéstate en un banco plano y sujeta una barra con las manos ligeramente más anchas que los hombros. Baja la barra controladamente hacia el pecho, asegurándote de que los codos estén en un ángulo de 45 grados. Luego, empuja la barra hacia arriba hasta extender completamente los brazos.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/11_sFTpKVpaf4ssHPJBwRrKxib_oHFYcw/view?usp=drive_link',
                'nombres' => 'Remo con barra',
                'descripcion' => 'Sostén la barra con las manos a la altura de los hombros, dejando que cuelgue frente a ti. Luego, baja la barra controladamente hasta la posición inicial.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Espalda',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1APCNbYWaSMBDIem0Ck5f3d6yjIhW7F4q/view?usp=drive_link',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Colócate entre dos barras paralelas y, sujetándote de ellas, baja el cuerpo flexionando los codos hasta que los brazos queden en un ángulo de 90 grados. Luego, empuja con los tríceps para elevar el cuerpo de nuevo a la posición inicial.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Pecho',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/15KC-CzGUVbfNLuenmgqUgBdscwTtQWN1/view?usp=drive_link',
                'nombres' => 'Curl de bíceps con barra',
                'descripcion' => 'Flexiona los codos para levantar la barra hacia los hombros, manteniendo la espalda recta y evitando balancearte. Luego, baja la barra de manera controlada hasta la posición inicial.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/10Jb_7gG7ZMCLS-nkgAoOFWDTlYHz1w4L/view?usp=drive_link',
                'nombres' => 'Elevaciones laterales con mancuernas',
                'descripcion' => 'Con los codos ligeramente doblados, eleva las mancuernas hacia los lados hasta que los brazos estén paralelos al suelo, apretando los hombros al final del movimiento. Baja las mancuernas de manera controlada hasta la posición inicial.',
                'series' => 6,
                'repeticiones' => '14-15',
                'tipo' => 'Ganancia Muscular',
                'musculo' => 'Brazo',
                'intensidad' => 'Alta'
            ],
            // 2DO PLAN - DEFINICION
            // Nivel 1: Leve (Aficionado)
            [
                'imagen' => 'https://drive.google.com/file/d/1f7fuSYX-CuxPop0fIsNR6uJds-1-2xxM/view?usp=drive_link',
                'nombres' => 'Sentadillas con barra',
                'descripcion' => 'Baja el cuerpo flexionando las rodillas y empujando las caderas hacia atrás, manteniendo la espalda recta. Baja hasta que los muslos estén paralelos al suelo (o más abajo si puedes) y luego, empuja hacia arriba con los talones para regresar a la posición inicial.',
                'series' => 3,
                'repeticiones' => '10-13',
                'tipo' => 'Definición',
                'musculo' => 'Pierna',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/16GWunZZsASyem5g-buz3ovp8Tnqck0FL/view?usp=drive_link',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Acuéstate en un banco plano y sujeta una barra con las manos ligeramente más anchas que los hombros. Baja la barra controladamente hacia el pecho, asegurándote de que los codos estén en un ángulo de 45 grados. Luego, empuja la barra hacia arriba hasta extender completamente los brazos.',
                'series' => 3,
                'repeticiones' => '10-13',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1APCNbYWaSMBDIem0Ck5f3d6yjIhW7F4q/view?usp=drive_link',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Colócate entre dos barras paralelas y, sujetándote de ellas, baja el cuerpo flexionando los codos hasta que los brazos queden en un ángulo de 90 grados. Luego, empuja con los tríceps para elevar el cuerpo de nuevo a la posición inicial.',
                'series' => 3,
                'repeticiones' => '10-13',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1Yyzq_HRh-2RnjiwywzsrXmf79wdD-rIO/view?usp=drive_link',
                'nombres' => 'Sentadillas al aire',
                'descripcion' => 'Baja el cuerpo como si fueras a sentarte en una silla, asegurándote de que las rodillas no sobrepasen los dedos de los pies. Luego, empuja hacia arriba con los talones para regresar a la posición inicial.',
                'series' => 3,
                'repeticiones' => '12-15',
                'tipo' => 'Definición',
                'musculo' => 'Pierna',
                'intensidad' => 'Baja'
            ],
            // Nivel 2: Medio (Intermedios)
            [
                'imagen' => 'https://drive.google.com/file/d/1uDp722XgODlUhgjyVTE6vyd-HrkXeQR4/view?usp=drive_link',
                'nombres' => 'Sentadilla Búlgara',
                'descripcion' => 'Baja el cuerpo hacia abajo, llevando las caderas hacia atrás y doblando las rodillas hasta que los muslos estén casi paralelos al suelo o más abajo si es posible. Empuja con los talones para volver a la posición inicial.',
                'series' => 4,
                'repeticiones' => '10-12 por pierna',
                'tipo' => 'Definición',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1cBNDhkuV_xl6AxrxE0GkTAWMzurBDxlq/view?usp=drive_link',
                'nombres' => 'Peso Muerto con Mancuernas',
                'descripcion' => 'Con la espalda recta, flexiona ligeramente las rodillas y, manteniendo la cadera fija, baja el torso hacia el suelo deslizando las mancuernas por las piernas.',
                'series' => 4,
                'repeticiones' => '10-12',
                'tipo' => 'Definición',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1jGl5YA412yOKSOLk74EN9hBkRgrntUz9/view?usp=drive_link',
                'nombres' => 'Flexiones Diamante',
                'descripcion' => 'Colócate en posición de flexión estándar, pero acerca las manos formando un diamante con los dedos índices y pulgares. Baja el cuerpo controladamente, manteniendo los codos cerca del torso, hasta que el pecho casi toque el suelo.',
                'series' => 4,
                'repeticiones' => '12-15',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1ME6eJk-CKbR-5ePZQJve-kQlUwSPE96K/view?usp=drive_link',
                'nombres' => 'Plancha con Elevación de Pierna',
                'descripcion' => 'Comienza en posición de plancha con los codos en el suelo y el cuerpo recto. Eleva una pierna hacia arriba, manteniéndola recta y la cadera estable. Mantén la posición durante 45-60 segundos y alterna entre las piernas.',
                'series' => 4,
                'repeticiones' => '30-40 segundos',
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/13dly6qslKtIiKfIcbvpvz6awrH49CG0X/view?usp=drive_link',
                'nombres' => 'Bicicleta estática (25-30 minutos)',
                'descripcion' => 'Sube a la bicicleta estática y ajusta la resistencia para que sea moderada. Pedalea a un ritmo alto, manteniendo un esfuerzo constante durante 35-40 minutos.',
                'series' => 1,
                'repeticiones' => '25-30 min',
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'

            ],
            // Nivel 3: Alta (Avanzado)
            [
                'imagen' => 'https://drive.google.com/file/d/1f7fuSYX-CuxPop0fIsNR6uJds-1-2xxM/view?usp=drive_link',
                'nombres' => 'Sentadillas con barra',
                'descripcion' => 'Con los pies al ancho de los hombros, baja las caderas hacia abajo y hacia atrás, como si te fueras a sentar. Luego, empuja hacia arriba, extendiendo las piernas.',
                'series' => 5,
                'repeticiones' => '12-15',
                'tipo' => 'Definición',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/16GWunZZsASyem5g-buz3ovp8Tnqck0FL/view?usp=drive_link',
                'nombres' => 'Press de banca con barra',
                'descripcion' => 'Acuéstate en un banco plano con los pies firmemente en el suelo. Baja la barra controladamente hacia el pecho, asegurándote de que los codos estén en un ángulo de 45 grados. Empuja la barra hacia arriba hasta extender completamente los brazos.',
                'series' => 5,
                'repeticiones' => '12-15',
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1APCNbYWaSMBDIem0Ck5f3d6yjIhW7F4q/view?usp=drive_link',
                'nombres' => 'Fondos en paralelas',
                'descripcion' => 'Baja el cuerpo controladamente flexionando los codos hasta que los brazos estén en un ángulo de 90 grados. Luego, empuja hacia arriba para regresar a la posición inicial.',
                'series' => 4,
                'repeticiones' => 12,
                'tipo' => 'Definición',
                'musculo' => 'Pecho',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1ME6eJk-CKbR-5ePZQJve-kQlUwSPE96K/view?usp=drive_link',
                'nombres' => 'Plancha con Elevación de Pierna',
                'descripcion' => 'Comienza en posición de plancha con los codos en el suelo y el cuerpo recto. Eleva una pierna hacia arriba, manteniéndola recta y la cadera estable. Mantén la posición durante 45-60 segundos y alterna entre las piernas.',
                'series' => 6,
                'repeticiones' => '45-60 segundos',
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/13dly6qslKtIiKfIcbvpvz6awrH49CG0X/view?usp=drive_link',
                'nombres' => 'Bicicleta estática (35-40 minutos)',
                'descripcion' => 'Sube a la bicicleta estática y ajusta la resistencia para que sea moderada. Pedalea a un ritmo alto, manteniendo un esfuerzo constante durante 35-40 minutos.',
                'series' => 1,
                'repeticiones' => '35-40 min',
                'tipo' => 'Definición',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            // 3ER PLAN - PERDIDA DE PESO
            // Nivel 1: Leve (Aficionado)
            [
                'imagen' => 'https://drive.google.com/file/d/1BQ3hST03b7GNKnfPfcViNR3imoQ4r19t/view?usp=drive_link',
                'nombres' => 'Peso muerto con pesa rusa',
                'descripcion' => 'Ejercicio para fortalecer la cadera posterior y mejorar la estabilidad.',
                'series' => 3,
                'repeticiones' => '12-13',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/11DhAZ37NGvVhrVZT6UIanlc7OxrZGh5s/view?usp=drive_link',
                'nombres' => 'Flexiones de pecho',
                'descripcion' => 'Ejercicio de empuje para fortalecer el tren superior.',
                'series' => 3,
                'repeticiones' => '10-13',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pectoral',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1mCS2h_yVM9PmJNh5B42hSSfj9TfDheKH/view?usp=drive_link',
                'nombres' => 'Sentadillas con salto',
                'descripcion' => 'Ejercicio explosivo para piernas y resistencia.',
                'series' => 3,
                'repeticiones' => '12-13',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1f39bxv0XUSbCyyjkFyg_a899otO1r3i2/view?usp=drive_link',
                'nombres' => 'Mountain Climbers (Escaladores)',
                'descripcion' => 'En posición de plancha, lleva una rodilla hacia el pecho y luego cambia rápidamente a la otra pierna. Mantén el ritmo constante.',
                'series' => 3,
                'repeticiones' => '30 segundos',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1caMFqeYeAuk8akDyIN3QGwvMDvukx8va/view?usp=drive_link',
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
                'imagen' => 'https://drive.google.com/file/d/1BQ3hST03b7GNKnfPfcViNR3imoQ4r19t/view?usp=drive_link',
                'nombres' => 'Peso muerto con pesa rusa',
                'descripcion' => 'De pie con los pies al ancho de los hombros, sujeta el kettlebell con ambas manos. Baja las caderas hacia atrás, mantén la espalda recta y las piernas ligeramente dobladas. Levanta el kettlebell llevando las caderas hacia adelante y apretando los glúteos.',
                'series' => 4,
                'repeticiones' => '15-17',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/104tf8muEzPuMzxttJJrlfS9in970azly/view?usp=drive_link',
                'nombres' => 'Flexiones de pecho con elevación de pies',
                'descripcion' => 'Coloca los pies elevados sobre una superficie (como un banco). Baja el pecho hacia el suelo en una flexión y empuja con las manos para subir. Mantén el cuerpo alineado desde los pies hasta la cabeza.',
                'series' => 4,
                'repeticiones' => '12-14',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pectoral',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1mCS2h_yVM9PmJNh5B42hSSfj9TfDheKH/view?usp=drive_link',
                'nombres' => 'Sentadillas con salto',
                'descripcion' => 'Realiza una sentadilla normal, bajando las caderas hacia el suelo. Al subir, impulsa el cuerpo hacia arriba en un salto explosivo. Aterriza suavemente y repite.',
                'series' => 4,
                'repeticiones' => '15',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1f39bxv0XUSbCyyjkFyg_a899otO1r3i2/view?usp=drive_link',
                'nombres' => 'Mountain Climbers (Escaladores)',
                'descripcion' => 'En posición de plancha, lleva una rodilla hacia el pecho y luego cambia rápidamente a la otra pierna. Mantén el ritmo constante.',
                'series' => 4,
                'repeticiones' => '40 segundos',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1caMFqeYeAuk8akDyIN3QGwvMDvukx8va/view?usp=drive_link',
                'nombres' => 'Cardio moderado (30 minutos)',
                'descripcion' => 'Caminata rápida en inclinación para mejorar resistencia cardiovascular.',
                'series' => 1,
                'repeticiones' => 1, // Se considera una sesión
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            // Nivel 3: Alta (Avanzado)
            [
                'imagen' => 'https://drive.google.com/file/d/1BQ3hST03b7GNKnfPfcViNR3imoQ4r19t/view?usp=drive_link',
                'nombres' => 'Peso muerto con pesa rusa (a mayor carga)',
                'descripcion' => 'De pie con los pies al ancho de los hombros, sujeta el kettlebell con ambas manos. Baja las caderas hacia atrás, mantén la espalda recta y las piernas ligeramente dobladas. Levanta el kettlebell llevando las caderas hacia adelante y apretando los glúteos.',
                'series' => 6,
                'repeticiones' => '12-15',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta',
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/11DhAZ37NGvVhrVZT6UIanlc7OxrZGh5s/view?usp=drive_link',
                'nombres' => 'Flexiones de pecho',
                'descripcion' => 'Coloca los pies elevados sobre una superficie (como un banco). Baja el pecho hacia el suelo en una flexión y empuja con las manos para subir. Mantén el cuerpo alineado desde los pies hasta la cabeza.',
                'series' => 6,
                'repeticiones' => '12-15',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pectoral',
                'intensidad' => 'Alta',
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1mCS2h_yVM9PmJNh5B42hSSfj9TfDheKH/view?usp=drive_link',
                'nombres' => 'Sentadillas con salto',
                'descripcion' => 'Realiza una sentadilla normal, bajando las caderas hacia el suelo. Al subir, impulsa el cuerpo hacia arriba en un salto explosivo. Aterriza suavemente y repite.',
                'series' => 6,
                'repeticiones' => '20',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Pierna',
                'intensidad' => 'Alta',
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1f39bxv0XUSbCyyjkFyg_a899otO1r3i2/view?usp=drive_link',
                'nombres' => 'Mountain Climbers (Escaladores)',
                'descripcion' => 'En posición de plancha, lleva una rodilla hacia el pecho y luego cambia rápidamente a la otra pierna. Mantén el ritmo constante.',
                'series' => 6,
                'repeticiones' => '40 segundos',
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1caMFqeYeAuk8akDyIN3QGwvMDvukx8va/view?usp=drive_link',
                'nombres' => 'Cinta de correr (50 minutos)',
                'descripcion' => 'Realiza una caminata rápida al aire libre o en un lugar cerrado, manteniendo un ritmo constante que eleve tu frecuencia cardíaca.',
                'series' => 1,
                'repeticiones' => 1, // Se considera una sesión
                'tipo' => 'Pérdida de Peso',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            // 4TO PLAN - EJERCICIOS CARDIOVASCULARES
            // Nivel 1: Leve (Aficionado)
            [
                'imagen' => 'https://drive.google.com/file/d/1OC-W2Tg_dFYqNTXMc-EOpYw8XXBceVQD/view?usp=drive_link',
                'nombres' => 'Caminata rápida en inclinación',
                'descripcion' => 'Caminata a ritmo acelerado en superficie inclinada.',
                'series' => 1,
                'repeticiones' => '25 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/13dly6qslKtIiKfIcbvpvz6awrH49CG0X/view?usp=drive_link',
                'nombres' => 'Bicicleta estática a ritmo moderado',
                'descripcion' => 'Pedalea en la bicicleta estática a un ritmo constante y moderado, manteniendo un ritmo que te permita hablar, pero te cueste algo de esfuerzo.',
                'series' => 1,
                'repeticiones' => '25 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1vnUCoSGzqxZfW1bUGL9L1i173uhPFlia/view?usp=drive_link',
                'nombres' => 'Nadar a ritmo suave',
                'descripcion' => 'Nadar a un ritmo tranquilo, realizando movimientos fluidos y controlados, sin prisas.',
                'series' => 1,
                'repeticiones' => '25 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1caMFqeYeAuk8akDyIN3QGwvMDvukx8va/view?usp=drive_link',
                'nombres' => 'Cardio LISS (Low-Intensity Steady State)',
                'descripcion' => 'Realiza una caminata ligera o pedaleo suave en bicicleta durante 25 minutos. El objetivo es mantener una intensidad constante y moderada sin aumentar mucho el ritmo.',
                'series' => 1,
                'repeticiones' => '25 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Leve'
            ],
            // Nivel 2: Medio (Intermedios)
            [
                'imagen' => 'https://drive.google.com/file/d/1OC-W2Tg_dFYqNTXMc-EOpYw8XXBceVQD/view?usp=drive_link',
                'nombres' => 'Caminata rápida con intervalos de trote',
                'descripcion' => 'Comienza caminando rápidamente durante 3-5 minutos para calentar, luego alterna entre 1-2 minutos de trote y 2-3 minutos de caminata rápida. Repite los intervalos durante 45 minutos',
                'series' => 1,
                'repeticiones' => '45 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/13dly6qslKtIiKfIcbvpvz6awrH49CG0X/view?usp=drive_link',
                'nombres' => 'Bicicleta estática con intervalos de alta velocidad',
                'descripcion' => 'Pedalea en la bicicleta durante 45 minutos',
                'series' => 1,
                'repeticiones' => '45 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1vnUCoSGzqxZfW1bUGL9L1i173uhPFlia/view?usp=drive_link',
                'nombres' => 'Nadar con intervalos de alta intensidad',
                'descripcion' => 'Nada a un ritmo cómodo durante 5 minutos para calentar. Luego, alterna entre 30 segundos de nado rápido (alta intensidad) y 1-2 minutos de nado suave o descanso activo. ',
                'series' => 1,
                'repeticiones' => '40 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1caMFqeYeAuk8akDyIN3QGwvMDvukx8va/view?usp=drive_link',
                'nombres' => 'Cardio HIIT',
                'descripcion' => 'Realiza un sprint de alta intensidad durante 30 segundos, seguido de 1 minuto de caminata o trote suave para recuperarte. Repite este ciclo durante 15-20 minutos, manteniendo la intensidad alta durante los sprints.',
                'series' => 1,
                'repeticiones' => '15-20 minutos',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Media'
            ],
            // Nivel 3: Alta (Avanzado)
            [
                'imagen' => 'https://drive.google.com/file/d/1OC-W2Tg_dFYqNTXMc-EOpYw8XXBceVQD/view?usp=drive_link',
                'nombres' => 'Correr a ritmo constante en pendiente',
                'descripcion' => 'Corre en una superficie inclinada (como una colina o en una cinta de correr con inclinación) a un ritmo constante durante 50 minutos a 1 hora.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/13dly6qslKtIiKfIcbvpvz6awrH49CG0X/view?usp=drive_link',
                'nombres' => 'Bicicleta estática con intervalos de máxima velocidad',
                'descripcion' => 'Pedalea a un ritmo moderado durante 5 minutos para calentar. Luego, alterna entre 1-2 minutos de pedaleo a máxima velocidad y 3 minutos de pedaleo suave o descanso activo.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1vnUCoSGzqxZfW1bUGL9L1i173uhPFlia/view?usp=drive_link',
                'nombres' => 'Nadar con intervalos de alta velocidad',
                'descripcion' => 'Nadar a un ritmo suave durante 5 minutos como calentamiento. Luego, alterna entre 30 segundos de nado rápido (alta velocidad) y 1-2 minutos de nado suave.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1caMFqeYeAuk8akDyIN3QGwvMDvukx8va/view?usp=drive_link',
                'nombres' => 'Cardio HIIT (High-Intensity Interval Training)',
                'descripcion' => 'Realiza sprints de 30 segundos a máxima velocidad, seguidos de 1 minuto de caminata o trote suave para recuperarte. Repite este ciclo durante 50 minutos a 1 hora.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/13dly6qslKtIiKfIcbvpvz6awrH49CG0X/view?usp=drive_link',
                'nombres' => 'Sprints en bicicleta estática (HIIT)',
                'descripcion' => 'Alterna entre sprints intensos de 30 segundos a máxima velocidad y 1-2 minutos de pedaleo suave para recuperarte. Realiza este ciclo durante 50 minutos a 1 hora.',
                'series' => 1,
                'repeticiones' => '50 minutos - 1 hora',
                'tipo' => 'Ejercicio Cardiovascular',
                'musculo' => 'Corporal',
                'intensidad' => 'Alta'
            ]
        ]);
    }
}

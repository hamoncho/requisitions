<?php

namespace Database\Seeders;

use App\Models\Indicator;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_1_1_3 = Project::where('index', '1.1.3')->first();

        $project_1_2_2 = Project::where('index', '1.2.2')->first();
        $project_1_2_3 = Project::where('index', '1.2.3')->first();
        $project_1_2_4 = Project::where('index', '1.2.4')->first();
        $project_1_2_5 = Project::where('index', '1.2.5')->first();

        $project_1_3_1 = Project::where('index', '1.3.1')->first();
        $project_1_3_2 = Project::where('index', '1.3.2')->first();

        $project_1_4_2 = Project::where('index', '1.4.2')->first();
        $project_1_4_3 = Project::where('index', '1.4.3')->first();

        $project_et_1_1 = Project::where('index', 'ET.1.1')->first();
        $project_et_1_2 = Project::where('index', 'ET.1.2')->first();

        $project_2_2_1 = Project::where('index', '2.2.1')->first();
        $project_2_2_2 = Project::where('index', '2.2.2')->first();
        $project_2_2_3 = Project::where('index', '2.2.3')->first();
        $project_2_2_3 = Project::where('index', '2.2.3')->first();
        $project_2_2_4 = Project::where('index', '2.2.4')->first();
        $project_2_2_5 = Project::where('index', '2.2.5')->first();
        $project_2_2_6 = Project::where('index', '2.2.6')->first();

        $project_2_3_1 = Project::where('index', '2.3.1')->first();

        $project_et_2_1 = Project::where('index', 'ET.2.1')->first();
        $project_et_2_2 = Project::where('index', 'ET.2.2')->first();

        $project_3_1_1 = Project::where('index', '3.1.1')->first();
        $project_3_1_2 = Project::where('index', '3.1.2')->first();

        $project_3_2_2 = Project::where('index', '3.2.2')->first();
        $project_3_2_3 = Project::where('index', '3.2.3')->first();
        $project_3_2_5 = Project::where('index', '3.2.5')->first();

        $project_3_3_1 = Project::where('index', '3.3.1')->first();
        $project_3_3_2 = Project::where('index', '3.3.2')->first();

        $project_et_3_1 = Project::where('index', 'ET.3.1')->first();
        $project_et_3_2 = Project::where('index', 'ET.3.2')->first();

        $project_4_1_1 = Project::where('index', '4.1.1')->first();
        $project_4_1_2 = Project::where('index', '4.1.2')->first();
        $project_4_1_3 = Project::where('index', '4.1.3')->first();
        $project_4_1_4 = Project::where('index', '4.1.4')->first();

        $project_4_2_1 = Project::where('index', '4.2.1')->first();
        $project_4_2_2 = Project::where('index', '4.2.2')->first();
        $project_4_2_3 = Project::where('index', '4.2.3')->first();
        $project_4_2_4 = Project::where('index', '4.2.4')->first();
        $project_4_2_5 = Project::where('index', '4.2.5')->first();

        $project_4_3_1 = Project::where('index', '4.3.1')->first();
        $project_4_3_3 = Project::where('index', '4.3.3')->first();

        $project_et_4_1 = Project::where('index', 'ET.4.1')->first();
        $project_et_4_2 = Project::where('index', 'ET.4.2')->first();

        $project_5_1_3 = Project::where('index', '5.1.3')->first();
        $project_5_1_4 = Project::where('index', '5.1.4')->first();
        $project_5_1_5 = Project::where('index', '5.1.5')->first();
        $project_5_1_6 = Project::where('index', '5.1.6')->first();

        $project_5_2_1 = Project::where('index', '5.2.1')->first();

        $project_5_3_1 = Project::where('index', '5.3.1')->first();
        $project_5_3_2 = Project::where('index', '5.3.2')->first();

        $project_et_5_1 = Project::where('index', 'ET.5.1')->first();
        $project_et_5_2 = Project::where('index', 'ET.5.2')->first();

        $project_6_1_2 = Project::where('index', '6.1.2')->first();

        $project_6_2_3 = Project::where('index', '6.2.3')->first();
        $project_6_2_4 = Project::where('index', '6.2.4')->first();

        $project_6_3_1 = Project::where('index', '6.3.1')->firstOrFail();

        $project_6_4_1 = Project::where('index', '6.4.1')->first();
        $project_6_4_2 = Project::where('index', '6.4.2')->firstOrFail();
        $project_6_4_3 = Project::where('index', '6.4.3')->firstOrFail();

        $project_et_6_1 = Project::where('index', 'ET.6.1')->first();
        $project_et_6_2 = Project::where('index', 'ET.6.2')->first();

        // for project_1_1_3
        Indicator::create([
            'index' => '1.1.3.2',
            'description' => 'Porcentaje de estudiantes de licenciatura inscritos en programas acreditados',
            'project_id' => $project_1_1_3->id,
        ]);

        // for project_1_2_2
        Indicator::create([
            'index' => '1.2.2.1',
            'description' => 'Número de académicos participantes en cursos de capacitación',
            'project_id' => $project_1_2_2->id,
        ]);

        // for project_1_2_3
        Indicator::create([
            'index' => '1.2.3.1',
            'description' => 'Número de académicos con grado de especialidad, maestría o doctorado',
            'project_id' => $project_1_2_3->id,
        ]);

        // for project_1_2_4
        Indicator::create([
            'index' => '1.2.4.1',
            'description' => 'Número de académicos con reconocimiento al perfil deseable',
            'project_id' => $project_1_2_4->id,
        ]);

        // for project_1_2_5
        Indicator::create([
            'index' => '1.2.5.1',
            'description' => 'Académico con competencias digitales',
            'project_id' => $project_1_2_5->id,
        ]);

        // for project_1_3_1
        Indicator::create([
            'index' => '1.3.1.1',
            'description' => 'Número de académicos formados en recursos educativos digitales, en ambientes virtuales de aprendizaje',
            'project_id' => $project_1_3_1->id,
        ]);

        // for project_1_3_2
        Indicator::create([
            'index' => '1.3.2.1',
            'description' => 'Número personal de apoyo y asistencia a la educación y directivos que tomaron al menos un curso de capacitación presencial o a distancia',
            'project_id' => $project_1_3_2->id,
        ]);

        // for project_1_4_2
        Indicator::create([
            'index' => '1.4.2.1',
            'description' => 'Académico y estudiante participantes  en materia académica y/o de investigación',
            'project_id' => $project_1_4_2->id,
        ]);

        // for project_1_4_3
        Indicator::create([
            'index' => '1.4.3.1',
            'description' => 'Porcentaje de académicos y estudiantes con habilidad de comunicación en una segunda lengua',
            'project_id' => $project_1_4_3->id,
        ]);

        // for project_et_1_1
        Indicator::create([
            'index' => 'ET.1.1.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros que implementaron campañas de concientización y promoción de la bioética',
            'project_id' => $project_et_1_1->id,
        ]);

        // for project_et_1_2
        Indicator::create([
            'index' => 'ET.1.2.1',
            'description' => 'Porcentaje de programas académicos con elementos orientados hacia el desarrollo sustentable y la inclusión',
            'project_id' => $project_et_1_2->id,
        ]);

        // for project_2_2_1
        Indicator::create([
            'index' => '2.2.1.1',
            'description' => 'Número de estudiantes beneficiados con una beca',
            'project_id' => $project_2_2_1->id,
        ]);

        // for project_2_2_2
        Indicator::create([
            'index' => '2.2.2.1',
            'description' => 'Tasa de variación de la matrícula de licenciatura',
            'project_id' => $project_2_2_2->id,
        ]);

        // for project_2_2_3
        Indicator::create([
            'index' => '2.2.3.1',
            'description' => 'Tasa de variación de la matrícula de posgrado',
            'project_id' => $project_2_2_3->id,
        ]);

        // for project_2_2_4
        Indicator::create([
            'index' => '2.2.4.1',
            'description' => 'Tasa de variación de la matrícula de educación no escolarizada -a distancia- y mixta',
            'project_id' => $project_2_2_4->id,
        ]);

        // for project_2_2_5
        Indicator::create([
            'index' => '2.2.5.1',
            'description' => 'Número de tutores formados',
            'project_id' => $project_2_2_5->id,
        ]);

        // for project_2_2_6
        Indicator::create([
            'index' => '2.2.6.1',
            'description' => 'Índice de eficiencia terminal de licenciatura',
            'project_id' => $project_2_2_6->id,
        ]);

        // for project_2_3_1
        Indicator::create([
            'index' => '2.3.1.1',
            'description' => 'Programas académicos en modalidad escolarizada autorizados',
            'project_id' => $project_2_3_1->id,
        ]);

        // for project_et_2_1
        Indicator::create([
            'index' => 'ET.2.1.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros con el programa de equidad y justicia social implementado',
            'project_id' => $project_et_2_1->id,
        ]);

        // for project_et_2_2
        Indicator::create([
            'index' => 'ET.2.2.1',
            'description' => 'Porcentaje de Institutos Tecnológicos que cuentan con espacios accesibles a personas con discapacidad y dan atención a grupos vulnerables',
            'project_id' => $project_et_2_2->id,
        ]);

        // for project_3_1_1
        Indicator::create([
            'index' => '3.1.1.1',
            'description' => 'Porcentaje de la matrícula de nuevo ingreso que participa en alguno de los programas de primer nivel de atención',
            'project_id' => $project_3_1_1->id,
        ]);

        // for project_3_1_2
        Indicator::create([
            'index' => '3.1.2.1',
            'description' => 'Porcentaje de la matrícula de nuevo ingreso que participa en alguno de los programas de primer nivel de atención',
            'project_id' => $project_3_1_2->id,
        ]);

        // for project_3_2_2
        Indicator::create([
            'index' => '3.2.2.1',
            'description' => 'Numero de promotores culturales, cívicos y deportivos incorporados y/o formados',
            'project_id' => $project_3_2_2->id,
        ]);

        // for project_3_2_3
        Indicator::create([
            'index' => '3.2.3.1',
            'description' => 'Numero de eventos culturales, cívicos y deportivos realizados',
            'project_id' => $project_3_2_3->id,
        ]);

        // for project_3_2_5
        Indicator::create([
            'index' => '3.2.5.1',
            'description' => 'Número de convenios de uso compartido de instalaciones para las actividades científicas, tecnológicas y de innovación realizados',
            'project_id' => $project_3_2_5->id,
        ]);

        // for project_3_3_1
        Indicator::create([
            'index' => '3.3.1.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros que cuentan con comisiones de Seguridad e Higiene en el Trabajo instaladas y en operación',
            'project_id' => $project_3_3_1->id,
        ]);

        // for project_3_3_2
        Indicator::create([
            'index' => '3.3.2.1',
            'description' => 'Numero de estudiantes que prestan servicio social que incida en la atención de los problemas regionales o nacionales prioritarios',
            'project_id' => $project_3_3_2->id,
        ]);

        // for project_et_3_1
        Indicator::create([
            'index' => 'ET.3.1.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros que implementaron el código de conducta dirigido a la comunidad estudiantil',
            'project_id' => $project_et_3_1->id,
        ]);

        // for project_et_3_2
        Indicator::create([
            'index' => 'ET.3.2.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros que difundieron el código de conducta del TecNM entre la comunidad',
            'project_id' => $project_et_3_2->id,
        ]);

        // for project_4_1_1
        Indicator::create([
            'index' => '4.1.1.2',
            'description' => 'Porcentaje de académicos registrados en el SIN que incrementan de nivel',
            'project_id' => $project_4_1_1->id,
        ]);

        // for project_4_1_2
        Indicator::create([
            'index' => '4.1.2.1',
            'description' => 'Número de cuerpos académicos conformados y en operación',
            'project_id' => $project_4_1_2->id,
        ]);

        // for project_4_1_3
        Indicator::create([
            'index' => '4.1.3.1',
            'description' => 'Número de grupos de trabajo interdisciplinario para la innovación y emprendimiento integrados y en operación',
            'project_id' => $project_4_1_3->id,
        ]);

        // for project_4_1_4
        Indicator::create([
            'index' => '4.1.4.1',
            'description' => 'Número de estudiantes de licenciatura que participan en proyectos de investigación',
            'project_id' => $project_4_1_4->id,
        ]);

        // for project_4_2_1
        Indicator::create([
            'index' => '4.2.1.1',
            'description' => 'Número de proyectos de investigación científica, desarrollo tecnológico e innovación financiados',
            'project_id' => $project_4_2_1->id,
        ]);

        // for project_4_2_2
        Indicator::create([
            'index' => '4.2.2.1',
            'description' => 'Número de alianzas con los diferentes sectores regionales para desarrollar proyectos de Ciencia, Tecnología e Innovación',
            'project_id' => $project_4_2_2->id,
        ]);

        // for project_4_2_3
        Indicator::create([
            'index' => '4.2.3.1',
            'description' => 'Número de académicos que participan en redes de investigación, científica y tecnológica',
            'project_id' => $project_4_2_3->id,
        ]);

        // for project_4_2_4
        Indicator::create([
            'index' => '4.2.4.1',
            'description' => 'Número de estudiantes de posgrado que participan en proyectos de investigación',
            'project_id' => $project_4_2_4->id,
        ]);

        // for project_4_2_5
        Indicator::create([
            'index' => '4.2.5.1',
            'description' => 'Número de artículos de investigación de académicos publicados en revistas indexadas nacionales e internacionales como parte del TecNM',
            'project_id' => $project_4_2_5->id,
        ]);

        // for project_4_3_1
        Indicator::create([
            'index' => '4.3.1.1',
            'description' => 'Número de convenios de uso compartido de instalaciones para las actividades científicas, tecnológicas y de innovación realizados',
            'project_id' => $project_4_3_1->id,
        ]);

        // for project_4_3_3
        Indicator::create([
            'index' => '4.3.3.1',
            'description' => 'Número de laboratorios certificados',
            'project_id' => $project_4_3_3->id,
        ]);

        // for project_et_4_1
        Indicator::create([
            'index' => 'ET.4.1.1',
            'description' => 'Porcentaje de proyectos de investigación con enfoque en inclusión igualdad y desarrollo sustentable',
            'project_id' => $project_et_4_1->id,
        ]);

        // for project_et_4_2
        Indicator::create([
            'index' => 'ET.4.2.1',
            'description' => 'Número de acciones afirmativas para la equidad de género implementadas',
            'project_id' => $project_et_4_2->id,
        ]);

        // for project_5_1_3
        Indicator::create([
            'index' => '5.1.3.1',
            'description' => 'Número de convenios vigentes de vinculación entre institutos tecnológicos y centros',
            'project_id' => $project_5_1_3->id,
        ]);

        // for project_5_1_4
        Indicator::create([
            'index' => '5.1.4.1',
            'description' => 'Número de convenios vigentes de vinculación de los institutos tecnológicos y centros con otras instituciones de educación superior nacionales e internacionales',
            'project_id' => $project_5_1_4->id,
        ]);

        // for project_5_1_5
        Indicator::create([
            'index' => '5.1.5.1',
            'description' => 'Número de convenios o contratos vigentes de vinculación con los sectores público, social y privado',
            'project_id' => $project_5_1_5->id,
        ]);

        // for project_5_1_6
        Indicator::create([
            'index' => '5.1.6.1',
            'description' => 'Número de estudiantes que participan en proyectos de vinculación con los sectores público, social y privado',
            'project_id' => $project_5_1_6->id,
        ]);

        // for project_5_2_1
        Indicator::create([
            'index' => '5.2.1.1',
            'description' => 'Número de registros de propiedad intelectual',
            'project_id' => $project_5_2_1->id,
        ]);

        Indicator::create([
            'index' => '5.2.1.3',
            'description' => 'Número de convenios o contratos en materia de registro y protección de la propiedad intelectual con organismos y agencias nacionales e internacionales realizados',
            'project_id' => $project_5_2_1->id,
        ]);

        // for project_5_3_1
        Indicator::create([
            'index' => '5.3.1.1',
            'description' => 'Número de empresas incubadas',
            'project_id' => $project_5_3_1->id,
        ]);

        // for project_5_3_2
        Indicator::create([
            'index' => '5.3.2.1',
            'description' => 'Egresado incorporado al mercado laboral',
            'project_id' => $project_5_3_2->id,
        ]);

        // for project_et_5_1
        Indicator::create([
            'index' => 'ET.5.1.1',
            'description' => 'Número de proyectos de emprendimiento con enfoque innovación y sustentabilidad',
            'project_id' => $project_et_5_1->id,
        ]);

        // for project_et_5_2
        Indicator::create([
            'index' => 'ET.5.2.1',
            'description' => 'Número de estudiantes de servicio social que participan en actividades de inclusión e igualdad',
            'project_id' => $project_et_5_2->id,
        ]);

        // for project_6_1_2
        Indicator::create([
            'index' => '6.1.2.1',
            'description' => 'Manual de organización actualizado',
            'project_id' => $project_6_1_2->id,
        ]);

        // for project_6_1_3
        Indicator::create([
            'index' => '6.2.3.1',
            'description' => 'Porcentaje de Institutos tecnológicos y centros que cuentan con sistema de gestión de la calidad certificado',
            'project_id' => $project_6_2_3->id,
        ]);

        Indicator::create([
            'index' => '6.2.3.2',
            'description' => 'Porcentaje de Institutos tecnológicos y centros que cuentan con sistema de gestión ambiental certificado',
            'project_id' => $project_6_2_3->id,
        ]);

        Indicator::create([
            'index' => '6.2.3.3',
            'description' => 'Porcentaje de Institutos tecnológicos y centros que cuentan con sistema de gestión de la energía certificado',
            'project_id' => $project_6_2_3->id,
        ]);

        Indicator::create([
            'index' => '6.2.3.4',
            'description' => 'Porcentaje de Institutos tecnológicos y centros que cuentan con el modelo de la equidad de género certificado',
            'project_id' => $project_6_2_3->id,
        ]);

        Indicator::create([
            'index' => '6.2.3.5',
            'description' => 'Porcentaje de Institutos tecnológicos y centros que cuentan con sistema de gestión de la seguridad en el trabajo certificado',
            'project_id' => $project_6_2_3->id,
        ]);

        Indicator::create([
            'index' => '6.2.3.6',
            'description' => 'Porcentaje de Institutos tecnológicos y centros que cuentan con reconocimiento a la responsabilidad social',
            'project_id' => $project_6_2_3->id,
        ]);

        //for project_6_2_4
        Indicator::create([
            'index' => '6.2.4.1',
            'description' => 'Número de sistemas de información creados, integrados y/o actualizados',
            'project_id' => $project_6_2_4->id,
        ]);

        // for project_6_3_1
        Indicator::create([
            'index' => '6.3.1.1',
            'description' => 'Incremento del presupuesto del TecNM gestionado',
            'project_id' => $project_6_3_1->id,
        ]);

        // for project_6_4_1
        Indicator::create([
            'index' => '6.4.1.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros con Comités de Ética y Previsión de Conflictos de Interés en Operación',
            'project_id' => $project_6_4_1->id,
        ]);

        // for project_6_4_2
        Indicator::create([
            'index' => '6.4.2.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros con programa de equidad, austeridad, eficiencia y racionalidad en el uso de los recursos implementados',
            'project_id' => $project_6_4_2->id,
        ]);

        // for project_6_4_3_1
        Indicator::create([
            'index' => '6.4.3.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros con informe de rendición de cuentas presentado',
            'project_id' => $project_6_4_3->id,
        ]);

        // for project_et_6_1
        Indicator::create([
            'index' => 'ET.6.1.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros que operan el programa institucional de cero plásticos de un solo uso',
            'project_id' => $project_et_6_1->id,
        ]);

        // for project_et_6_2
        Indicator::create([
            'index' => 'ET.6.2.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros que cuentan con un programa de utilización de energías renovables y del cuidado del medio ambiente en operación',
            'project_id' => $project_et_6_2->id,
        ]);
    }
}

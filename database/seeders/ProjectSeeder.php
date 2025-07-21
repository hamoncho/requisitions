<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $action_1_1 = Action::where('index', '1.1')->first();
        $action_1_2 = Action::where('index', '1.2')->first();
        $action_1_3 = Action::where('index', '1.3')->first();
        $action_1_4 = Action::where('index', '1.4')->first();
        $action_et_1 = Action::where('index', 'ET.1')->first();

        $action_2_2 = Action::where('index', '2.2')->first();
        $action_2_3 = Action::where('index', '2.3')->first();
        $action_et_2 = Action::where('index', 'ET.2')->first();

        $action_3_1 = Action::where('index', '3.1')->first();
        $action_3_2 = Action::where('index', '3.2')->first();
        $action_3_3 = Action::where('index', '3.3')->first();
        $action_et_3 = Action::where('index', 'ET.3')->first();

        $action_4_1 = Action::where('index', '4.1')->first();
        $action_4_2 = Action::where('index', '4.2')->first();
        $action_4_3 = Action::where('index', '4.3')->first();
        $action_et_4 = Action::where('index', 'ET.4')->first();

        $action_5_1 = Action::where('index', '5.1')->first();
        $action_5_2 = Action::where('index', '5.2')->first();
        $action_5_3 = Action::where('index', '5.3')->first();
        $action_et_5 = Action::where('index', 'ET.5')->first();

        $action_6_1 = Action::where('index', '6.1')->first();
        $action_6_2 = Action::where('index', '6.2')->first();
        $action_6_3 = Action::where('index', '6.3')->first();
        $action_6_4 = Action::where('index', '6.4')->first();
        $action_et_6 = Action::where('index', 'ET.6')->first();

        //for action_1_1
        Project::create([
            'index' => '1.1.3',
            'description' => 'Incremento del número de programas acreditados o autoevaluados positivamente en el nivel licenciatura',
            'action_id' => $action_1_1->id
        ]);

        //for action_1_2
        Project::create([
            'index' => '1.2.2',
            'description' => 'Fortalecimiento de los programas de formación y actualización docente y profesional del personal académico',
            'action_id' => $action_1_2->id
        ]);

        Project::create([
            'index' => '1.2.3',
            'description' => 'Impulso del personal académico para la realización de estudios de posgrado nacionales e internacionales',
            'action_id' => $action_1_2->id
        ]);

        Project::create([
            'index' => '1.2.4',
            'description' => 'Incremento del número de académicos con reconocimiento del perfil deseable conforme al Programas para el Desarrollo Profesional Docente (PRODEP)',
            'action_id' => $action_1_2->id
        ]);

        Project::create([
            'index' => '1.2.5',
            'description' => 'Actualización de la planta académica en competencias digitales',
            'action_id' => $action_1_2->id
        ]);

        //for action_1_3
        Project::create([
            'index' => '1.3.1',
            'description' => 'Incremento del uso de las TICs en el proceso enseñanza-aprendizaje',
            'action_id' => $action_1_3->id
        ]);

        Project::create([
            'index' => '1.3.2',
            'description' => 'Incremento de los niveles de competencias del personal de apoyo y asistencia a la educación y personal directivo',
            'action_id' => $action_1_3->id
        ]);

        // for action_1_4
        Project::create([
            'index' => '1.4.2',
            'description' => 'Incremento de la participación de académicos y estudiantes en las convocatorias nacionales e internacionales',
            'action_id' => $action_1_4->id
        ]);

        Project::create([
            'index' => '1.4.3',
            'description' => 'Incremento del número de académicos y estudiantes que adquieran la habilidad de comunicación en una segunda lengua',
            'action_id' => $action_1_4->id
        ]);

        // for action_et_1
        Project::create([
            'index' => 'ET.1.1',
            'description' => 'Fomento en la comunidad tecnológica del cuidado del medio ambiente, la biodiversidad y el entorno sustentable',
            'action_id' => $action_et_1->id
        ]);

        Project::create([
            'index' => 'ET.1.2',
            'description' => 'Integración en los planes y programas de estudio de elementos con orientación hacia el desarrollo sustentable y la inclusión',
            'action_id' => $action_et_1->id
        ]);

        //for action_2_2
        Project::create([
            'index' => '2.2.1',
            'description' => 'Incremento de la participación de estudiantes en programas oficiales de becas',
            'action_id' => $action_2_2->id
        ]);

        Project::create([
            'index' => '2.2.2',
            'description' => 'Incremento de la matrícula de licenciatura',
            'action_id' => $action_2_2->id
        ]);

        Project::create([
            'index' => '2.2.3',
            'description' => 'Incremento de la matrícula de posgrado.',
            'action_id' => $action_2_2->id
        ]);

        Project::create([
            'index' => '2.2.4',
            'description' => 'Incremento de la matrícula en la modalidad no escolarizada -a distancia- y mixta',
            'action_id' => $action_2_2->id
        ]);

        Project::create([
            'index' => '2.2.5',
            'description' => 'Fortalecimiento de los programas de tutorías',
            'action_id' => $action_2_2->id
        ]);

        Project::create([
            'index' => '2.2.6',
            'description' => 'Mejora de la eficiencia terminal',
            'action_id' => $action_2_2->id
        ]);

        //for action_2_3
        Project::create([
            'index' => '2.3.1',
            'description' => 'Incremento de numero de programas educativos en modalidades no escolarizada-a distancia-y mixta',
            'action_id' => $action_2_3->id
        ]);

        //for action_et_2
        Project::create([
            'index' => 'ET.2.1',
            'description' => 'Promoción de la equidad y justicia social en el quehacer del TecNM',
            'action_id' => $action_et_2->id
        ]);

        Project::create([
            'index' => 'ET.2.2',
            'description' => 'Atención y ampliación de cobertura de grupos vulnerables y en regiones de alta marginación',
            'action_id' => $action_et_2->id
        ]);

        //for action_3_1
        Project::create([
            'index' => '3.1.1',
            'description' => 'Atención de primer nivel o de prevención',
            'action_id' => $action_3_1->id
        ]);

        Project::create([
            'index' => '3.1.2',
            'description' => 'Atención de segundo nivel o de competición y exhibición',
            'action_id' => $action_3_1->id
        ]);

        //for action_3_2
        Project::create([
            'index' => '3.2.2',
            'description' => 'Incorporación y formación de promotores para el desarrollo de actividades del compromiso cívico, culturales-artísticas y deportivas',
            'action_id' => $action_3_2->id
        ]);

        Project::create([
            'index' => '3.2.3',
            'description' => 'Eventos intra y extra muros, de compromiso cívico, culturales, artísticos, deportivos y recreativos',
            'action_id' => $action_3_2->id
        ]);

        Project::create([
            'index' => '3.2.5',
            'description' => 'Aprovcechamiento interinstitucional de la instalaciones para las actividades científicas, tecnológicas y de innovación.',
            'action_id' => $action_3_2->id
        ]);

        //for action_3_3
        Project::create([
            'index' => '3.3.1',
            'description' => 'Cultura de la prevención mediante las Comisiones de Seguridad e Higiene en el Trabajo',
            'action_id' => $action_3_3->id
        ]);

        Project::create([
            'index' => '3.3.2',
            'description' => 'Promoción del servicio social como actividad que incida en la atención de los problemas regionales y/o nacionales prioritarios',
            'action_id' => $action_3_3->id
        ]);

        //for ET.3
        Project::create([
            'index' => 'ET.3.1',
            'description' => 'Implementación de un programa para eliminar el lenguaje sexista y excluyente entre los estudiantes',
            'action_id' => $action_et_3->id
        ]);

        Project::create([
            'index' => 'ET.3.2',
            'description' => 'Difusión del código de conducta del TecNM entre su comunidad',
            'action_id' => $action_et_3->id
        ]);

        //for action_4_1
        Project::create([
            'index' => '4.1.1',
            'description' => 'Impulso en el nivel licenciatura y posgrado a la alta formación en investigación y desarrollo tecnológico para el incremento y permanencia en el Sistema Nacional de Investigadores',
            'action_id' => $action_4_1->id
        ]);

        Project::create([
            'index' => '4.1.2',
            'description' => 'Impulso a la conformación, el desarrollo y consolidación de Cuerpos Académicos',
            'action_id' => $action_4_1->id
        ]);

        Project::create([
            'index' => '4.1.3',
            'description' => 'Conformación de grupos de trabajo interdisciplinario para la innovación y emprendimiento',
            'action_id' => $action_4_1->id
        ]);

        Project::create([
            'index' => '4.1.4',
            'description' => 'Formación de estudiantes de licenciatura como investigadores y tecnólogos',
            'action_id' => $action_4_1->id
        ]);

        //for action_4_2
        Project::create([
            'index' => '4.2.1',
            'description' => 'Impulso al desarrollo de proyectos de investigación científica, desarrollo tecnológico e innovación con enfoque a la solución de problemas regionales y nacionales',
            'action_id' => $action_4_2->id
        ]);

        Project::create([
            'index' => '4.2.2',
            'description' => 'Alianzas para el desarrollo',
            'action_id' => $action_4_2->id
        ]);

        Project::create([
            'index' => '4.2.3',
            'description' => 'Participación de académicos en redes de investigación científica y tecnológica',
            'action_id' => $action_4_2->id
        ]);

        Project::create([
            'index' => '4.2.4',
            'description' => 'Impulso a la participación de estudiantes de posgrado en proyectos de investigación',
            'action_id' => $action_4_2->id
        ]);

        Project::create([
            'index' => '4.2.5',
            'description' => 'Impulso a la publicación de resultados de la investigación en revistas nacionales e internacionales indexadas',
            'action_id' => $action_4_2->id
        ]);

        // for action_4_3
        Project::create([
            'index' => '4.3.1',
            'description' => 'Aprovechamiento interinstitucional de la instalaciones para las actividades científicas, tecnológicas y de innovación',
            'action_id' => $action_4_3->id
        ]);

        Project::create([
            'index' => '4.3.3',
            'description' => 'Promoción de la certificación de laboratorios con estándares nacionales e internacionales',
            'action_id' => $action_4_3->id
        ]);

        //for action_et_4
        Project::create([
            'index' => 'ET.4.1',
            'description' => 'Promoción de investigación con enfoque en inclusión, igualdad y desarrollo sustentable',
            'action_id' => $action_et_4->id
        ]);

        Project::create([
            'index' => 'ET.4.2',
            'description' => 'Implementación de acciones afirmativas para la equidad de género',
            'action_id' => $action_et_4->id
        ]);

        //for action_5_1
        Project::create([
            'index' => '5.1.3',
            'description' => 'Vinculación y cooperación entre institutos tecnológicos y centros en todas las áreas del quehacer institucional que contribuyan a la solución de problemas regionales y nacionales',
            'action_id' => $action_5_1->id
        ]);

        Project::create([
            'index' => '5.1.4',
            'description' => 'Fortalecimiento de la vinculación de los Institutos tecnológicos y centros con otras instituciones de educación superior nacionales e internacionales que contribuyan a la solución de problemas regionales y nacionales',
            'action_id' => $action_5_1->id
        ]);

        Project::create([
            'index' => '5.1.5',
            'description' => 'Impulso de la oferta de servicios de capacitación, consultoría, desarrollo, investigación e innovación a las micro, pequeñas, medianas y grandes empresas como medios de desarrollo, competitividad y sustentabilidad y generación de recursos',
            'action_id' => $action_5_1->id
        ]);

        Project::create([
            'index' => '5.1.6',
            'description' => 'Incremento en el número de estudiantes que participan en proyectos de vinculación con los sectores público, social y privado',
            'action_id' => $action_5_1->id
        ]);

        //for action_5_2
        Project::create([
            'index' => '5.2.1',
            'description' => 'Promoción de la protección de la propiedad intelectual',
            'action_id' => $action_5_2->id
        ]);

        //for action_5_3
        Project::create([
            'index' => '5.3.1',
            'description' => 'Fortalecimiento de la incubación de empresas en los tecnológicos y centros, orientada al desarrollo tecnológico y la innovación',
            'action_id' => $action_5_3->id
        ]);

        Project::create([
            'index' => '5.3.2',
            'description' => 'Vinculación del TecNM a través de sus egresados',
            'action_id' => $action_5_3->id
        ]);

        //for action_et_5
        Project::create([
            'index' => 'ET.5.1',
            'description' => 'Fortalecimiento del emprendimiento con enfoque en la innovación y sustentabilidad',
            'action_id' => $action_et_5->id
        ]);

        Project::create([
            'index' => 'ET.5.2',
            'description' => 'Promoción del servicio social en programas de inclusión e igualdad',
            'action_id' => $action_et_5->id
        ]);

        //for action_6_1
        Project::create([
            'index' => '6.1.2',
            'description' => 'Rediseño de la estructura organizacional y manuales de organización del TecNM y de sus institutos tecnológicos y centros',
            'action_id' => $action_6_1->id
        ]);

        //for action_6_2
        Project::create([
            'index' => '6.2.3',
            'description' => 'Consolidación de los sistemas de gestión de calidad ambiental, de energía, de igualdad de género, de salud y seguridad, y de responsabilidad social en los institutos tecnológicos y centros',
            'action_id' => $action_6_2->id
        ]);
        Project::create([
            'index' => '6.2.4',
            'description' => 'Modernización de los procesos administrativos, mediante la consolidación e integración de plataformas informáticas y sistemas de información',
            'action_id' => $action_6_2->id
        ]);

        //for action_6_3
        Project::create([
            'index' => '6.3.1',
            'description' => 'Gestión de mayor financiamiento federal para el TecNM',
            'action_id' => $action_6_3->id
        ]);

        //for action_6_4
        Project::create([
            'index' => '6.4.1',
            'description' => 'Fomento de la cultura de la ética, rectitud, honestidad, congruencia y transparencia',
            'action_id' => $action_6_4->id
        ]);

        Project::create([
            'index' => '6.4.2',
            'description' => 'Aseguramiento de la aplicación en los institutos tecnológicos y centros de los criterios de equidad, austeridad, eficiencia y racionalidad en el uso de los recursos',
            'action_id' => $action_6_4->id
        ]);

        Project::create([
            'index' => '6.4.3',
            'description' => 'Consolidación de la cultura de rendición de cuentas y de acceso a la información publica en los institutos tecnológicos y centros',
            'action_id' => $action_6_4->id
        ]);

        // for action_et_6
        Project::create([
            'index' => 'ET.6.1',
            'description' => 'Disminuir de manera sustancial la generación de desechos mediante políticas de prevención, reducción, reciclaje y reutilización',
            'action_id' => $action_et_6->id
        ]);

        Project::create([
            'index' => 'ET.6.2',
            'description' => 'Ahorro y utilización de energías alternas y renovables, así como el cuidado del medio ambiente',
            'action_id' => $action_et_6->id
        ]);
    }
}

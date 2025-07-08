<?php

namespace Database\Seeders;

use App\Http\Controllers\ActionController;
use App\Models\Action;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Action::create([
            'index' => '1.1',
            'name' => 'Mejorar la calidad, la pertinencia y la evaluación de los programas académicos de licenciatura y posgrado hacia un nivel de competencia internacional.',
            'formula' => '(Número de estudiantes de licenciatura que realizan sus estudios en programas  acreditados   o    reconocidos   por    su  calidad/   Total   de estudiantes  de   licenciatura  que realizan  sus estudios  en   programas evaluables)*100',
            'objective_id' => 1
        ]);

        Action::create([
            'index' => '1.2',
            'name' => 'Mejorar el nivel de habilitación del personal académico',
            'formula' => '(Profesores de  tiempo completo con   posgrado / Total de  profesores de tiempo completo) *100',
            'objective_id' => 1
        ]);

        Action::create([
            'index' => '1.3',
            'name' => 'Promover el uso de las tecnologías de información y comunicación en los servicios educativos',
            'formula' => '(Número de  profesores de  tiempo completo con  reconocimiento del perfil   deseable  / Total   de  profesores  de  tiempo   completo   con posgrado) * 100',
            'objective_id' => 1
        ]);

        Action::create([
            'index' => '1.4',
            'name' => 'Mejorar el posicionamiento del Tecnológico Nacional de México a nivel nacional e internacional',
            'formula' => '(Número de titulados de licenciatura en  el ciclo  escolar n/la matrícula de nuevo ingreso n-6)*100 ',
            'objective_id' => 1
        ]);

        Action::create([
            'index' => 'ET.1',
            'name' => 'Incorporar, como parte de la calidad educativa, los temas de inclusión, igualdad y desarrollo sustentable',
            'formula' => '',
            'objective_id' => 1
        ]);

        Action::create([
            'index' => '2.2',
            'name' => 'Incrementar la atención a la demanda',
            'formula' => 'Total de estudiantes inscritos en programas de licenciatura',
            'objective_id' => 2
        ]);

        Action::create([
            'index' => '2.3',
            'name' => 'Fortalecer la modalidad de educación no escolarizada-a distancia- y mixta',
            'formula' => 'Total de  estudiantes que realizan estudios en programas de  posgrado',
            'objective_id' => 2
        ]);

        Action::create([
            'index' => 'ET.2',
            'name' => 'Establecer mecanismos que fomenten la igualdad, la no discriminación y la inclusión en el TecNM',
            'formula' => 'Total de  estudiantes inscritos en  programas de  licenciatura en  la modalidad no escolarizada –a distancia- y mixta',
            'objective_id' => 2
        ]);

        Action::create([
            'index' => '3.1',
            'name' => 'Contribuir al desarrollo humano de los estudiantes en las esferas físico-corporal, social, emocional e intelectual cognitivo',
            'formula' => '(Número de estudiantes que  participan en actividades de extensión: artísticas cultuales y cívicas,  promovidas y organizadas por los institutos y centros / Matrícula total)*100',
            'objective_id' => 3
        ]);

        Action::create([
            'index' => '3.2',
            'name' => 'Fortalecer las actividades culturales, artísticas, cívicas, deportivas y de recreación',
            'formula' => '(Número de estudiantes que participan en  actividades deportivas y recreativas, promovidas y organizadas por  los institutos y centros / Matrícula total de estudiantes)*100',
            'objective_id' => 3
        ]);

        Action::create([
            'index' => '3.3',
            'name' => 'Fomentar la cultura de la prevención, la seguridad y la solidaridad',
            'formula' => '(Número de estudiantes inscritos en  algún curso o programa de enseñanza de  lenguas extranjeras / Matrícula total de estudiantes)*100',
            'objective_id' => 3
        ]);

        Action::create([
            'index' => 'ET.3',
            'name' => 'Fomentar entre los estudiantes la cultura de la igualdad, no la discriminación, la inclusión y el desarrollo sostenible y sustentable.',
            'formula' => '',
            'objective_id' => 3
        ]);

        Action::create([
            'index' => '4.1',
            'name' => 'Impulsar la formación del capital humano de alta especialización para generar investigación y desarrollo tecnológico, innovación y emprendimiento',
            'formula' => 'Total de Profesores adscritos al Sistema Nacional de Investigadores',
            'objective_id' => 4
        ]);

        Action::create([
            'index' => '4.2',
            'name' => 'Propiciar el incremento de los productos de la investigación científica, el desarrollo y la innovación',
            'formula' => 'Total    de     proyectos    de     investigación,    desarrollo    tecnológico    e innovación realizados por  los institutos, unidades y centros del TecNM',
            'objective_id' => 4
        ]);

        Action::create([
            'index' => '4.3',
            'name' => 'Fortalecer la infraestructura de la actividad científica, tecnológica y de innovación',
            'formula' => 'Total de  estudiantes que participan en  proyectos de  investigación científica, desarrollo tecnológico e innovación',
            'objective_id' => 4
        ]);

        Action::create([
            'index' => 'ET.4',
            'name' => 'Fortalecer la inclusión, igualdad y sustentabilidad en los temas de investigación, desarrollo tecnológico e innovación',
            'formula' => '',
            'objective_id' => 4
        ]);

        Action::create([
            'index' => '5.1',
            'name' => 'Optimizar los mecanismos de vinculación institucional',
            'formula' => 'Total de  registros de  propiedad intelectual obtenidos por  los institutos, unidades y centros',
            'objective_id' => 5
        ]);

        Action::create([
            'index' => '5.2',
            'name' => 'Fomentar la gestión de la propiedad intelectual',
            'formula' => '(Número de  egresados empleados o  ubicados en  el  mercado laboral en  áreas acordes con  su perfil profesional dentro de  los primeros doce meses  posteriores  a  su  egreso  / Número  de  egresados  en   esa generación) * 100',
            'objective_id' => 5
        ]);

        Action::create([
            'index' => '5.3',
            'name' => 'Desarrollo del talento emprendedor y la creación de empresas de base tecnológica',
            'formula' => 'Total de  proyectos vinculados con  los sectores público, social y privado',
            'objective_id' => 5
        ]);

        Action::create([
            'index' => 'ET.5',
            'name' => 'Fortalecer la inclusión, igualdad y sustentabilidad en los temas de vinculación y emprendimiento',
            'formula' => 'Total de  estudiantes que participan en  proyectos vinculados con los sectores público, social y privado a través de  convenios o acuerdos de  colaboración',
            'objective_id' => 5
        ]);

        Action::create([
            'index' => '6.1',
            'name' => 'Renovar el marco jurídico-normativo del TecNM',
            'formula' => 'Total de personal directivo capacitado _ Total de personal no docente',
            'objective_id' => 6
        ]);

        Action::create([
            'index' => '6.2',
            'name' => 'Fortalecer los mecanismos para la gobernanza y mejora de la gestión institucional',
            'formula' => 'Certificaciones obtenidas',
            'objective_id' => 6
        ]);

        Action::create([
            'index' => '6.3',
            'name' => 'Diseñar mecanismos que contribuyen  a un financiamiento suficiente',
            'formula' => '',
            'objective_id' => 6
        ]);

        Action::create([
            'index' => '6.4',
            'name' => 'Fortalecer los mecanismos para garantizar la transparencia, rendición de cuentas y el combate de la corrupción',
            'formula' => '',
            'objective_id' => 6
        ]);

        Action::create([
            'index' => 'ET.6',
            'name' => 'Fortalecer la inclusión, igualdad y sustentabilidad en los temas admvos y cuidado del medio ambiente',
            'formula' => '',
            'objective_id' => 6
        ]);

    }
}

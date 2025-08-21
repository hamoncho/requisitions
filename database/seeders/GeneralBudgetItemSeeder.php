<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\GeneralBudgetItem;

class GeneralBudgetItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        GeneralBudgetItem::create([
            'code' => 2100,
            'name' => 'MATERIALES DE ADMINISTRACION, EMISION DE DOCUMENTOS Y ARTICULOS OFICIALES',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2200,
            'name' => 'ALIMENTOS Y UTENSILIOS',
            'description' => ' Asignaciones destinadas a la adquisición de productos alimenticios y utensilios necesarios para el servicio de alimentación en apoyo de las actividades de los servidores públicos y los requeridos en la prestación de servicios públicos en unidades de salud, educativas y de readaptación social, entre otras. Excluye los gastos por alimentación previstos en los conceptos 3700 Servicios de Traslado y Viáticos y 3800 Servicios Oficiales.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2300,
            'name' => 'MATERIAS PRIMAS Y MATERIALES DE PRODUCCION Y COMERCIALIZACION',
            'description' => ' Asignaciones destinadas a la adquisición de toda clase de materias primas en estado natural, transformadas o semi-transformadas de naturaleza vegetal, animal y mineral que se utilizan en la operación de los entes públicos, así como las destinadas a cubrir el costo de los materiales, suministros y mercancías diversas que los entes adquieren para su comercialización.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2400,
            'name' => 'MATERIALES Y ARTICULOS DE CONSTRUCCION Y DE REPARACION',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y artículos utilizados en la construcción, reconstrucción, ampliación, adaptación, mejora, conservación, reparación y mantenimiento de bienes inmuebles.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2500,
            'name' => 'PRODUCTOS QUIMICOS, FARMACEUTICOS Y DE LABORATORIO',
            'description' => 'Asignaciones destinadas a la adquisición de sustancias, productos químicos y farmacéuticos de aplicación humana o animal; así como toda clase de materiales y suministros médicos y de laboratorio.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2600,
            'name' => 'COMBUSTIBLES, LUBRICANTES Y ADITIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de combustibles, lubricantes y aditivos de todo tipo, necesarios para el funcionamiento de vehículos de transporte terrestres, aéreos, marítimos, lacustres y fluviales; así como de maquinaria y equipo.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2700,
            'name' => 'VESTUARIO, BLANCOS, PRENDAS DE PROTECCION Y ARTICULOS DEPORTIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de vestuario y sus accesorios, blancos, artículos deportivos; así como prendas de protección personal diferentes a las de seguridad.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2800,
            'name' => 'MATERIALES Y SUMINISTROS PARA SEGURIDAD',
            'description' => ' Asignaciones destinadas a la adquisición de materiales, sustancias explosivas y prendas de protección personal necesarias en los programas de seguridad.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2900,
            'name' => 'HERRAMIENTAS, REFACCIONES Y ACCESORIOS MENORES',
            'description' => ' Asignaciones destinadas a la adquisición de toda clase de refacciones, accesorios, herramientas menores y demás bienes de consumo del mismo género, necesarios para la conservación de los bienes muebles e inmuebles.'
        ]);

        //3000
        GeneralBudgetItem::create([
            'code' => 3100,
            'name' => 'SERVICIOS BASICOS',
            'description' => 'Asignaciones destinadas a cubrir erogaciones por concepto de servicios básicos necesarios para el funcionamiento de los entes públicos. Comprende servicios tales como: postal, telegráfico, telefónico, energía eléctrica, agua, transmisión de datos, radiocomunicaciones y otros análogos.'
        ]);

        GeneralBudgetItem::create([
            'code' => 3200,
            'name' => 'SERVICIOS DE ARRENDAMIENTO',
            'description' => 'Asignaciones destinadas a cubrir erogaciones por concepto de arrendamiento de: edificios, locales, terrenos, maquinaria y equipo, vehículos, intangibles y otros análogos.'
        ]);

        GeneralBudgetItem::create([
            'code' => 3300,
            'name' => 'SERVICIOS PROFESIONALES, CIENTIFICOS, TECNICOS Y OTROS SERVICIOS',
            'description' => 'Asignaciones destinadas a cubrir erogaciones por contratación de personas físicas y morales para la prestación de servicios profesionales independientes tales como informáticos, de asesoría, consultoría, capacitación, estudios e investigaciones, protección y seguridad; excluyen los estudios de pre-inversión previstos en el Capítulo 6000 Inversión Pública, así como los honorarios asimilables a salarios considerados en el capítulo 1000 Servicios Personales.'
        ]);

        GeneralBudgetItem::create([
            'code' => 3400,
            'name' => 'SERVICIOS FINANCIEROS, BANCARIOS Y COMERCIALES',
            'description' => 'Asignaciones destinadas a cubrir el costo de servicios tales como: fletes y maniobras; almacenaje, embalaje y envase; así como servicios bancarios y financieros; seguros patrimoniales; comisiones por ventas.'
        ]);

        GeneralBudgetItem::create([
            'code' => 3500,
            'name' => 'SERVICIOS DE INSTALACION, REPARACION, MANTENIMIENTO Y CONSERVACION',
            'description' => 'Asignaciones destinadas a cubrir erogaciones no capitalizables por contratación de servicios para la instalación, mantenimiento, reparación y conservación de toda clase de bienes muebles e inmuebles. Incluye los deducibles de seguros, así como los servicios de lavandería, limpieza, jardinería, higiene y fumigación. Excluye los gastos por concepto de mantenimiento y rehabilitación de la obra pública.'
        ]);

        GeneralBudgetItem::create([
            'code' => 3600,
            'name' => 'SERVICIOS DE COMUNICACION SOCIAL Y PUBLICIDAD',
            'description' => 'Asignaciones destinadas a cubrir los gastos de realización y difusión de mensajes y campañas para informar a la población sobre los programas, servicios públicos y el quehacer gubernamental en general; así como la publicidad comercial de los productos y servicios que generan ingresos para los entes públicos. Incluye la contratación de servicios de impresión y publicación de información.'
        ]);

        GeneralBudgetItem::create([
            'code' => 3700,
            'name' => 'SERVICIOS DE TRASLADO Y VIATICOS',
            'description' => 'Asignaciones destinadas a cubrir los servicios de traslado, instalación y viáticos del personal, cuando por el desempeño de sus labores propias o comisiones de trabajo, requieran trasladarse a lugares distintos al de su adscripción.'
        ]);

        GeneralBudgetItem::create([
            'code' => 3800,
            'name' => 'SERVICIOS OFICIALES',
            'description' => 'Asignaciones destinadas a cubrir los servicios relacionados con la celebración de actos y ceremonias oficiales realizadas por los entes públicos; así como los gastos de representación y los necesarios para las oficinas establecidas en el exterior.'
        ]);

        GeneralBudgetItem::create([
            'code' => 3900,
            'name' => 'OTROS SERVICIOS GENERALES',
            'description' => 'Asignaciones destinadas a cubrir los servicios que correspondan a este capítulo, no previstos expresamente en las partidas antes descritas.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5100,
            'name' => 'MOBILIARIO Y EQUIPO DE ADMINISTRACION',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de mobiliario y equipo de administración; bienes informáticos y equipo de cómputo; a bienes artísticos, obras de arte, objetos valiosos y otros elementos coleccionables. Así como también las refacciones y accesorios mayores correspondientes a este concepto. Incluye los pagos por adjudicación, expropiación e indemnización de bienes muebles a favor del Gobierno.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5200,
            'name' => 'MOBILIARIO Y EQUIPO EDUCACIONAL Y RECREATIVO',
            'description' => 'Asignaciones destinadas a la adquisición de equipos educacionales y recreativos, tales como: equipos y aparatos audiovisuales, aparatos de gimnasia, proyectores, cámaras fotográficas, entre otros. Incluye refacciones y accesorios mayores correspondientes a este concepto.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5300,
            'name' => 'EQUIPO E INSTRUMENTAL MEDICO Y DE LABORATORIO',
            'description' => 'Asignaciones destinadas a la adquisición de equipo e instrumental médico y de laboratorio requerido para proporcionar los servicios médicos, hospitalarios y demás actividades de salud e investigación científica y técnica. Incluye refacciones y accesorios mayores correspondientes a esta partida.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5400,
            'name' => 'VEHICULOS Y EQUIPO DE TRANSPORTE',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de equipo de transporte terrestre, ferroviario, aéreo, aeroespacial, marítimo, lacustre, fluvial y auxiliar de transporte. Incluye refacciones y accesorios mayores correspondientes a este concepto.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5500,
            'name' => 'EQUIPO DE DEFENSA Y SEGURIDAD',
            'description' => 'Asignaciones destinadas a la adquisición de maquinaria y equipo necesario para el desarrollo de las funciones de seguridad pública. Incluye refacciones y accesorios mayores correspondientes a este concepto.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5600,
            'name' => 'MAQUINARIA, OTROS EQUIPOS Y HERRAMIENTAS',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de maquinaria y equipo no comprendidas en los conceptos anteriores tales como: los de uso agropecuario, industrial, construcción, aeroespacial, de comunicaciones y telecomunicaciones y demás maquinaria y equipo eléctrico y electrónico. Incluye la adquisición de herramientas y máquinas-herramientas. Adicionalmente comprende las refacciones y accesorios mayores correspondientes a este concepto.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5700,
            'name' => 'ACTIVOS BIOLOGICOS',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de especies animales y otros seres vivos, tanto para su utilización en el trabajo como para su fomento, exhibición y reproducción.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5800,
            'name' => 'BIENES INMUEBLES',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de bienes inmuebles, así como los gastos derivados de actos de su adquisición, adjudicación, expropiación e indemnización, incluye las asignaciones destinadas a los Proyectos de Prestación de Servicios relativos cuando se realicen por causas de interés público.'
        ]);

        GeneralBudgetItem::create([
            'code' => 5900,
            'name' => 'ACTIVOS INTANGIBLES',
            'description' => 'Asignaciones para la adquisición de derechos por el uso de activos de propiedad industrial, comercial, intelectual y otros, como por ejemplo: software, licencias, patentes, marcas, derechos, concesiones y franquicias.'
        ]);
    }
}

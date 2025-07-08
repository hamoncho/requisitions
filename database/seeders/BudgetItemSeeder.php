<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\BudgetItem;
use App\Models\GeneralBudgetItem;

class BudgetItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generalBudgetItem1 = GeneralBudgetItem::where('code', '2100')->first();
        $generalBudgetItem2 = GeneralBudgetItem::where('code', '2200')->first();
        $generalBudgetItem3 = GeneralBudgetItem::where('code', '2300')->first();
        $generalBudgetItem4 = GeneralBudgetItem::where('code', '2400')->first();
        $generalBudgetItem5 = GeneralBudgetItem::where('code', '2500')->first();
        $generalBudgetItem6 = GeneralBudgetItem::where('code', '2600')->first();
        $generalBudgetItem7 = GeneralBudgetItem::where('code', '2700')->first();
        $generalBudgetItem8 = GeneralBudgetItem::where('code', '2800')->first();
        $generalBudgetItem9 = GeneralBudgetItem::where('code', '2900')->first();

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' => '21101',
            'name' => 'MATERIALES Y UTILES DE OFICINA',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y artículos diversos, propios para el uso de las oficinas, tales como: papelería, formas, libretas, carpetas, y cualquier tipo de papel, vasos y servilletas desechables, limpiatipos, rollos fotográficos; útiles de escritorio como engrapadoras, perforadoras manuales, sacapuntas; artículos de dibujo, correspondencia y archivo; cestos de basura, y otros productos similares. Incluye la adquisición de artículos de envoltura, sacos y valijas, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' => '21201',
            'name' => 'MATERIALES Y UTILES DE IMPRESION Y REPRODUCCION',
            'description' => 'Asignaciones destinadas a la adquisición de materiales utilizados en la impresión, reproducción y encuadernación, tales como: fijadores, tintas, pastas, logotipos, y demás materiales y útiles para el mismo fin.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' => '21301',
            'name' => 'MATERIAL ESTADISTICO Y GEOGRAFICO',
            'description' => 'Asignaciones destinadas a la adquisición de publicaciones relacionadas con información estadística y geográfica. Se incluye la cartografía y publicaciones, tales como: las relativas a indicadores económicos y sociodemográficos; cuentas nacionales; estudios geográficos y geodésicos; mapas, planos y fotografías aéreas, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' => '21401',
            'name' => 'MATERIALES Y UTILES PARA EL PROCESAMIENTO EN EQUIPOS Y BIENES INFORMATICOS',
            'description' => 'Asignaciones destinadas a la adquisición de insumos utilizados en el procesamiento, grabación e impresión de datos, así como los materiales para la limpieza y protección de los equipos, tales como: medios ópticos y magnéticos, apuntadores, protectores de vídeo, fundas, solventes y otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' => '21501',
            'name' => 'MATERIAL DE APOYO INFORMATIVO',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de artículos y materiales utilizados en actividades de información y de investigación, que se requieran en cumplimiento de la función institucional de las unidades administrativas de las dependencias y entidades, comprende la adquisición de libros, revistas, periódicos, diarios oficiales impresos o por medios remotos, gacetas, material audiovisual, cassettes, así como discos compactos distintos al software señalado en la partida 32701 Patentes, regalías y otros, y en general todo tipo de material didáctico distinto al señalado en la partida 21701 Materiales y suministros para planteles educativos. Incluye las asignaciones destinadas al pago de suscripciones de publicaciones y revistas para el mismo fin.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' => '21502',
            'name' => 'MATERIAL PARA INFORMACION EN ACTIVIDADES DE INVESTIGACION CIENTIFICA Y TECNOLOGICA',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de artículos y materiales necesarios para las actividades de investigación y desarrollo tecnológico que realizan los centros de investigación científica y tecnológica y demás instituciones federales similares, incluidas las bibliotecas, tales como: libros, revistas, periódicos, publicaciones, diarios oficiales, gacetas, material audiovisual, cassettes, discos compactos distintos a software señalado en la partida 32701 Patentes, regalías y otros, así como las suscripciones de publicaciones y revistas especializadas y en general todo tipo de material propio para la información, que se requiera en dichas actividades. Excluye las erogaciones a que se refieren las partidas 21501 Material de apoyo informativo y 21701 Materiales y suministros para planteles educativos.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' => '21601',
            'name' => 'MATERIAL DE LIMPIEZA',
            'description' => 'Asignaciones destinadas a la adquisición de materiales, artículos y enseres para el aseo, limpieza e higiene, tales como: escobas, jergas, detergentes, jabones y otros productos similares.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' => '21701',
            'name' => 'MATERIALES Y SUMINISTROS PARA PLANTELES EDUCATIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de material didáctico, así como a realizar los diversos gastos por concepto de materiales y suministros, necesarios para la operación y desempeño de la función educativa, que requieran los planteles educativos de la Administración Pública Federal Centralizada, ubicados geográficamente en las entidades federativas.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem2->id,
            'full_code' => '22101',
            'name' => 'PRODUCTOS ALIMENTICIOS PARA EL EJERCITO, FUERZA AEREA Y ARMADA MEXICANOS, Y PARA LOS EFECTIVOS QUE PARTICIPEN EN PROGRAMAS DE SEGURIDAD PUBLICA',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de productos alimenticios y bebidas para la alimentación del personal militar derivado de la ejecución de los programas institucionales correspondientes al Ejército, Fuerza Aérea y Armada Mexicanos.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem2->id,
            'full_code' => '22102',
            'name' => 'PRODUCTOS ALIMENTICIOS PARA PERSONAS DERIVADO DE LA PRESTACION DE SERVICIOS PUBLICOS EN UNIDADES DE SALUD, EDUCATIVAS, DE READAPTACION SOCIAL Y OTRAS',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de productos alimenticios y bebidas para la alimentación de personas, derivado de la ejecución de los programas institucionales de salud, seguridad social, educativos, culturales y recreativos, así como para cautivos y reos en proceso de readaptación social. Incluye la adquisición de alimentos y complementos nutricionales para su distribución a la población, así como la alimentación para repatriados y extraditados.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem2->id,
            'full_code' => '22103',
            'name' => 'PRODUCTOS ALIMENTICIOS PARA EL PERSONAL QUE REALIZA LABORES EN CAMPO O DE SUPERVISION',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de productos alimenticios y bebidas para la alimentación de los servidores públicos de las dependencias y entidades, derivado de la ejecución de actividades de supervisión, inspección o de labores en campo, dentro del área geográfica o lugar de su adscripción. Excluye los viáticos, gastos de alimentación de los servidores públicos por requerimientos de su cargo, o derivado de la supervisión y labores en campo, previstos en el concepto 3700 Servicios de traslado y viáticos.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem2->id,
            'full_code' => '22104',
            'name' => 'PRODUCTOS ALIMENTICIOS PARA EL PERSONAL EN LAS INSTALACIONES DE LAS DEPENDENCIAS Y ENTIDADES',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de productos alimenticios y bebidas para la alimentación de los servidores públicos de las dependencias y entidades, derivado de la ejecución de programas que requieren de la permanencia de los servidores públicos dentro de las instalaciones. Excluye los gastos de alimentación de los servidores públicos por requerimientos de su cargo o derivado de la supervisión y labores en campo, previstos en el concepto 3700 Servicios de traslado y viáticos.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem2->id,
            'full_code' => '22105',
            'name' => 'PRODUCTOS ALIMENTICIOS PARA LA POBLACION EN CASO DE DESASTRES NATURALES',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de productos alimenticios y bebidas para la alimentación de la población en caso de desastres naturales.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem2->id,
            'full_code' => '22106',
            'name' => 'PRODUCTOS ALIMENTICIOS PARA EL PERSONAL DERIVADO DE ACTIVIDADES EXTRAORDINARIAS',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de productos alimenticios y bebidas para la alimentación de los servidores públicos de las dependencias, entidades y terceros, cuando dichos servidores públicos requieran del apoyo de éstos dentro de las instalaciones, así como del área geográfica o lugar de adscripción de los servidores públicos, derivado de actividades extraordinarias requeridas en el cumplimiento de la función pública. Excluye los gastos de alimentación de los servidores públicos por requerimientos de su cargo o derivado de la supervisión y labores en campo, previstos en el concepto 3700 Servicios de traslado y viáticos.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem2->id,
            'full_code' => '22201',
            'name' => 'PRODUCTOS ALIMENTICIOS PARA ANIMALES',
            'description' => 'Asignaciones destinadas a la adquisición de productos alimenticios para la manutención de animales propiedad o bajo el cuidado de las dependencias y entidades, tales como: forrajes frescos y achicalados, alimentos preparados, entre otros, así como los demás gastos necesarios para la alimentación de los mismos.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem2->id,
            'full_code' => '22301',
            'name' => 'UTENSILIOS PARA EL SERVICIO DE ALIMENTACION',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de utensilios necesarios para proporcionar este servicio, tales como: vajillas, cubiertos, baterías de cocina, licuadoras, tostadoras, cafeteras, básculas, y demás electrodomésticos y bienes consumibles en operaciones a corto plazo susceptibles de registro en el renglón de inventarios del activo circulante de las dependencias y entidades. Excluye los electrodomésticos y utensilios que forman parte del equipo de administración en áreas administrativas especializadas en el servicio de alimentación correspondiente a la partida 51901 Equipo de administración.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23101',
            'name' => 'PRODUCTOS ALIMENTICIOS, AGROPECUARIOS Y FORESTALES ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de productos alimenticios como materias primas en estado natural, transformadas o semi-transformadas, de naturaleza vegetal y animal que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23201',
            'name' => 'INSUMOS TEXTILES ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de insumos textiles como materias primas en estado natural, transformadas o semi-transformadas, que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23301',
            'name' => 'PRODUCTOS DE PAPEL, CARTON E IMPRESOS ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de papel, cartón e impresos como materias primas en estado natural, transformadas o semi-transformadas, que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23401',
            'name' => 'COMBUSTIBLES, LUBRICANTES, ADITIVOS, CARBON Y SUS DERIVADOS ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de combustibles, lubricantes y aditivos como materias primas en estado natural, transformadas o semi-transformadas, que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas del concepto 2600 Combustibles, lubricantes y aditivos de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23501',
            'name' => 'PRODUCTOS QUIMICOS, FARMACEUTICOS Y DE LABORATORIO ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de medicamentos farmacéuticos y botánicos, productos antisépticos de uso farmacéutico, sustancias para diagnóstico, complementos alimenticios, plasmas y otros derivados de la sangre y productos médicos veterinarios, entre otros, como materias primas en estado natural, transformadas o semi-transformadas, que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23601',
            'name' => 'PRODUCTOS METALICOS Y A BASE DE MINERALES NO METALICOS ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de productos metálicos y a base de minerales no metálicos como materias primas en estado natural, transformadas o semi-transformadas, que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23701',
            'name' => 'PRODUCTOS DE CUERO, PIEL, PLASTICO Y HULE ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de cuero, piel, plástico y hule como materias primas en estado natural, transformadas o semi-transformadas, que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23801',
            'name' => 'MERCANCIAS PARA SU COMERCIALIZACION EN TIENDAS DEL SECTOR PUBLICO',
            'description' => 'Asignaciones destinadas a cubrir el costo de las mercancías diversas que las entidades adquieran conforme a las disposiciones aplicables para su comercialización en los establecimientos del sector público, tales como: tiendas, farmacias, velatorios, centros recreativos, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23901',
            'name' => 'OTROS PRODUCTOS ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de otros productos no considerados en las partidas anteriores de este concepto, como materias primas en estado natural, transformadas o semi-transformadas, que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3->id,
            'full_code' => '23902',
            'name' => 'PETROLEO, GAS Y SUS DERIVADOS ADQUIRIDOS COMO MATERIA PRIMA',
            'description' => 'Asignaciones destinadas a la adquisición de petróleo, gas y sus derivados como materias primas en estado natural, transformadas o semi-transformadas, que se utilizan en los procesos productivos, diferentes a las contenidas en las demás partidas del concepto 2600 Combustibles, lubricantes y aditivos de este Clasificador.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24101',
            'name' => 'PRODUCTOS MINERALES NO METALICOS',
            'description' => 'Asignaciones destinadas a la adquisición de productos de arena, grava, mármol, piedras calizas, piedras de cantera, otras piedras dimensionadas, arcillas refractarias y no refractarias y cerámica como ladrillos, bloques, tejas, losetas, pisos, azulejos, mosaicos y otros similares para la construcción; cerámica utilizada en la agricultura; loza y porcelana para diversos usos como inodoros, lavamanos, mingitorios y otros similares.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24201',
            'name' => 'CEMENTO Y PRODUCTOS DE CONCRETO',
            'description' => 'Asignaciones destinadas a la adquisición de cemento blanco, gris y especial, pega azulejo y productos de concreto.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24301',
            'name' => 'CAL, YESO Y PRODUCTOS DE YESO',
            'description' => 'Asignaciones destinadas a la adquisición de tabla roca, plafones, paneles acústicos, columnas, molduras, estatuillas, figuras decorativas de yeso y otros productos arquitectónicos de yeso de carácter ornamental. Incluye dolomita calcinada. Cal viva, hidratada o apagada y cal para usos específicos a partir de piedra caliza triturada.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24401',
            'name' => 'MADERA Y PRODUCTOS DE MADERA',
            'description' => 'Asignaciones destinadas a la adquisición de madera y sus derivados.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24501',
            'name' => 'VIDRIO Y PRODUCTOS DE VIDRIO',
            'description' => 'Asignaciones destinadas a la adquisición de vidrio plano, templado, inastillable y otros vidrios laminados; espejos; envases y artículos de vidrio y fibra de vidrio.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24601',
            'name' => 'MATERIAL ELECTRICO Y ELECTRONICO',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de material eléctrico y electrónico, tales como: cables, interruptores, tubos fluorescentes, focos, aislantes, electrodos, transistores, alambres, lámparas, entre otros, que requieran las líneas de transmisión telegráfica, telefónica y de telecomunicaciones, sean aéreas, subterráneas o submarinas; igualmente para la adquisición de materiales necesarios en las instalaciones radiofónicas, radiotelegráficas, entre otras.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24701',
            'name' => 'ARTICULOS METALICOS PARA LA CONSTRUCCION',
            'description' => 'Asignaciones destinadas a cubrir los gastos por adquisición de productos para construcción hechos de hierro, acero, aluminio, cobre, zinc, bronce y otras aleaciones, tales como: lingotes, planchas, planchones, hojalata, perfiles, alambres, varillas, ventanas y puertas metálicas, clavos, tornillos y tuercas de todo tipo; mallas ciclónicas y cercas metálicas, etc.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24801',
            'name' => 'MATERIALES COMPLEMENTARIOS',
            'description' => 'Asignaciones destinadas a la adquisición de materiales de cualquier naturaleza para el acondicionamiento de las obras públicas y bienes inmuebles, tales como: alfombras, tapices, pisos, persianas, y demás accesorios.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem4->id,
            'full_code' => '24901',
            'name' => 'OTROS MATERIALES Y ARTICULOS DE CONSTRUCCION Y REPARACION',
            'description' => 'Asignaciones destinadas a cubrir la adquisición de otros materiales para construcción y reparación no considerados en las partidas anteriores tales como: Productos de fricción o abrasivos a partir de polvos minerales sintéticos o naturales para obtener productos como piedras amolares, esmeriles de rueda, abrasivos en polvo, lijas, entre otros; pinturas, recubrimientos, adhesivos y selladores, como barnices, lacas y esmaltes; adhesivos o pegamento, impermeabilizantes, masillas, resanadores, gomas-cemento y similares, thinner y removedores de pintura y barniz, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5->id,
            'full_code' => '25101',
            'name' => 'PRODUCTOS QUIMICOS BASICOS',
            'description' => 'Asignaciones destinadas a la adquisición de productos químicos básicos: petroquímicos como benceno, tolueno, xileno, etileno, propileno, estireno a partir del gas natural, del gas licuado del petróleo y de destilados y otras fracciones posteriores a la refinación del petróleo; reactivos, fluoruros, fosfatos, nitratos, óxidos, alquinos, marcadores genéticos, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5->id,
            'full_code' => '25201',
            'name' => 'PLAGUICIDAS, ABONOS Y FERTILIZANTES',
            'description' => 'Asignaciones destinadas a la adquisición de este tipo de productos cuyo estado de fabricación se encuentre terminado, tales como: fertilizantes complejos e inorgánicos, fungicidas, herbicidas, raticidas, entre otros. Incluye los abonos que se comercializan en estado natural.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5->id,
            'full_code' => '25301',
            'name' => 'MEDICINAS Y PRODUCTOS FARMACEUTICOS',
            'description' => 'Asignaciones destinadas a la adquisición de medicinas y productos farmacéuticos de aplicación humana o animal, tales como: vacunas, drogas, medicinas de patente, medicamentos, sueros, plasma, oxígeno, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5->id,
            'full_code' => '25401',
            'name' => 'MATERIALES, ACCESORIOS Y SUMINISTROS MEDICOS',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de materiales y suministros médicos que se requieran en hospitales, unidades sanitarias, consultorios, clínicas veterinarias, etc., tales como: jeringas, gasas, agujas, vendajes, material de sutura, espátulas, lentes, lancetas, hojas de bisturí, y prótesis en general, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5->id,
            'full_code' => '25501',
            'name' => 'MATERIALES, ACCESORIOS Y SUMINISTROS DE LABORATORIO',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de materiales y suministros, tales como: cilindros graduados, matraces, probetas, mecheros, tanques de revelado, materiales para radiografía, electrocardiografía, medicina nuclear, y demás materiales y suministros utilizados en los laboratorios médicos, químicos, de investigación, fotográficos, cinematográficos, entre otros. Esta partida incluye animales para experimentación.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5->id,
            'full_code' => '25901',
            'name' => 'OTROS PRODUCTOS QUIMICOS',
            'description' => 'Asignaciones destinadas a la adquisición de productos químicos básicos inorgánicos tales como: ácidos, bases y sales inorgánicas, cloro, negro de humo y el enriquecimiento de materiales radiactivos. Así como productos químicos básicos orgánicos, tales como: ácidos, anhídridos, alcoholes de uso industrial, cetonas, aldehídos, ácidos grasos, aguarrás, colofonia, colorantes naturales no comestibles, materiales sintéticos para perfumes y cosméticos, edulcorantes sintéticos, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem6->id,
            'full_code' => '26101',
            'name' => 'COMBUSTIBLES, LUBRICANTES Y ADITIVOS PARA VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES DESTINADOS A LA EJECUCION DE PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de combustibles en estado líquido o gaseoso, crudos o refinados, así como de lubricantes y aditivos, requeridos para el funcionamiento de vehículos y equipo de transporte, terrestres, aéreos, marítimos, lacustres y fluviales, del Ejército, Fuerza Aérea y Armada Mexicanos. Incluye la adquisición de combustibles para vehículos y equipo de transporte utilizados por las dependencias derivado de la ejecución de programas de seguridad pública y nacional.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem6->id,
            'full_code' => '26102',
            'name' => 'COMBUSTIBLES, LUBRICANTES Y ADITIVOS PARA VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES DESTINADOS A SERVICIOS PUBLICOS Y LA OPERACION DE PROGRAMAS PUBLICOS',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de combustibles en estado líquido o gaseoso, crudos o refinados, así como de lubricantes y aditivos, requeridos para el funcionamiento de vehículos y equipo de transporte, terrestres, aéreos, marítimos, lacustres y fluviales, tales como: ambulancias, grúas, bomberos, patrullas, barredoras, recolectores de basura y desechos, autobuses, trolebuses, helicópteros, aviones, avionetas, lanchas, barcos, entre otros, destinados a la prestación de servicios públicos y la operación de programas públicos, incluidas las labores en campo, de supervisión y las correspondientes a desastres naturales.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem6->id,
            'full_code' => '26103',
            'name' => 'COMBUSTIBLES, LUBRICANTES Y ADITIVOS PARA VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES DESTINADOS A SERVICIOS ADMINISTRATIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de combustibles en estado líquido o gaseoso, crudos o refinados, así como de lubricantes y aditivos, requeridos para el funcionamiento de vehículos y equipo de transporte, terrestres, aéreos, marítimos, lacustres y fluviales, destinados al desempeño de actividades de apoyo administrativo o supervisión de programas que se requieran en las dependencias y entidades, tales como: recolección y reparto de mensajería y traslado de materiales y suministros, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem6->id,
            'full_code' => '26104',
            'name' => 'COMBUSTIBLES, LUBRICANTES Y ADITIVOS PARA VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES ASIGNADOS A SERVIDORES PUBLICOS',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de combustibles en estado líquido o gaseoso, crudos o refinados, así como de lubricantes y aditivos, requeridos para el funcionamiento de vehículos y equipo de transporte, terrestres, aéreos, marítimos, lacustres y fluviales, asignados a los servidores públicos de mando por requerimientos de su cargo en el desempeño de funciones oficiales.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem6->id,
            'full_code' => '26105',
            'name' => 'COMBUSTIBLES, LUBRICANTES Y ADITIVOS PARA MAQUINARIA, EQUIPO DE PRODUCCION Y SERVICIOS ADMINISTRATIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de combustibles en estado líquido o gaseoso, crudos o refinados, así como de lubricantes y aditivos, requeridos para el funcionamiento de maquinaria y equipo para la producción de bienes y servicios, tales como: aplanadoras, excavadoras, perforadoras de suelo, tractocamiones, tractores, despulpadoras, ordeñadoras, cocinetas en las dependencias y entidades, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem6->id,
            'full_code' => '26106',
            'name' => 'PIDIREGAS CARGOS VARIABLES',
            'description' => 'Asignaciones destinadas a cubrir los gastos que realizan las entidades en proyectos de inversión financiada condicionada, por compras de energía, nitrógeno y otros productos o servicios que intervienen en el proceso productivo. Con estos cargos, el contratista o productor recupera los diversos gastos que están asociados al volumen de producción de las entidades e incluyen insumos y otros gastos de operación y mantenimiento.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem6->id,
            'full_code' => '26107',
            'name' => 'COMBUSTIBLES NACIONALES PARA PLANTAS PRODUCTIVAS',
            'description' => 'Asignaciones destinadas a la adquisición en el país, de combustibles derivados de hidrocarburos para plantas de energía eléctrica.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem6->id,
            'full_code' => '26108',
            'name' => 'COMBUSTIBLES DE IMPORTACION PARA PLANTAS PRODUCTIVAS',
            'description' => 'Asignaciones destinadas a la adquisición de combustibles de importación, derivados de hidrocarburos para plantas de energía eléctrica.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem7->id,
            'full_code' => '27101',
            'name' => 'VESTUARIO Y UNIFORMES',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de prendas de vestir: de punto, ropa de tela, cuero y piel y a la fabricación de accesorios de vestir: camisas, pantalones, trajes, calzado; uniformes y sus accesorios: insignias, distintivos, emblemas, banderas, banderines, uniformes y ropa de trabajo, calzado.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem7->id,
            'full_code' => '27201',
            'name' => 'PRENDAS DE PROTECCION PERSONAL',
            'description' => 'Asignaciones destinadas a la adquisición de prendas especiales de protección personal, tales como: guantes, botas de hule y asbesto, de tela o materiales especiales, cascos, caretas, lentes, cinturones, y demás prendas distintas de las señaladas en la partida 28301 Prendas de protección para seguridad pública y nacional.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem7->id,
            'full_code' => '27301',
            'name' => 'ARTICULOS DEPORTIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de artículos deportivos, tales como: balones, redes, trofeos, raquetas, guantes, entre otros, que las dependencias y entidades realizan en cumplimiento de su función pública.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem7->id,
            'full_code' => '27401',
            'name' => 'PRODUCTOS TEXTILES',
            'description' => 'Asignaciones destinadas a la adquisición de fibras naturales como lino, seda, algodón, ixtle y henequén; hilados e hilos de fibras naturales o sintéticas; telas, acabados y recubrimientos; alfombras, tapetes, cortinas, costales, redes y otros productos textiles que no sean prendas de vestir.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem7->id,
            'full_code' => '27501',
            'name' => 'BLANCOS Y OTROS PRODUCTOS TEXTILES, EXCEPTO PRENDAS DE VESTIR',
            'description' => 'Asignaciones destinadas a la adquisición todo tipo de blancos: batas, colchas, sábanas, fundas, almohadas, toallas, cobertores, colchones y colchonetas, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem8->id,
            'full_code' => '28101',
            'name' => 'SUSTANCIAS Y MATERIALES EXPLOSIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de sustancias explosivas tales como: pólvora, dinamita, cordita, trinitrotolueno, amatol, tetril, fulminantes, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem8->id,
            'full_code' => '28201',
            'name' => 'MATERIALES DE SEGURIDAD PUBLICA',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de suministros propios de la industria militar y de seguridad pública tales como: municiones, espoletas, cargas, granadas, cartuchos, balas, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem8->id,
            'full_code' => '28301',
            'name' => 'PRENDAS DE PROTECCION PARA SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de prendas de protección propias para el desempeño de las funciones de seguridad pública y nacional, tales como: escudos, protectores, macanas, cascos policiales y militares, chalecos blindados, máscaras, y demás prendas para el mismo fin.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29101',
            'name' => 'HERRAMIENTAS MENORES',
            'description' => 'Asignaciones destinadas a la adquisición de herramientas auxiliares de trabajo, utilizadas en carpintería, silvicultura, horticultura, ganadería, agricultura y otras industrias, tales como: desarmadores, martillos, llaves para tuercas, carretillas de mano, cuchillos, navajas, tijeras de mano, sierras de mano, alicates, hojas para seguetas, micrómetros, cintas métricas, pinzas, prensas, berbiquíes, garlopas, taladros, zapapicos, escaleras, detectores de metales manuales y demás bienes de consumo similares. Excluye las refacciones y accesorios señalados en este capítulo; así como herramientas y máquinas herramienta consideradas en el capítulo 5000 Bienes muebles, inmuebles e intangibles.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29201',
            'name' => 'REFACCIONES Y ACCESORIOS MENORES DE EDIFICIOS',
            'description' => 'Asignaciones destinadas a la adquisición de instrumental complementario y repuesto de edificios, tales como: candados, cerraduras, pasadores, chapas, llaves, manijas para puertas, herrajes, bisagras, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29301',
            'name' => 'REFACCIONES Y ACCESORIOS MENORES DE MOBILIARIO Y EQUIPO DE ADMINISTRACION, EDUCACIONAL Y RECREATIVO',
            'description' => 'Asignaciones destinadas a la adquisición de refacciones y accesorios de escritorios, sillas, sillones, archiveros, máquinas de escribir, calculadoras, fotocopiadoras, entre otros. Tales como: bases de 5 puntas, rodajas (para sillas y muebles), estructuras de sillas, pistones, brazos asientos y respaldos, tornillos, soleras, regatones, estructuras de muebles, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29401',
            'name' => 'REFACCIONES Y ACCESORIOS PARA EQUIPO DE COMPUTO',
            'description' => 'Asignaciones destinadas a la adquisición de componentes o dispositivos internos o externos que se integran al equipo de cómputo, con el objeto de conservar o recuperar su funcionalidad y que son de difícil control de inventarios, tales como: tarjetas electrónicas, "drives" internos, circuitos, bocinas, pantallas y teclados, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29501',
            'name' => 'REFACCIONES Y ACCESORIOS MENORES DE EQUIPO E INSTRUMENTAL MEDICO Y DE LABORATORIO',
            'description' => 'Asignaciones destinadas a la adquisición de refacciones y accesorios para todo tipo de aparatos e instrumentos médicos y de laboratorio.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29601',
            'name' => 'REFACCIONES Y ACCESORIOS MENORES DE EQUIPO DE TRANSPORTE',
            'description' => 'Asignaciones destinadas a la adquisición de autopartes de equipo de transporte tales como: llantas, suspensiones, sistemas de frenos, partes eléctricas, alternadores, distribuidores, partes de suspensión y dirección, marchas, embragues, retrovisores, limpiadores, volantes, tapetes, reflejantes, bocinas, auto estéreos, gatos hidráulicos o mecánicos.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29701',
            'name' => 'REFACCIONES Y ACCESORIOS MENORES DE EQUIPO DE DEFENSA Y SEGURIDAD',
            'description' => 'Asignaciones destinadas a cubrir la adquisición de refacciones para todo tipo de equipos de defensa y seguridad referidos en la partida 551 Equipo de defensa y seguridad, entre otros.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29801',
            'name' => 'REFACCIONES Y ACCESORIOS MENORES DE MAQUINARIA Y OTROS EQUIPOS',
            'description' => 'Asignaciones destinadas a la adquisición de piezas, partes, componentes, aditamentos, implementos y reemplazos de maquinaria pesada, agrícola y de construcción, entre otros. Excluye refacciones y accesorios mayores contemplados en el capítulo 5000 Bienes Muebles, Inmuebles e Intangibles.',
        ]);
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem9->id,
            'full_code' => '29901',
            'name' => 'REFACCIONES Y ACCESORIOS MENORES OTROS BIENES MUEBLES',
            'description' => 'Asignaciones destinadas a la adquisición de instrumental complementario y repuestos menores no considerados en las partidas anteriores.',
        ]);
    }
}

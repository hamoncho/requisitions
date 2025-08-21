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

        $generalBudgetItem3100 = GeneralBudgetItem::where('code', '3100')->first();
        $generalBudgetItem3200 = GeneralBudgetItem::where('code', '3200')->first();
        $generalBudgetItem3300 = GeneralBudgetItem::where('code', '3300')->first();
        $generalBudgetItem3400 = GeneralBudgetItem::where('code', '3400')->first();
        $generalBudgetItem3500 = GeneralBudgetItem::where('code', '3500')->first();
        $generalBudgetItem3600 = GeneralBudgetItem::where('code', '3600')->first();
        $generalBudgetItem3700 = GeneralBudgetItem::where('code', '3700')->first();
        $generalBudgetItem3800 = GeneralBudgetItem::where('code', '3800')->first();
        $generalBudgetItem3900 = GeneralBudgetItem::where('code', '3900')->first();

        $generalBudgetItem5100 = GeneralBudgetItem::where('code', '5100')->first();
        $generalBudgetItem5200 = GeneralBudgetItem::where('code', '5200')->first();
        $generalBudgetItem5300 = GeneralBudgetItem::where('code', '5300')->first();
        $generalBudgetItem5400 = GeneralBudgetItem::where('code', '5400')->first();
        $generalBudgetItem5500 = GeneralBudgetItem::where('code', '5500')->first();
        $generalBudgetItem5600 = GeneralBudgetItem::where('code', '5600')->first();
        $generalBudgetItem5700 = GeneralBudgetItem::where('code', '5700')->first();
        $generalBudgetItem5800 = GeneralBudgetItem::where('code', '5800')->first();
        $generalBudgetItem5900 = GeneralBudgetItem::where('code', '5900')->first();

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

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31101',
            'name' => 'SERVICIO DE ENERGIA ELECTRICA',
            'description' => 'Asignaciones destinadas a cubrir el importe del consumo de energía eléctrica, necesarios para el funcionamiento de las instalaciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31201',
            'name' => 'SERVICIO DE GAS',
            'description' => 'Asignaciones destinadas al suministro de gas al consumidor final por ductos, tanque estacionario o de cilindros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31301',
            'name' => 'SERVICIO DE AGUA',
            'description' => 'Asignaciones destinadas a cubrir el importe del consumo de agua potable y para riego, necesarios para el funcionamiento de las instalaciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31401',
            'name' => 'SERVICIO TELEFONICO CONVENCIONAL',
            'description' => 'Asignaciones destinadas al pago de servicio telefónico convencional nacional e internacional, incluido el servicio de fax, requerido en el desempeño de funciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31501',
            'name' => 'SERVICIO DE TELEFONIA CELULAR',
            'description' => 'Asignaciones destinadas al pago de servicios de telefonía celular, requerido en el desempeño de funciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31601',
            'name' => 'SERVICIO DE RADIOLOCALIZACION',
            'description' => 'Asignaciones destinadas al pago de servicios de radiolocalización, requerido en el desempeño de funciones oficiales, tales como comunicación por radio y biper, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31602',
            'name' => 'SERVICIOS DE TELECOMUNICACIONES',
            'description' => 'Asignaciones destinadas a cubrir el pago de servicios de la red de telecomunicaciones nacional e internacional, requeridos en el desempeño de funciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31701',
            'name' => 'SERVICIOS DE CONDUCCION DE SEÑALES ANALOGICAS Y DIGITALES',
            'description' => 'Asignaciones destinadas a cubrir el pago de servicios de conducción de señales de voz, datos e imagen requeridos en el desempeño de funciones oficiales, tales como: servicios satelitales, red digital integrada, internet, y demás servicios no considerados en las redes telefónica y de telecomunicaciones nacional e internacional.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31801',
            'name' => 'SERVICIO POSTAL',
            'description' => 'Asignaciones destinadas al pago del servicio postal nacional e internacional, así como los pagos por servicios de mensajería, requeridos en el desempeño de funciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31802',
            'name' => 'SERVICIO TELEGRAFICO',
            'description' => 'Asignaciones destinadas al pago del servicio telegráfico nacional e internacional requerido en el desempeño de funciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31901',
            'name' => 'SERVICIOS INTEGRALES DE TELECOMUNICACION',
            'description' => 'Asignaciones destinadas a cubrir el pago de servicios integrales en materia de telecomunicaciones requeridos en el desempeño de funciones oficiales, tales como: telefonía celular, radiocomunicación y radiolocalización, entre otros, cuando no sea posible su desagregación en las demás partidas de este concepto.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31902',
            'name' => 'CONTRATACION DE OTROS SERVICIOS',
            'description' => 'Asignaciones destinadas a cubrir el pago de servicios básicos distintos de los señalados en este concepto, tales como pensiones de estacionamiento, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3100->id,
            'full_code' => '31903',
            'name' => 'SERVICIOS GENERALES PARA PLANTELES EDUCATIVOS',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de servicios generales necesarios para la operación y desempeño de la función educativa, que requieran los planteles educativos de la Administración Pública Federal Centralizada, ubicados geográficamente en las entidades federativas.'
        ]);

        // 3200
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32101',
            'name' => 'ARRENDAMIENTO DE TERRENOS',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de terrenos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32201',
            'name' => 'ARRENDAMIENTO DE EDIFICIOS Y LOCALES',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de inmuebles.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32301',
            'name' => 'ARRENDAMIENTO DE EQUIPO Y BIENES INFORMATICOS',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de equipo de cómputo y bienes informáticos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32302',
            'name' => 'ARRENDAMIENTO DE MOBILIARIO',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de mobiliario requerido en el cumplimiento de la función pública. Se excluye el equipo y bienes informáticos señalados en la partida 32301 Arrendamiento de equipo y bienes informáticos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32501',
            'name' => 'ARRENDAMIENTO DE VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES PARA LA EJECUCION DE PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de vehículos y equipo de transporte, terrestre, aéreo, marítimo, lacustre y fluvial, para el desempeño de las funciones del Ejército, Fuerza Aérea y Armada Mexicanos. Incluye el arrendamiento de vehículos y equipo de transporte utilizados por las dependencias en la ejecución de programas de seguridad pública y nacional.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32502',
            'name' => 'ARRENDAMIENTO DE VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES PARA SERVICIOS PUBLICOS Y LA OPERACION DE PROGRAMAS PUBLICOS',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de vehículos y equipo de transporte, terrestres, aéreos, marítimos, lacustres y fluviales, tales como: ambulancias, grúas, bomberos, patrullas, barredoras, recolectores de basura y desechos, autobuses, trolebuses, helicópteros, aviones, avionetas, lanchas, barcos, entre otros, para la prestación de servicios públicos, así como para la realización de labores en campo o de supervisión. Incluye el pago de operadores o cualquier otro gasto adicional que se genere por la utilización de este servicio.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32503',
            'name' => 'ARRENDAMIENTO DE VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES PARA SERVICIOS ADMINISTRATIVOS',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de vehículos y equipo de transporte, terrestre, aéreo, marítimo, lacustre y fluvial, tales como: recolección y reparto de mensajería y traslado de materiales and suministros, entre otros, destinados al desempeño de actividades de apoyo administrativo que se requieran en las dependencias y entidades. Incluye el pago de operadores o cualquier otro gasto adicional que se genere por la utilización de este servicio.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32504',
            'name' => 'ARRENDAMIENTO DE VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES PARA DESASTRES NATURALES',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de vehículos y equipo de transporte, terrestre, aéreo, marítimo, lacustre y fluvial, para su utilización en caso de desastres naturales. Incluye el pago de operadores o cualquier otro gasto adicional que se genere por la utilización de este servicio.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32505',
            'name' => 'ARRENDAMIENTO DE VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES PARA SERVIDORES PUBLICOS',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de vehículos y equipo de transporte, terrestre, aéreo, marítimo, lacustre y fluvial, para su uso por servidores públicos de mando por requerimientos de su cargo in el desempeño de funciones oficiales. Incluye el pago de operadores o cualquier otro gasto adicional que se genere por la utilización de este servicio.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32601',
            'name' => 'ARRENDAMIENTO DE MAQUINARIA Y EQUIPO',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de maquinaria y equipo. Se excluye el equipo y bienes informáticos señalados en la partida 32301 Arrendamiento de equipo y bienes informáticos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32701',
            'name' => 'PATENTES, REGALIAS Y OTROS',
            'description' => 'Asignaciones destinadas a cubrir el importe que corresponda por el uso de patentes and marcas, representaciones comerciales e industriales, regalías por derechos de autor, membrecías, así como licencias de uso de programas de cómputo y su actualización.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32901',
            'name' => 'ARRENDAMIENTO DE SUSTANCIAS Y PRODUCTOS QUIMICOS',
            'description' => 'Asignaciones destinadas a cubrir el alquiler de toda clase de elementos, sustancias y productos químicos requeridos en el cumplimiento de la función pública.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32902',
            'name' => 'PIDIREGAS CARGOS FIJOS',
            'description' => 'Asignaciones destinadas a cubrir los gastos que realizan las entidades en proyectos de inversión financiada condicionada, mediante los cuales se paga a los contratistas la capacidad demostrada de las instalaciones construidas para proporcionar bienes y servicios, durante el plazo del contrato. Incluyen los gastos fijos de capacidad, gastos de operación y mantenimiento para conservar disponibles las instalaciones. Estos gastos no varían en función del volumen de producción de las entidades.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3200->id,
            'full_code' => '32903',
            'name' => 'OTROS ARRENDAMIENTOS',
            'description' => 'Asignaciones destinadas a cubrir servicios de arrendamiento para los cuales no existe partida específica en este concepto.'
        ]);

        // 3300
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33101',
            'name' => 'ASESORIAS ASOCIADAS A CONVENIOS, TRATADOS O ACUERDOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios profesionales y técnicos que se contraten con personas físicas y morales por concepto de asesoramiento y consulta, asistencia e intercambio en materia jurídica, económica, contable, de ingeniería, arquitectónica, entre otras, requeridas para el cumplimiento de compromisos internacionales formalizados mediante convenios, tratados o acuerdos. Excluye la contratación de los servicios señalados en la partida 33102 Asesorías por controversias en el marco de los tratados internacionales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33102',
            'name' => 'ASESORIAS POR CONTROVERSIAS EN EL MARCO DE LOS TRATADOS INTERNACIONALES',
            'description' => 'Asignaciones destinadas a cubrir el costo de servicios especializados profesionales y técnicos que se contraten con personas físicas y morales por concepto de asesoramiento y consulta, asistencia e intercambio en materia jurídica, económica, contable, de ingeniería, arquitectónica, entre otras, requeridas para resolver las controversias que se ocasionen en el marco de los tratados internacionales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33103',
            'name' => 'CONSULTORIAS PARA PROGRAMAS O PROYECTOS FINANCIADOS POR ORGANISMOS INTERNACIONALES',
            'description' => 'Asignaciones destinadas a cubrir el costo de servicios de consultoría especializada, que se contraten con personas físicas y morales por concepto de asesoramiento y consulta, asistencia e intercambio en materia jurídica, económica, contable, de ingeniería, arquitectónica, entre otras, requeridas para la ejecución de programas y proyectos de inversión financiados por organismos financieros internacionales, tales como: investigación para la toma de decisiones en la preparación y ejecución de proyectos; diseño, desarrollo, prueba o evaluación de nuevos productos, servicios o tecnologías; estudios y análisis para el desarrollo y mejoramiento de políticas; asesoría especializada; supervisión e inspección de proyectos; elaboración de normas, diseño de parámetros, establecimiento de especificaciones técnicas; examen y aprobación de programas de trabajo. Las personas físicas o morales contratadas, no intervienen en la ejecución directa del proyecto y su función se limita a la consultoría.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33104',
            'name' => 'OTRAS ASESORIAS PARA LA OPERACION DE PROGRAMAS. PAGO A DOCENTES Y PERSONAL POR ACTIVIDADES ADICIOINALES VIA NÓMINA ESPECIAL',
            'description' => 'Asignaciones destinadas a cubrir el costo de servicios profesionales, que se contraten con personas físicas y morales por concepto de asesoramiento y consulta, asistencia e intercambio, en cumplimiento de la función pública, en materia jurídica, económica, contable, de ingeniería, arquitectónica, entre otras, requeridas para la operación de programas y proyectos de las dependencias y entidades, cuando los servicios requeridos no correspondan con las demás partidas del concepto 3300 Servicios profesionales, científicos, técnicos y otros servicios.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33105',
            'name' => 'SERVICIOS RELACIONADOS CON PROCEDIMIENTOS JURISDICCIONALES',
            'description' => 'Asignaciones destinadas a cubrir el costo de servicios periciales de profesionales o técnicos en alguna materia; designación de inventores, auditores y cualquier otra figura análoga o similar requeridos u ofrecidos en los procesos o procedimientos en que sean parte las dependencias y entidades.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33301',
            'name' => 'SERVICIOS DE INFORMATICA',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios profesionales que se contraten con personas físicas y morales para el desarrollo de sistemas, sitios o páginas de Internet, procesamiento y elaboración de programas, ploteo por computadora, reproducción de información en medios magnéticos, mantenimiento de sitios y/o páginas web, así como el mantenimiento y soporte a los sistemas y programas ya existentes, distintos de los contratados mediante licencia de uso previstos en la partida 32701 Patentes, regalías y otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33302',
            'name' => 'SERVICIOS ESTADISTICOS Y GEOGRAFICOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios profesionales que se contraten con personas físicas y morales, relacionados con información estadística y geográfica. Se incluyen estudios e investigaciones estadísticas o geográficas, vuelos fotogramétricos y de teledetección, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33303',
            'name' => 'SERVICIOS RELACIONADOS CON CERTIFICACION DE PROCESOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de la contratación de servicios profesionales con personas físicas o morales, por concepto de certificaciones de sistemas y procesos, entre otros, implementados por las dependencias y entidades para mejorar el ejercicio de leurs funciones o calidad de sus servicios.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33401',
            'name' => 'SERVICIOS PARA CAPACITACION A SERVIDORES PUBLICOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios profesionales que se contraten con personas físicas y morales por concepto de preparación e impartición de cursos de capacitación y/o actualización de los servidores públicos, en territorio nacional o internacional, en cumplimiento de los programas anuales de capacitación que establezcan las dependencias y entidades. Excluye las erogaciones por capacitación comprendidas en la partida 15501 Apoyos a la capacitación de los servidores públicos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33501',
            'name' => 'ESTUDIOS E INVESTIGACIONES',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios profesionales que se contraten con personas físicas y morales por concepto de estudios e investigaciones de carácter socioeconómico, científico, jurídico, diseño de estrategias de mercadotecnia, análisis de mercado, entre otros. Excluye las erogaciones comprendidas en las partidas 12101 Honorarios, 33302 Servicios estadísticos y geográficos, así como los estudios de preinversión previstos en la partida 62905 Otros servicios relacionados con obras públicas.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33601',
            'name' => 'SERVICIOS RELACIONADOS CON TRADUCCIONES',
            'description' => 'Asignaciones destinadas a cubrir el costo de la contratación de servicios con personas físicas o morales, para realizar todo tipo de traducciones escritas o verbales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33602',
            'name' => 'OTROS SERVICIOS COMERCIALES',
            'description' => 'Asignaciones destinadas a cubrir el pago de servicios de fotocopiado ordinario y especial, engargolado, encuadernación, corte de papel, revelado fotográfico, impresión de papelería y otros servicios. Incluye los gastos de estacionamiento para los servidores públicos en su lugar de adscripción. Excluye las impresiones previstas en las partidas 33603 Impresiones de documentos oficiales para la prestación de servicios públicos, identificación, formatos administrativos y fiscales, formas valoradas, certificados y títulos y 33604 Impresión y elaboración de material informativo derivado de la operación y administración de las dependencias y entidades.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33603',
            'name' => 'IMPRESIONES DE DOCUMENTOS OFICIALES PARA LA PRESTACION DE SERVICIOS PUBLICOS, IDENTIFICACION, FORMATOS ADMINISTRATIVOS Y FISCALES, FORMAS VALORADAS, CERTIFICADOS Y TITULOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de impresión de documentos oficiales necesarios para la prestación de servicios públicos y de operaciones relacionadas con la función pública, tales como: pasaportes, certificados especiales, títulos de crédito, formas fiscales y formas valoradas, y demás documentos para la identificación, trámites oficiales y servicios a la población.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33604',
            'name' => 'IMPRESION Y ELABORACION DE MATERIAL INFORMATIVO DERIVADO DE LA OPERACION Y ADMINISTRACION DE LAS DEPENDENCIAS Y ENTIDADES',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de impresión y elaboración de material informativo, tales como: padrones de beneficiarios, reglas de operación, programas sectoriales, regionales, especiales; informes de labores, manuales de organización, de procedimientos y de servicios al público; decretos, convenios, acuerdos, instructivos, proyectos editoriales (libros, revistas y gacetas periódicas), folletos, trípticos, dípticos, carteles, mantas, rótulos, y demás servicios de impresión y elaboración de material informativo que forma parte de los instrumentos de apoyo para la realización de los programas presupuestarios de las dependencias y entidades, distintos de los servicios de comunicación social y publicidad.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33605',
            'name' => 'INFORMACION EN MEDIOS MASIVOS DERIVADA DE LA OPERACION Y ADMINISTRACION DE LAS DEPENDENCIAS Y ENTIDADES',
            'description' => 'Asignaciones destinadas a cubrir los gastos de difusión, en medios impresos y/o complementarios, de información, incluyendo aquellas que se realicen en cumplimiento de disposiciones jurídicas, como: avisos, precisiones, convocatorias, edictos, bases, licitaciones, padrones de beneficiarios, reglas de operación, diario oficial, concursos y aclaraciones, y demás información en medios masivos, distinta de las inserciones derivadas de campañas publicitarias y de comunicación social, las cuales se deberán registrar en la partida que corresponda del concepto 3600 Servicios de comunicación social y publicidad.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33701',
            'name' => 'GASTOS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a la realización de programas, investigaciones, acciones y actividades en materia de seguridad pública y nacional, en cumplimiento de funciones y actividades oficiales, cuya realización implique riesgo, urgencia o confidencialidad. Incluye los recursos para la contratación temporal de personas y la adquisición de materiales y servicios necesarios para tales efectos. En ningún caso se podrán sufragar con cargo a esta partida, erogaciones previstas en otros capítulos, conceptos y partidas de este Clasificador cuando corresponda a programas, investigaciones, acciones y actividades diferentes de los especiales sujetos a esta partida.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33702',
            'name' => 'GASTOS EN ACTIVIDADES DE SEGURIDAD Y LOGISTICA DEL ESTADO MAYOR PRESIDENCIAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos que realiza el Estado Mayor Presidencial en las actividades de seguridad y logística inherente al desarrollo de las giras y otros eventos oficiales en que participa el C. Presidente de los Estados Unidos Mexicanos. Incluye los gastos por concepto de adquisición de materiales, suministros y la contratación de los servicios requeridos para la realización de los eventos presidenciales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33801',
            'name' => 'SERVICIOS DE VIGILANCIA',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de vigilancia requeridos por las dependencias y entidades.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33901',
            'name' => 'SUBCONTRATACION DE SERVICIOS CON TERCEROS',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios provenientes de la subcontratación que las dependencias y entidades lleven a cabo con personas físicas o morales especializadas, que resulten más convenientes o generen ahorros en la prestación de bienes o servicios públicos, tales como: servicio de mantenimiento, maquila de productos, medicamentos, servicio médico, hospitalario, de laboratorio, entre otros. Lo anterior, cuando no sea posible atenderlos de manera directa por la propia dependencia o entidad.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33902',
            'name' => 'PROYECTOS PARA PRESTACION DE SERVICIOS',
            'description' => 'Asignaciones destinadas a cubrir las erogaciones que realicen las dependencias y entidades a los proveedores como contraprestación por los servicios recibidos en los términos y condiciones señalados en los contratos de servicio de largo plazo, mediante los cuales se formalicen los denominados Proyectos para Prestación de Servicios.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3300->id,
            'full_code' => '33903',
            'name' => 'SERVICIOS INTEGRALES. PAGOS COMPROBADOS CON RECIBO DE HONORARIOS, QUE HAYAN SIDO REALIZADOS A PERSONAL O EXTERNOS',
            'description' => 'Asignaciones destinadas a cubrir las erogaciones que realicen las dependencias y entidades por la contratación con personas físicas o morales de servicios diversos cuya desagregación no es realizable en forma específica para cada una de las partidas de gasto del capítulo 3000 Servicios Generales, por tratarse de una combinación de servicios relacionados cuya prestación se estipula en forma integral y que en términos del costo total resulta en condiciones menos onerosas para el Estado. Excluye los servicios considerados en los conceptos de gasto 3300 Servicios profesionales, científicos, técnicos y otros servicios, 3600 Servicios de comunicación social y publicidad y 3800 Servicios oficiales.'
        ]);

        //3400
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3400->id,
            'full_code' => '34101',
            'name' => 'SERVICIOS BANCARIOS Y FINANCIEROS',
            'description' => 'Asignaciones destinadas a cubrir el pago de servicios bancarios y financieros, tales como: el pago de comisiones, intereses por adeudos de la Federación, descuentos e intereses devengados con motivo de la colocación de empréstitos, certificados u otras obligaciones a cargo de la Tesorería de la Federación, de acuerdo con tratados, contratos, convenios o leyes, siempre y cuando no sean a plazo mayor de un año y no sea necesaria la aprobación o ratificación del Congreso de la Unión. Incluye los gastos por la realización de avalúo de bienes muebles e inmuebles o por justipreciación.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3400->id,
            'full_code' => '34301',
            'name' => 'GASTOS INHERENTES A LA RECAUDACION',
            'description' => 'Asignaciones destinadas a cubrir el pago de servicios financieros por situación y traslado de fondos del Erario Federal y otros gastos inherentes a la recaudación fiscal, incluida la guarda y custodia de fondos y valores del Gobierno Federal.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3400->id,
            'full_code' => '34401',
            'name' => 'SEGURO DE RESPONSABILIDAD PATRIMONIAL DEL ESTADO',
            'description' => 'Asignaciones destinadas a cubrir las primas con cargo al presupuesto autorizado de las dependencias y entidades, por concepto de la contratación del seguro de responsabilidad patrimonial del Estado, que permita con la suma asegurada cubrir el monto equivalente a las indemnizaciones y que corresponderán a la reparación integral del daño y, en su caso, por el daño personal y moral, que se ocasionen como consecuencia de la actividad administrativa irregular del Estado. Excluye el monto de las erogaciones que resulten por insuficiencia de la suma asegurada contra el costo de la indemnización y, en su caso, los deducibles correspondientes. Estas erogaciones deberán cubrirse con cargo a la partida 39602 Otros gastos por responsabilidades, de este Clasificador.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3400->id,
            'full_code' => '34501',
            'name' => 'SEGUROS DE BIENES PATRIMONIALES',
            'description' => 'Asignaciones destinadas a cubrir las primas por concepto de seguros contra robos, incendios, y demás riesgos o contingencias a que pueden estar sujetos los materiales, bienes muebles e inmuebles y todo tipo de valores registrados en los activos. Excluye el pago de deducibles previstos en el concepto 3500 Servicios de instalación, reparación, mantenimiento y conservación, así como los seguros de vida del personal civil y militar o de gastos médicos, previstos en el capítulo 1000 Servicios Personales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3400->id,
            'full_code' => '34601',
            'name' => 'ALMACENAJE, EMBALAJE Y ENVASE',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de almacenamiento, embalaje, desembalaje, envase y desenvase de toda clase de objetos, artículos, materiales, mobiliario, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3400->id,
            'full_code' => '34701',
            'name' => 'FLETES Y MANIOBRAS',
            'description' => 'Asignaciones destinadas a cubrir el costo de traslado, maniobras, embarque y desembarque de toda clase de objetos, artículos, materiales, mobiliario, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3400->id,
            'full_code' => '34801',
            'name' => 'COMISIONES POR VENTAS',
            'description' => 'Asignaciones destinadas a cubrir el pago de comisiones a personas físicas, ya sean: profesionistas, técnicos, expertos o peritos, así como a las personas morales, con las cuales se tenga celebrado contrato respectivo, por los servicios de venta prestados a las dependencias y entidades.'
        ]);

        //3500
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35101',
            'name' => 'MANTENIMIENTO Y CONSERVACION DE INMUEBLES PARA LA PRESTACION DE SERVICIOS ADMINISTRATIVOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de mantenimiento y conservación de inmuebles dedicados a la prestación de servicios administrativos; incluye edificios, locales, terrenos, predios, áreas verdes y caminos de acceso, propiedad de la Nación o al servicio de las dependencias y entidades, cuando se efectúen por cuenta de terceros, incluido el pago de deducibles de seguros. Excluye los trabajos de conservación y mantenimiento considerados en las partidas 62202 Mantenimiento y rehabilitación de edificaciones no habitacionales y 62102 Mantenimiento y rehabilitación de edificaciones habitacionales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35102',
            'name' => 'MANTENIMIENTO Y CONSERVACION DE INMUEBLES PARA LA PRESTACION DE SERVICIOS PUBLICOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de mantenimiento y conservación de inmuebles dedicados a la prestación de servicios públicos; incluye edificios, locales, terrenos, predios, áreas verdes y caminos de acceso, propiedad de la Nación o al servicio de las dependencias y entidades, cuando se efectúen por cuenta de terceros, incluido el pago de deducibles de seguros. Excluye los trabajos de conservación y mantenimiento considerados en las partidas 62202 Mantenimiento y rehabilitación de edificaciones no habitacionales y 62102 Mantenimiento y rehabilitación de edificaciones habitacionales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35201',
            'name' => 'MANTENIMIMENTO Y CONSERVACION DE MOBILIARIO Y EQUIPO DE ADMINISTRACION',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de mantenimiento y conservación de toda clase de mobiliario y equipo de administración, tales como: escritorios, sillas, sillones, archiveros, máquinas de escribir, calculadoras, fotocopiadoras, entre otros. Incluye el pago de deducibles de seguros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35301',
            'name' => 'MANTENIMIENTO Y CONSERVACION DE BIENES INFORMATICOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios que se contraten con terceros para el mantenimiento y conservación de bienes informáticos, tales como: computadoras, impresoras, dispositivos de seguridad, reguladores, fuentes de potencia ininterrumpida, entre otros, incluido el pago de deducibles de seguros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35401',
            'name' => 'INSTALACION, REPARACION Y MANTENIMIENTO DE EQUIPO E INSTRUMENTAL MEDICO Y DE LABORATORIO',
            'description' => 'Asignaciones destinadas a cubrir los gastos por servicios de instalación, reparación y mantenimiento de equipo e instrumental médico y de laboratorio.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35501',
            'name' => 'MANTENIMIENTO Y CONSERVACION DE VEHICULOS TERRESTRES, AEREOS, MARITIMOS, LACUSTRES Y FLUVIALES',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de mantenimiento y conservación de vehículos y equipo de transporte, terrestres, aéreos, marítimos, lacustres y fluviales, propiedad o al servicio de las dependencias y entidades.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35601',
            'name' => 'REPARACION Y MANTENIMIENTO DE EQUIPO DE DEFENSA Y SEGURIDAD',
            'description' => 'Asignaciones destinadas a cubrir los gastos por servicios de reparación y mantenimiento del equipo de defensa y seguridad.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35701',
            'name' => 'MANTENIMIENTO Y CONSERVACION DE MAQUINARIA Y EQUIPO',
            'description' => 'Asignaciones destinadas a cubrir el costo de los servicios de mantenimiento y conservación de la maquinaria y equipo propiedad o al servicio de las dependencias y entidades, tales como: tractores, palas mecánicas, dragas, fertilizadoras, vehículos, embarcaciones, aeronaves, equipo especializado instalado en los inmuebles, entre otros, cuando se efectúen por cuenta de terceros, incluido el pago de deducibles de seguros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35702',
            'name' => 'MANTENIMIENTO Y CONSERVACION DE PLANTAS E INSTALACIONES PRODUCTIVAS',
            'description' => 'Asignaciones destinadas a cubrir el gasto de los servicios de mantenimiento y conservación de plantas e instalaciones para la producción. Excluye los trabajos de conservación y mantenimiento capitalizable considerados en la partida 62302 Mantenimiento y rehabilitación de obras para el abastecimiento de agua, petróleo, gas, electricidad y telecomunicaciones.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35801',
            'name' => 'SERVICIOS DE LAVANDERIA, LIMPIEZA E HIGIENE',
            'description' => 'Asignaciones destinadas a cubrir los gastos por servicios de lavandería, limpieza, desinfección e higiene en los bienes muebles e inmuebles propiedad o al cuidado de las dependencias and entidades. Incluye el costo de los servicios de recolección, traslado y tratamiento final de desechos tóxicos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3500->id,
            'full_code' => '35901',
            'name' => 'SERVICIOS DE JARDINERIA Y FUMIGACION',
            'description' => 'Asignaciones destinadas a cubrir los gastos por control y exterminación de plagas, instalación y mantenimiento de áreas verdes como la plantación, fertilización y poda de árboles, plantas y hierbas.'
        ]);

        //3600
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3600->id,
            'full_code' => '36101',
            'name' => 'DIFUSION DE MENSAJES SOBRE PROGRAMAS Y ACTIVIDADES GUBERNAMENTALES',
            'description' => 'Asignaciones destinadas a cubrir el costo de difusión del quehacer gubernamental y de los bienes y servicios públicos que prestan las dependencias o entidades. Incluye el diseño y conceptualización de campañas de comunicación, preproducción, producción, postproducción y copiado; la publicación y difusión masiva de las mismas a un público objetivo determinado a través de televisión abierta y restringida, radio, cine, prensa, encartes, espectaculares, mobiliario urbano, tarjetas telefónicas, Internet, medios electrónicos e impresos internacionales, folletos, trípticos, dípticos, carteles, mantas, rótulos, producto integrado y otros medios complementarios; estudios para medir la pertinencia y efectividad de las campañas, así como los gastos derivados de la contratación de personas físicas y/o morales que presten servicios afines para la elaboración, difusión y evaluación de dichas campañas.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3600->id,
            'full_code' => '36201',
            'name' => 'DIFUSION DE MENSAJES COMERCIALES PARA PROMOVER LA VENTA DE PRODUCTOS O SERVICIOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de la publicidad derivada de la comercialización de los productos o servicios de las entidades que generan un ingreso para el Estado. Incluye el diseño y conceptualización de campañas publicitarias; preproducción, producción, postproducción y copiado; publicación y difusión masiva de las mismas a un público objetivo determinado a través de televisión abierta y restringida, radio, cine, prensa, encartes, espectaculares, mobiliario urbano, tarjetas telefónicas, Internet, medios electrónicos e impresos internacionales, folletos, trípticos, dípticos, carteles, mantas, rótulos, producto integrado, puntos de venta, artículos promocionales, servicios integrales de promoción and otros medios complementarios, estudios para medir la pertinencia y efectividad de campañas; así como los gastos derivados de la contratación de personas físicas and/o morales que presenten servicios afines para la elaboración, difusión y evaluación de dichas campañas publicitarias. Excluye los gastos de difusión de mensajes que no comercializan productos o servicios, los cuales deben registrarse en la partida 36101 Difusión de mensajes sobre programas y actividades gubernamentales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3600->id,
            'full_code' => '36901',
            'name' => 'SERVICIOS RELACIONADOS CON MONITOREO DE INFORMACION EN MEDIOS MASIVOS',
            'description' => 'Asignaciones destinadas a cubrir el costo de la contratación de servicios profesionales con personas físicas o morales, por concepto de monitoreo de información en medios masivos de comunicación, de las actividades de las dependencias y entidades, que no se encuentren comprendidas en las demás partidas de este Capítulo.'
        ]);

        //3700
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37101',
            'name' => 'PASAJES AEREOS NACIONALES PARA LABORES EN CAMPO Y DE SUPERVISION',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte aéreo en comisiones oficiales temporales dentro del país de servidores públicos de las dependencias y entidades, derivado de la realización de labores en campo o de supervisión e inspección en lugares distintos a los de su adscripción, en cumplimiento de la función pública. Incluye el pago de guías para facilitar las funciones o actividades de los servidores públicos. Incluye los gastos para pasajes del personal operativo que realiza funciones de reparto y entrega de mensajería, y excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37102',
            'name' => 'PASAJES AEREOS NACIONALES ASOCIADOS A LOS PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte aéreo en comisiones oficiales temporales dentro del país de servidores públicos de las dependencias y entidades, derivado de la ejecución de programas de seguridad pública y nacional en lugares distintos a los de su adscripción, en cumplimiento de la función pública. Incluye el pago de guías para facilitar las funciones o actividades. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37103',
            'name' => 'PASAJES AEREOS NACIONALES ASOCIADOS A DESASTRES NATURALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte dentro del país de servidores públicos de las dependencias and entidades, en el desempeño de comisiones temporales dentro del país, en caso de desastres naturales. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37104',
            'name' => 'PASAJES AEREOS NACIONALES PARA SERVIDORES PUBLICOS DE MANDO EN EL DESEMPEÑO DE COMISIONES Y FUNCIONES OFICIALES',
            'description' => 'Asignaciones destinadas to cubrir los gastos de transporte aéreo en comisiones oficiales temporales dentro del país en lugares distintos a los de su adscripción de servidores públicos de mando de las dependencias y entidades, en cumplimiento de la función pública, cuando las comisiones no correspondan con las previstas en las partidas 37101 Pasajes aéreos nacionales para labores en campo y de supervisión, 37102 Pasajes aéreos nacionales asociados a los programas de seguridad pública y nacional y 37103 Pasajes aéreos nacionales asociados a desastres naturales, de este Clasificador. Incluye el pago de guías para facilitar las funciones o actividades y el pago de pasajes para familiares en los casos previstos por las disposiciones generales aplicables. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37105',
            'name' => 'PASAJES AEREOS INTERNACIONALES ASOCIADOS A LOS PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte aéreo en comisiones oficiales temporales fuera del país en lugares distintos a los de su adscripción de servidores públicos de las dependencias y entidades, derivado de la ejecución de programas de seguridad pública y nacional, en cumplimiento de la función pública. Incluye el pago de guías para facilitar las funciones o actividades. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37106',
            'name' => 'PASAJES AEREOS INTERNACIONALES PARA SERVIDORES PUBLICOS EN EL DESEMPEÑO DE COMISIONES Y FUNCIONES OFICIALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte aéreo en comisiones oficiales temporales fuera del país en lugares distintos a los de su adscripción de servidores públicos de las dependencias y entidades, cuando el desempeño de sus labores o comisiones lo requiera, en cumplimiento de la función pública, cuando las comisiones no correspondan con las previstas en la partida 37105 Pasajes aéreos internacionales asociados a los programas de seguridad pública y nacional, de este Clasificador. Incluye el pago de guías para facilitar las funciones o actividades y el pago de pasajes para familiares en los casos previstos por las disposiciones generales aplicables. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37201',
            'name' => 'PASAJES TERRESTRES NACIONALES PARA LABORES EN CAMPO Y DE SUPERVISION',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte terrestre en comisiones oficiales temporales dentro del país de servidores públicos de las dependencias y entidades, derivado de la realización de labores en campo or de supervisión e inspección en lugares distintos a los de su adscripción, en cumplimiento de la función pública. Incluye el pago de guías para facilitar las funciones o actividades de los servidores públicos. Incluye los gastos para pasajes del personal operativo que realiza funciones de reparto y entrega de mensajería, y excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37202',
            'name' => 'PASAJES TERRESTRES NACIONALES ASOCIADOS A LOS PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte terrestre en comisiones oficiales temporales dentro del país de servidores públicos de las dependencias y entidades, derivado de la ejecución de programas de seguridad pública y nacional en lugares distintos a los de su adscripción, en cumplimiento de la función pública. Incluye el pago de guías para facilitar las funciones or actividades. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37203',
            'name' => 'PASAJES TERRESTRES NACIONALES ASOCIADOS A DESASTRES NATURALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte terrestre dentro del país de servidores públicos de las dependencias y entidades, en el desempeño de comisiones temporales dentro del país, en caso de desastres naturales. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37204',
            'name' => 'PASAJES TERRESTRES NACIONALES PARA SERVIDORES PUBLICOS DE MANDO EN EL DESEMPEÑO DE COMISIONES Y FUNCIONES OFICIALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte terrestre en comisiones oficiales temporales dentro del país en lugares distintos a los de su adscripción de servidores públicos de mando de las dependencias y entidades, en cumplimiento de la función pública, cuando las comisiones no correspondan con las previstas en las partidas 37201 Pasajes terrestres nacionales para labores en campo y de supervisión, 37202 Pasajes terrestres nacionales asociados a los programas de seguridad pública y nacional y 37203 Pasajes terrestres nacionales asociados a desastres naturales, de este Clasificador. Incluye el pago de guías para facilitar las funciones o actividades y el pago de pasajes para familiares en los casos previstos por las disposiciones generales aplicables. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37205',
            'name' => 'PASAJES TERRESTRES INTERNACIONALES ASOCIADOS A LOS PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte terrestre en comisiones oficiales temporales fuera del país en lugares distintos a los de su adscripción de servidores públicos de las dependencias y entidades, derivado de la ejecución de programas de seguridad pública y nacional, en cumplimiento de la función pública. Incluye el pago de guías para facilitar las funciones o actividades. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37206',
            'name' => 'PASAJES TERRESTRES INTERNACIONALES PARA SERVIDORES PUBLICOS EN EL DESEMPEÑO OFICIALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos de transporte terrestre en comisiones oficiales temporales fuera del país en lugares distintos a los de su adscripción de servidores públicos de las dependencias y entidades, cuando el desempeño de sus labores o comisiones lo requiera, en cumplimiento de la función pública, cuando las comisiones no correspondan con las previstas en la partida 37205 Pasajes terrestres internacionales asociados a los programas de seguridad pública y nacional, de este Clasificador. Incluye el pago de guías para facilitar las funciones o actividades y el pago de pasajes para familiares en los casos previstos por las disposiciones generales aplicables. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37501',
            'name' => 'VIATICOS NACIONALES PARA LABORES EN CAMPO Y DE SUPERVISION',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de alimentación y hospedaje de servidores públicos de las dependencias y entidades, en el desempeño de comisiones temporales dentro del país, derivado de la realización de labores en campo o de supervisión e inspección, en lugares distintos a los de su adscripción. Esta partida incluye los gastos de camino aplicándose las cuotas diferenciales que señalen los tabuladores respectivos. Excluye los gastos de pasajes a que se refieren las partidas 37101 Pasajes aéreos nacionales para labores en campo y de supervisión y 37201 Pasajes terrestres nacionales para labores en campo y de supervisión.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37502',
            'name' => 'VIATICOS NACIONALES ASOCIADOS A LOS PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de alimentación y hospedaje de servidores públicos de las dependencias y entidades, in el desempeño de comisiones temporales dentro del país, derivado de la ejecución de programas de seguridad pública y nacional, en lugares distintos a los de su adscripción. Esta partida incluye los gastos de camino aplicándose las cuotas diferenciales que señalen los tabuladores respectivos. Excluye los gastos de pasajes a que se refieren las partidas 37102 Pasajes aéreos nacionales asociados a los programas de seguridad pública y nacional y 37202 Pasajes terrestres nacionales asociados a los programas de seguridad pública y nacional.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37503',
            'name' => 'VIATICOS NACIONALES ASOCIADOS A DESASTRES NATURALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de alimentación y hospedaje de servidores públicos de las dependencias y entidades, en el desempeño de comisiones temporales dentro del país, en caso de desastres naturales, en lugares distintos a los de su adscripción. Esta partida incluye los gastos de camino aplicándose las cuotas diferenciales que señalen los tabuladores respectivos. Excluye los gastos de pasajes a que se refieren las partidas 37103 Pasajes aéreos nacionales asociados a desastres naturales y 37203 Pasajes terrestres nacionales asociados a desastres naturales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37504',
            'name' => 'VIATICOS NACIONALES PARA SERVIDORES PUBLICOS EN EL DESEMPEÑO DE FUNCIONES OFICIALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de alimentación y hospedaje de servidores públicos de las dependencias y entidades, en el desempeño de comisiones temporales dentro del país, en lugares distintos a los de su adscripción, cuando las comisiones no correspondan con las previstas en las partidas 37501 Viáticos nacionales para labores en campo y de supervisión, 37502 Viáticos nacionales asociados a los programas de seguridad pública y nacional y 37503 Viáticos nacionales asociados desastres naturales, de este Clasificador. Esta partida incluye los gastos de camino aplicándose las cuotas diferenciales que señalen los tabuladores respectivos. Excluye los gastos de pasajes a que se refieren las partidas 37104 Pasajes aéreos nacionales para servidores públicos de mando en el desempeño de comisiones y funciones oficiales y 37204 Pasajes terrestres nacionales para servidores públicos de mando en el desempeño de comisiones y funciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37601',
            'name' => 'VIATICOS EN EL EXTRANJERO ASOCIADOS A LOS PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de alimentación y hospedaje de servidores públicos de las dependencias y entidades, en el desempeño de comisiones temporales fuera del país, en lugares distintos a los de su adscripción, derivado de la ejecución de programas de seguridad pública y nacional. Esta partida incluye los gastos de camino aplicándose las cuotas diferenciales que señalen los tabuladores respectivos. Excluye los gastos de pasajes a que se refieren las partidas 37105 Pasajes aéreos internacionales asociados a los programas de seguridad pública y nacional y 37205 Pasajes terrestres internacionales asociados a los programas de seguridad pública y nacional.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37602',
            'name' => 'VIATICOS EN EL EXTRANJERO PARA SERVIDORES PUBLICOS EN EL DESEMPEÑO DE COMISIONES Y FUNCIONES OFICIALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de alimentación y hospedaje de servidores públicos de las dependencias y entidades, en el desempeño de sus labores y comisiones temporales fuera del país, en lugares distintos a los de su adscripción, cuando las comisiones no correspondan con las previstas en la partida 37601 Viáticos en el extranjero asociados a los programas de seguridad pública y nacional, de este Clasificador. Incluye el pago de guías para facilitar las funciones o actividades. Esta partida incluye los gastos de camino aplicándose las cuotas diferenciales que señalen los tabuladores respectivos. Excluye los gastos de pasajes a que se refieren las partidas 37106 Pasajes aéreos internacionales para servidores públicos en el desempeño de comisiones y funciones oficiales y 37206 Pasajes terrestres internacionales para servidores públicos en el desempeño de comisiones y funciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37701',
            'name' => 'INSTALACION DEL PERSONAL FEDERAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos que ocasione la instalación del personal civil o militar, diplomático y consular al servicio de las dependencias y entidades, cuando en el desempeño de funciones oficiales dentro o fuera del país, se requiera su permanencia fuera de su residencia en forma transitoria o permanente, incluyendo, en su caso, el traslado de menaje de casa. Excluye los pagos de viáticos y pasajes.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37801',
            'name' => 'SERVICIOS INTEGRALES NACIONALES PARA SERVIDORES PUBLICOS EN EL DESEMPEÑO DE COMISIONES Y FUNCIONES OFICIALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de transporte, alimentación y hospedaje de servidores públicos de las dependencias y entidades, en el desempeño de comisiones temporales dentro del país, en lugares distintos a los de su adscripción, cuando las comisiones correspondan a servicios integrales y no proceda su registro en las partidas 37101 a 37104, 37201 a 37204 y 37501 a 37504 de este Clasificador. Esta partida incluye paquetes de viaje y los gastos de camino aplicándose las cuotas diferenciales que señalen los tabuladores respectivos. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37802',
            'name' => 'SERVICIOS INTEGRALES EN EL EXTRANJERO PARA SERVIDORES PUBLICOS EN EL DESEMPEÑO DE COMISIONES Y FUNCIONES OFICIALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos por concepto de transporte, alimentación y hospedaje de servidores públicos de las dependencias y entidades, en el desempeño de sus labores y comisiones temporales fuera del país, en lugares distintos a los de su adscripción, cuando las comisiones correspondan a servicios integrales and no proceda su registro en las partidas 37105, 37106, 37205, 37206, 37601 y 37602 de este Clasificador. Esta partida incluye paquetes de viaje y los gastos de camino aplicándose las cuotas diferenciales que señalen los tabuladores respectivos. Excluye los arrendamientos de vehículos terrestres, aéreos, marítimos, lacustres y fluviales, comprendidos en el concepto 3200 Servicios de arrendamiento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3700->id,
            'full_code' => '37901',
            'name' => 'GASTOS PARA OPERATIVOS Y TRABAJOS DE CAMPO EN AREAS RURALES',
            'description' => 'Asignaciones destinadas a cubrir los gastos que realizan las dependencias y entidades, por la estadía de servidores públicos que se origina con motivo del levantamiento de censos, encuestas y en general trabajos en campo para el desempeño de funciones oficiales, cuando se desarrollen in localidades que no cuenten con establecimientos que brinden servicios de hospedaje y alimentación, y no sea posible cumplir con los requisitos para el otorgamiento de viáticos y pasajes previstos en las partidas del concepto 3700 Servicios de traslado y viáticos, de este Clasificador.'
        ]);

        //3800
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3800->id,
            'full_code' => '38101',
            'name' => 'GASTOS DE CEREMONIAL DEL TITULAR DEL EJECUTIVO FEDERAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos que se originen con motivo de recepciones del Presidente de la República a los miembros del Cuerpo Diplomático acreditado ante el Gobierno y a personalidades nacionales o extranjeras residentes o de visita en el territorio nacional, así como para cubrir dichos gastos en eventos que se realicen en el extranjero. Esta partida incluye bienes y servicios tales como: hospedaje, alimentos, transportes, organización and ejecución de recepciones, adornos, escenografía, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3800->id,
            'full_code' => '38102',
            'name' => 'GASTOS DE CEREMONIAL DE LOS TITULARES DE LAS DEPENDENCIAS Y ENTIDADES',
            'description' => 'Asignaciones destinadas a cubrir los gastos que se originen con motivo de recepciones de los titulares de las dependencias y entidades a los miembros del Cuerpo Diplomático acreditado ante el Gobierno y a personalidades nacionales o extranjeras residentes o de visita en el territorio nacional, así como para cubrir dichos gastos en eventos que se realicen en el extranjero.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3800->id,
            'full_code' => '38103',
            'name' => 'GASTOS INHERENTES A LA INVESTIDURA PRESIDENCIAL',
            'description' => 'Asignaciones destinadas a cubrir las erogaciones que se originen con motivo de las funciones oficiales en eventos nacionales y en el exterior. Incluye los gastos del Titular del Ejecutivo Federal y su cónyuge por concepto de gastos de traslado, alimentos y hospedaje, así como de invitados especiales que por la naturaleza de sus actividades particulares sean requeridos para asistir a los eventos oficiales en los que participen el C. Presidente de la República y/o su cónyuge.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3800->id,
            'full_code' => '38201',
            'name' => 'GASTOS DE ORDEN SOCIAL',
            'description' => 'Asignaciones destinadas a cubrir los gastos que se originen con motivo de la celebración de actos conmemorativos y de orden social, tales como la realización de ceremonias patrióticas y oficiales, desfiles, la adquisición de ofrendas florales y luctuosas, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3800->id,
            'full_code' => '38301',
            'name' => 'CONGRESOS Y CONVENCIONES',
            'description' => 'Asignaciones destinadas a cubrir el costo del servicio integral que se contrate con personas físicas o morales para la celebración de congresos, convenciones, seminarios, simposios y cualquier otro tipo de foro análogo o de características similares, that se organicen en cumplimiento de lo previsto en los programas de las dependencias y entidades, o con motivo de las atribuciones que les corresponden, siempre y cuando no puedan desagregarse en otras partidas de los capítulos 2000 Materiales y Suministros y 3000 Servicios Generales. Esta partida incluye los gastos estrictamente indispensables que se ocasionen con motivo de la participación en dichos eventos de servidores públicos federales o locales, ponentes y conferencistas, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3800->id,
            'full_code' => '38401',
            'name' => 'EXPOSICIONES',
            'description' => 'Asignaciones destinadas a cubrir el costo del servicio integral that se contrate con personas físicas y morales para la instalación y sostenimiento de exposiciones y cualquier otro tipo de muestra análoga o de características similares, que se organicen en cumplimiento de lo previsto en los programas de las dependencias y entidades, o con motivo de las atribuciones que les corresponden, siempre y cuando no puedan desagregarse en otras partidas de los capítulos 2000 Materiales y Suministros y 3000 Servicios Generales. Incluye el pago de indemnizaciones por los daños que sufran los bienes expuestos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3800->id,
            'full_code' => '38501',
            'name' => 'GASTOS PARA ALIMENTACION DE SERVIDORES PUBLICOS DE MANDO',
            'description' => 'Asignaciones destinadas a cubrir los gastos de alimentación de los servidores públicos de mando, en términos de las disposiciones aplicables, que se realizan fuera de las instalaciones de las dependencias y entidades, con el propósito coadyuvar al mejor desempeño de sus funciones y cumplimiento de sus responsabilidades.'
        ]);

        //3900
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39101',
            'name' => 'FUNERALES Y PAGAS DE DEFUNCION',
            'description' => 'Asignaciones destinadas a cubrir pagas de defunción a los familiares de servidores públicos, civiles y militares al servicio de las dependencias y entidades, así como de pensionistas directos, cuyo pago es con cargo al Erario Federal, a excepción de los miembros del servicio exterior que perezcan fuera del país. Asimismo, con cargo a esta partida se cubrirán apoyos a los militares en activo o retirados para gastos de sepelio en caso de fallecimiento de sus dependientes económicos. Incluye los gastos por concepto de honores póstumos a quienes por sus méritos o servicios se considere conveniente tributar; gastos de inhumación de los alumnos internos en las escuelas de la federación y, en los casos de que los cuerpos no sean reclamados, de los militares que fallezcan en prisión cumpliendo sentencia condenatoria.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39207',
            'name' => 'OTROS IMPUESTOS Y DERECHOS',
            'description' => 'Asignaciones destinadas a cubrir otra clase de impuestos y derechos tales como: gastos de escrituración, legalización de exhortos notariales, de registro público de la propiedad, tenencias y canje de placas de vehículos oficiales, diligencias judiciales; derechos y gastos de navegación, de aterrizaje y despegue de aeronaves, de verificación, certificación, y demás impuestos y derechos conforme a las disposiciones aplicables. Excluye el Impuesto Sobre la Renta que las dependencias retienen y registran contra las partidas correspondientes del capítulo 1000 Servicios Personales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39301',
            'name' => 'IMPUESTOS Y DERECHOS DE IMPORTACION',
            'description' => 'Asignaciones destinadas a cubrir los impuestos y/o derechos que cause la adquisición de toda clase de bienes o servicios en el extranjero.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39401',
            'name' => 'EROGACIONES POR RESOLUCIONES POR AUTORIDAD COMPETENTE',
            'description' => 'Erogaciones para cubrir el pago de obligaciones o indemnizaciones derivadas de resoluciones emitidas por autoridad competente.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39402',
            'name' => 'INDEMNIZACIONES POR EXPROPIACION DE PREDIOS',
            'description' => 'Asignaciones destinadas a cubrir las indemnizaciones por concepto de la expropiación de predios, terrenos o bienes inmuebles, que realiza el Gobierno con fines de interés público. Esta partida sólo se afectará por resolución jurisdiccional o de autoridad competente. Las erogaciones que se realicen bajo este rubro de gasto no deben implicar modificaciones a los activos fijos de las dependencias y entidades que realice la erogación.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39501',
            'name' => 'PENAS, MULTAS, ACCESORIOS Y ACTUALIZACIONES',
            'description' => 'Erogaciones derivadas del pago extemporáneo de pasivos fiscales, adeudos u obligaciones de pago, como multas, actualizaciones, intereses y demás accesorios por dichos pagos. Incluye los gastos financieros por pago extemporáneo de estimaciones y de ajuste de costos de obra pública, así como los gastos no recuperables derivados de la terminación anticipada de contratos de adquisiciones u obras públicas.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39601',
            'name' => 'PERDIDAS DEL ERARIO FEDERAL',
            'description' => 'Erogaciones de las dependencias y entidades que deriven del robo o extravío de recursos públicos que no sean recuperables e impliquen afectar su techo presupuestario disponible. Excluye las recuperaciones de recursos que se realicen por los diversos medios establecidos por las disposiciones aplicables, como es el Fondo de Garantía para Reintegros al Erario Federal en el caso de las dependencias.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39602',
            'name' => 'OTROS GASTOS POR RESPONSABILIDADES',
            'description' => 'Erogaciones de las dependencias y entidades que se deriven de la responsabilidad civil del Estado. Incluye los montos diferenciales de las indemnizaciones que no cubran las sumas aseguradas y los importes deducibles del seguro de responsabilidad patrimonial del Estado, así como aquellas erogaciones distintas de las consideradas en las demás partidas de este concepto, que impliquen afectar el techo presupuestario disponible de la dependencia o entidad.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39701',
            'name' => 'EROGACIONES POR PAGO DE UTILIDADES',
            'description' => 'Asignaciones destinadas por las empresas de participación estatal al pago de utilidades, en los términos de la Ley Federal de las Entidades Paraestatales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39801',
            'name' => 'IMPUESTO SOBRE NOMINAS',
            'description' => 'Asignaciones destinadas al pago del Impuesto Sobre Nóminas a cargo de las dependencias y entidades, de conformidad con el Código Financiero del Distrito Federal y, en su caso, las disposiciones equivalentes en las demás entidades federativas.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39901',
            'name' => 'GASTOS DE LAS COMISIONES INTERNACIONALES DE LIMITES Y AGUAS',
            'description' => 'Asignaciones destinadas a cubrir las erogaciones que requieran las oficinas de las Comisiones Internacionales de Límites y Aguas, para el desarrollo de funciones oficiales, tales como: arrendamientos, reparaciones de muebles, servicio postal y telefónico, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39902',
            'name' => 'GASTOS DE LAS OFICINAS DEL SERVICIO EXTERIOR MEXICANO',
            'description' => 'Asignaciones destinadas a cubrir los gastos que requieran las oficinas del Servicio Exterior Mexicano para el desarrollo de sus funciones. Comprende gastos tales como: arrendamientos, reparaciones de muebles, servicios postal y telefónico, entre otros, así como los honorarios consulares que señale la Secretaría de Relaciones Exteriores, de acuerdo con las disposiciones aplicables.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39903',
            'name' => 'ASIGNACIONES A LOS GRUPOS PARLAMENTARIOS',
            'description' => 'Asignaciones previstas en el Presupuesto de Egresos del Congreso de la Unión, destinadas a los Grupos Parlamentarios integrados por los legisladores, para apoyar el desarrollo de sus funciones legislativas, así como a las actividades complementarias y de gestoría que, en su carácter de representantes populares y de las entidades de la Federación, realizarán de manera permanente durante su periodo, como integrantes del H. Congreso de la Unión.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39904',
            'name' => 'PARTICIPACIONES EN ORGANOS DE GOBIERNO',
            'description' => 'Asignaciones destinadas a cubrir pagos a quienes, conforme a las disposiciones aplicables, les corresponda por su participación en Organos de Gobierno.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39905',
            'name' => 'ACTIVIDADES DE COORDINACION CON EL PRESIDENTE ELECTO',
            'description' => 'Asignaciones destinadas to cubrir las erogaciones con motivo de las actividades de coordinación del Ejecutivo Federal con el Presidente Electo, durante la segunda mitad del año in que termine el periodo presidencial, para el desarrollo de los trabajos cuya aplicación tendrá repercusiones para la nueva administración, como la participación en la elaboración de la iniciativa de la Ley de Ingresos y el proyecto de Presupuesto de Egresos de la Federación, así como otras actividades durante la etapa de transición.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39906',
            'name' => 'SERVICIOS CORPORATIVOS PRESTADOS POR LAS ENTIDADES PARAESTATALES A SUS ORGANISMOS',
            'description' => 'Asignaciones destinadas a cubrir las erogaciones que realicen los Organismos Públicos Descentralizados por los servicios prestados por sus Corporativos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39907',
            'name' => 'SERVICIOS PRESTADOS ENTRE ORGANISMOS DE UNA ENTIDAD PARAESTATAL',
            'description' => 'Asignaciones destinadas a cubrir las erogaciones por la prestación de servicios entre Organismos de una Entidad Paraestatal.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39908',
            'name' => 'EROGACIONES POR CUENTA DE TERCEROS',
            'description' => 'Asignaciones que los organismos descentralizados, empresas de participación estatal y demás entidades, destinan para realizar todas aquellas erogaciones por cuenta de terceros, cuyo registro se debe reflejar en sus flujos de efectivo.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39909',
            'name' => 'EROGACIONES RECUPERABLES',
            'description' => 'Asignaciones destinadas por los organismos descentralizados, empresas de participación estatal y demás entidades, a otorgar toda clase de préstamos o créditos in efectivo al personal, sindicatos o a otras entidades públicas o privadas, y demás erogaciones recuperables distintas de las erogaciones previstas en los conceptos 7300 Compra de títulos y valores; y 7400 Concesión de préstamos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem3900->id,
            'full_code' => '39910',
            'name' => 'APERTURA DE FONDO ROTATORIO',
            'description' => 'Asignaciones destinadas a las dependencias para cubrir gastos urgentes de operación derivados del ejercicio de sus funciones, programas y presupuestos autorizados, conforme a la autorización de la Secretaría.'
        ]);

        //5100
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5100->id,
            'full_code' => '51101',
            'name' => 'MOBILIARIO',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de bienes muebles que requieran las dependencias y entidades para el desempeño de sus funciones, comprende bienes tales como: escritorios, sillas, sillones, anaqueles, archiveros, libreros, mesas, pupitres, caballetes, restiradores, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5100->id,
            'full_code' => '51301',
            'name' => 'BIENES ARTISTICOS Y CULTURALES',
            'description' => 'Asignaciones destinadas a la adquisición de objetos artísticos y culturales, tales como: pinturas, esculturas, cuadros, colecciones diversas, ediciones históricas, equipos musicales para bandas y orquestas, y en general, todos los bienes que constituyan acervo patrimonial artístico y cultural para el país.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5100->id,
            'full_code' => '51501',
            'name' => 'BIENES INFORMATICOS',
            'description' => 'Asignaciones destinadas a la adquisición de equipos y aparatos de uso informático, para el procesamiento electrónico de datos y para el uso de redes, tales como: servidores, computadoras, lectoras, terminales, monitores, procesadores, tableros de control, equipos de conectividad, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5100->id,
            'full_code' => '51901',
            'name' => 'EQUIPO DE ADMINISTRACION',
            'description' => 'Asignaciones destinadas a la adquisición de equipos propios para el desarrollo de las actividades administrativas, productivas y demás instalaciones de las dependencias y entidades, tales como: máquinas de escribir, sumar, calcular y registrar; equipo de aire acondicionado, calentadores, fotocopiadoras, aspiradoras, enceradoras, grabadoras, radios, televisores, microfilmadoras, circuito cerrado de T.V., equipos de detección de fuego, alarma y voceo, estufas, refrigeradores, lavadoras, hornos de microondas y demás bienes considerados en los activos fijos de las dependencias y entidades. Incluye los utensilios para el servicio de alimentación destinados al equipamiento de unidades administrativas de las dependencias y entidades especializadas en el servicio de alimentación, cuya adquisición incremente los activos fijos de las mismas.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5100->id,
            'full_code' => '51902',
            'name' => 'ADJUDICACIONES, EXPROPIACIONES E INDEMNIZACIONES DE BIENES MUEBLES',
            'description' => 'Asignaciones destinadas a cubrir los gastos originados por la adjudicación, expropiación e indemnización de este tipo de bienes, cuando las necesidades propias de las dependencias y entidades, o del país lo ameriten, en los términos de las disposiciones generales aplicables.'
        ]);

        //5200
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5200->id,
            'full_code' => '52101',
            'name' => 'EQUIPOS Y APARATOS AUDIOVISUALES',
            'description' => 'Asignaciones destinadas a la adquisición de equipos, tales como: proyectores, micrófonos, grabadores, televisores, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5200->id,
            'full_code' => '52201',
            'name' => 'APARATOS DEPORTIVOS',
            'description' => 'Asignaciones destinadas a la adquisión de aparatos, tales como: aparatos y equipos de gimnasia y prácticas deportivas, entro otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5200->id,
            'full_code' => '52301',
            'name' => 'CAMARAS FOTOGRAFICAS Y DE VIDEO',
            'description' => 'Asignaciones destinadas a la adquisición de cámaras fotográficas, equipos y accesorios fotográficos y aparatos de proyección y de video, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5200->id,
            'full_code' => '52901',
            'name' => 'OTRO MOBILIARIO Y EQUIPO EDUCACIONAL Y RECREATIVO',
            'description' => 'Asignaciones destinadas a la adquisición de mobiliario y equipo educacional y recreativo, tales como: muebles especializados para uso escolar, aparatos para parques infantiles, mesas especiales de juegos, instrumentos musicales y otros equipos destinados a la educación y recreación.'
        ]);

        // EQUIPO MEDICO Y DE LABORATORIO (5300)
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5300->id,
            'full_code' => '53101',
            'name' => 'EQUIPO MEDICO Y DE LABORATORIO',
            'description' => 'Asignaciones destinadas a la adquisición de equipos utilizados en hospitales, unidades sanitarias, consultorios, servicios veterinarios y en los laboratorios auxiliares de las ciencias médicas y de investigación científica, tales como: rayos X, ultrasonido, equipos de diálisis e inhaloterapia, máquinas esterilizadoras, sillas dentales, mesas operatorias, incubadoras, microscopios y toda clase de aparatos necesarios para equipar salas de rehabilitación, de emergencia, de hospitalización y de operación médica.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5300->id,
            'full_code' => '53201',
            'name' => 'INSTRUMENTAL MEDICO Y DE LABORATORIO',
            'description' => 'Asignaciones destinadas a la adquisición de instrumentos utilizados en la ciencia médica, tales como: estetoscopios, máscaras para oxígeno, bisturís, tijeras, pinzas, separadores, y en general todo tipo de instrumentos médicos necesarios para operaciones quirúrgicas, dentales, y oftalmológicas, entre otros. Incluye el instrumental utilizado en los laboratorios de investigación científica e instrumental de medición.'
        ]);

        // VEHICULOS Y EQUIPO DE TRANSPORTE (5400)
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54101',
            'name' => 'VEHICULOS Y EQUIPO TERRESTRES PARA LA EJECUCION DE PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo de transporte, terrestres, motorizados y no motorizados, para el transporte de personas y carga, tales como: automóviles, autobuses, camiones, camionetas, tractocamiones, motocicletas, bicicletas, entre otros, para el desempeño de las funciones del Ejército, Fuerza Aérea y Armada Mexicanos. Incluye la adquisición de vehículos y equipo de transporte utilizados por las dependencias en la ejecución de programas de seguridad pública y nacional.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54102',
            'name' => 'VEHICULOS Y EQUIPO TERRESTRES DESTINADOS EXCLUSIVAMENTE PARA DESASTRES NATURALES',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo de transporte, terrestres, motorizados y no motorizados, para el transporte de personas y carga, tales como: automóviles, autobuses, camiones, camionetas, tractocamiones, motocicletas, bicicletas, entre otros, requeridos en el apoyo a la población, en caso de desastres naturales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54103',
            'name' => 'VEHICULOS Y EQUIPO TERRESTRES DESTINADOS A SERVICIOS PUBLICOS Y LA OPERACION DE PROGRAMAS PUBLICOS',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo de transporte, terrestres, motorizados y no motorizados, para el transporte de personas y carga, tales como: automóviles, autobuses, camiones, camionetas, tractocamiones, trolebuses, ambulancias, carros para bomberos, motocicletas, bicicletas, entre otros, destinados a la prestación de servicios públicos y la operación de programas públicos, incluidas las labores en campo y de supervisión.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54104',
            'name' => 'VEHICULOS Y EQUIPO TERRESTRES DESTINADOS A SERVICIOS ADMINISTRATIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo de transporte, terrestres, motorizados y no motorizados, para el transporte de personas y carga, que se requieran para el desempeño de funciones administrativas, tales como: automóviles, autobuses, camiones, camionetas, tractocamiones, trolebuses, ambulancias, carros para bomberos, motocicletas, bicicletas, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54105',
            'name' => 'VEHICULOS Y EQUIPO TERRESTRES DESTINADOS A SERVIDORES PUBLICOS',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos terrestres, que se otorgan a los servidores públicos de mando de las dependencias y entidades, por requerimientos de su cargo, para el desempeño de las funciones oficiales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54201',
            'name' => 'CARROCERIAS Y REMOLQUES',
            'description' => 'Asignaciones destinadas a la adquisición de carrocerías ensambladas sobre chasises producidos en otro establecimiento, remolques y semi-remolques para usos diversos, campers, casetas y toldos para camionetas, carros dormitorios, remolques para automóviles and camionetas; adaptación de vehículos para usos especiales, mecanismos de levantamiento de camiones de volteo, compuertas de camiones de carga y la quinta rueda.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54301',
            'name' => 'VEHICULOS Y EQUIPO AEREOS PARA LA EJECUCION DE PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo aéreo, para el transporte de personas y carga, para el desempeño de las funciones del Ejército, Fuerza Aérea y Armada Mexicanos. Incluye la adquisición de vehículos y equipo de transporte utilizados por las dependencias en la ejecución de programas de seguridad pública y nacional.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54302',
            'name' => 'VEHICULOS Y EQUIPO AEREOS DESTINADOS EXCLUSIVAMENTE PARA DESASTRES NATURALES',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo aéreo, para el transporte de personas y carga, requeridos en el apoyo a la población, en caso de desastres naturales.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54303',
            'name' => 'VEHICULOS Y EQUIPO AEREOS DESTINADOS A SERVICIOS PUBLICOS Y LA OPERACION DE PROGRAMAS PUBLICOS',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo aéreo para el transporte de personas y carga, destinados to la prestación de servicios públicos y la operación de programas públicos, incluidas las labores en campo y de supervisión.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54401',
            'name' => 'EQUIPO FERROVIARIO',
            'description' => 'Asignaciones destinadas a la adquisición de equipo para el transporte ferroviario, tales como: locomotoras, vagones de pasajeros y de carga, transporte urbano en vías (metro y tren ligero), vehículos ferroviarios para mantenimiento. Excluye equipo de señalización férrea.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54501',
            'name' => 'VEHICULOS Y EQUIPO MARITIMO PARA LA EJECUCION DE PROGRAMAS DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo marítimo, para el transporte de personas y carga, para el desempeño de las funciones del Ejército, Fuerza Aérea y Armada Mexicanos. Incluye la adquisición de vehículos y equipo de utilizados por las dependencias en la ejecución de programas de seguridad pública y nacional.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54502',
            'name' => 'VEHICULOS Y EQUIPO MARITIMO DESTINADOS A SERVICIOS PUBLICOS Y LA OPERACION DE PROGRAMAS PUBLICOS',
            'description' => 'Asignaciones destinadas a la adquisición de vehículos y equipo marítimo, para el transporte de personas y carga, destinados a la prestación de servicios públicos y la operación de programas públicos, incluidas las labores en campo y de supervisión.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54503',
            'name' => 'CONSTRUCCION DE EMBARCACIONES',
            'description' => 'Asignaciones destinadas a la adquisición de todo tipo de bienes requeridos para la construcción of embarcaciones.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5400->id,
            'full_code' => '54901',
            'name' => 'OTROS EQUIPOS DE TRANSPORTE',
            'description' => 'Asignaciones destinadas a la adquisición de otros equipos de transporte no clasificados en las partidas anteriores.'
        ]);

        // EQUIPO DE DEFENSA Y SEGURIDAD (5500)
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5500->id,
            'full_code' => '55101',
            'name' => 'MAQUINARIA Y EQUIPO DE DEFENSA Y SEGURIDAD PUBLICA',
            'description' => 'Asignaciones destinadas a la adquisición de toda clase de maquinaria y equipo propios para las funciones de defensa and seguridad pública. Comprende bienes tales como: tanques, lanzacohetes, cañones, fusiles, pistolas, metralletas, morteros, lanza llamas, espadas, bayonetas, cargadores, cureñas, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5500->id,
            'full_code' => '55102',
            'name' => 'EQUIPO DE SEGURIDAD PUBLICA Y NACIONAL',
            'description' => 'Asignaciones destinadas a la adquisición de equipo y demás bienes muebles instrumentales de inversión, requeridos durante la ejecución de programas, investigaciones, acciones y actividades en materia de seguridad pública y nacional, cuya realización implique riesgo, urgencia o confidencialidad extrema, en cumplimiento de funciones y actividades oficiales. En ningún caso se podrán sufragar con cargo a esta partida las adquisiciones de bienes de inversión previstas en otros capítulos, conceptos y partidas de este Clasificador; incluidos los bienes muebles y equipo destinados a las actividades de seguridad pública y nacional, distintos de los bienes requeridos para atender las actividades especiales señaladas en esta partida.'
        ]);

        // MAQUINARIA, OTROS EQUIPOS Y HERRAMIENTAS (5600)
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5600->id,
            'full_code' => '56101',
            'name' => 'MAQUINARIA Y EQUIPO AGROPECUARIO',
            'description' => 'Asignaciones destinadas a la adquisición de maquinaria y equipo utilizados en actividades agropecuarias, tales como: tractores agrícolas, cosechadoras, segadoras, incubadoras, trilladoras, fertilizadoras, desgranadoras, equipo de riego, fumigadoras, roturadoras, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5600->id,
            'full_code' => '56201',
            'name' => 'MAQUINARIA Y EQUIPO INDUSTRIAL',
            'description' => 'Asignaciones destinadas a la adquisición de maquinaria y equipo industrial, tales como: molinos industriales, calderas, hornos eléctricos, motores, bombas industriales, despulpadoras, pasteurizadoras, envasadoras, entre otros. Incluye la adquisición de toda clase de maquinaria y equipo de perforación y exploración de suelos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5600->id,
            'full_code' => '56301',
            'name' => 'MAQUINARIA Y EQUIPO DE CONSTRUCCION',
            'description' => 'Asignaciones destinadas a la adquisición de maquinaria y equipo utilizados en la construcción, tales como: quebradoras, revolvedoras, palas mecánicas, tractores oruga, motoconformadoras, aplanadoras, excavadoras, grúas, dragas, entre otros.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5600->id,
            'full_code' => '56501',
            'name' => 'EQUIPOS Y APARATOS DE COMUNICACIONES Y TELECOMUNICACIONES',
            'description' => 'Asignaciones destinadas a la adquisición de equipos y aparatos de comunicaciones y telecomunicaciones, tales como: comunicación satelital, microondas, transmisores, receptores; equipos de telex, radar, sonar, radionavegación y video; amplificadores, equipos telefónicos y de fax, telegráficos, y demás equipos y aparatos para el mismo fin.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5600->id,
            'full_code' => '56601',
            'name' => 'MAQUINARIA Y EQUIPO ELECTRICO Y ELECTRONICO',
            'description' => 'Asignaciones destinadas a la adquisición de maquinaria y equipo eléctrico y electrónico, tales como: generadoras de energía, plantas, motogeneradoras de energía eléctrica, transformadores, reguladores, equipo electrónico, equipo electrónico nuclear, tableros de transferencias, entre otros. Excluye los bienes señalados en las partidas 56501 Equipos y aparatos de comunicaciones y telecomunicaciones y 51501 Bienes informáticos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5600->id,
            'full_code' => '56701',
            'name' => 'HERRAMIENTAS Y MAQUINAS HERRAMIENTA',
            'description' => 'Asignaciones destinadas a la adquisición de herramientas eléctricas, neumáticas y máquinas herramienta, tales como: rectificadoras, cepilladoras, mortajadoras, pulidoras, lijadoras, sierras, taladros y martillos eléctricos, ensambladoras, fresadoras, encuadernadoras and demás herramientas consideradas en los activos fijos de las dependencias y entidades.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5600->id,
            'full_code' => '56901',
            'name' => 'BIENES MUEBLES POR ARRENDAMIENTO FINANCIERO',
            'description' => 'Asignaciones destinadas a cubrir el costo de los bienes muebles o maquinaria y equipos especializados adquiridos por las dependencias y entidades con arrendamiento financiero o bajo la modalidad de arrendamiento financiero especial, (BLT o BOT), entre otras figuras análogas.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5600->id,
            'full_code' => '56902',
            'name' => 'OTROS BIENES MUEBLES',
            'description' => 'Asignaciones destinadas a cubrir el costo de los bienes muebles o maquinaria y equipos especializados adquiridos por las dependencias y entidades no incluidos o especificados en los conceptos y partidas del presente capítulo, tales como equipo contra incendio y maquinaria para protección al ambiente, entre otros.'
        ]);

        // ACTIVOS BIOLOGICOS (5700)
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5700->id,
            'full_code' => '57101',
            'name' => 'ANIMALES DE REPRODUCCION',
            'description' => 'Asignaciones destinadas a la adquisición de bovinos como animales con fines de reproducción y fomento.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5700->id,
            'full_code' => '57601',
            'name' => 'ANIMALES DE TRABAJO',
            'description' => 'Asignaciones destinadas a la adquisición de equinos como animales para el trabajo.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5700->id,
            'full_code' => '57701',
            'name' => 'ANIMALES DE CUSTODIA Y VIGILANCIA',
            'description' => 'Asignaciones destinadas a la adquisición especies menores como animales para custodia y vigilancia.'
        ]);

        // BIENES INMUEBLES (5800)
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5800->id,
            'full_code' => '58101',
            'name' => 'TERRENOS',
            'description' => 'Asignaciones destinadas a la adquisición de terrenos y predios necesarios para los usos propios de las dependencias y entidades.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5800->id,
            'full_code' => '58301',
            'name' => 'EDIFICIOS Y LOCALES',
            'description' => 'Asignaciones destinadas a la adquisición de edificios, casas y locales que requieran las dependencias y entidades para desarrollar sus actividades.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5800->id,
            'full_code' => '58901',
            'name' => 'ADJUDICACIONES, EXPROPIACIONES E INDEMNIZACIONES DE INMUEBLES',
            'description' => 'Asignaciones destinadas al pago de adjudicaciones, expropiaciones e indemnizaciones de todo tipo de bienes inmuebles, cuando por razones de interés público se requiera su afectación, en los términos de las disposiciones generales aplicables. Comprende bienes tales como: edificios, casas, locales y terrenos.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5800->id,
            'full_code' => '58902',
            'name' => 'BIENES INMUEBLES EN LA MODALIDAD DE PROYECTOS DE INFRAESTRUCTURA PRODUCTIVA DE LARGO PLAZO',
            'description' => 'Asignaciones destinadas a cubrir el costo de los bienes inmuebles adquiridos por las entidades bajo la modalidad de proyectos de infraestructura productiva de largo plazo.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5800->id,
            'full_code' => '58903',
            'name' => 'BIENES INMUEBLES POR ARRENDAMIENTO FINANCIERO',
            'description' => 'Asignaciones destinadas a cubrir el costo de los bienes inmuebles adquiridos por las dependencias y entidades, con arrendamiento financiero o bajo la modalidad de arrendamiento financiero especial, (BLT o BOT), entre otras figuras análogas.'
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5800->id,
            'full_code' => '58904',
            'name' => 'OTROS BIENES INMUEBLES',
            'description' => 'Asignaciones destinadas a cubrir el costo de los bienes inmuebles adquiridos por las dependencias y entidades no incluidos o especificados en los conceptos y partidas del presente capítulo.'
        ]);

        // ACTIVOS INTANGIBLES (5900)
        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem5900->id,
            'full_code' => '59101',
            'name' => 'SOFTWARE',
            'description' => 'Asignaciones destinadas en la adquisión de paquetes y programas de informática, para ser aplicados en los sistemas administrativos y operativos computarizados de los entes públicos, su descripción y los materiales de apoyo de los sistemas y las aplicaciones informáticas que se espera utilizar.'
        ]);
    }
}

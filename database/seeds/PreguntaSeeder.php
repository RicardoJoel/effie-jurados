<?php

use Illuminate\Database\Seeder;
use App\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [[
            'unidad_id' => 1, 
            'enunciado' => 'El Effie reconoce a las campañas publicitarias que destacan por:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'El Effie centra su preocupación en:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿Bajo qué asociación se creó Red de Effie?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿Con qué fin se creó la Red Effie?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿Cuáles son los tres pilares que Effie fomenta?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'La red de Effie promueve:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿Cuál es la entidad que organiza los Effie Awards Perú?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿Qué es Effie Awards Perú?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿Desde cuándo se organiza los Effie Awards Perú?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿A cuál de los principios básicos está relacionado el siguiente enunciado: “Existimos para educar, nos apasiona y estamos comprometidos con el aprendizaje continuo”?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿Cuál NO es un principio básico de los Effie?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'Effie es el foro de la efectividad del marketing porque:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'En Effie Perú, ¿cuántas campañas se analizan aproximadamente?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'Los postulantes son:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'Los jurados son:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'Los jurados deben tener al menos:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => '¿Quiénes participan en los premios Effie?',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'Los casos permiten obtener información confiable sobre:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'NO constituyen funciones del Effie Awards Perú:',
        ],[
            'unidad_id' => 1, 
            'enunciado' => 'Pueden ser parte del jurado del Effie',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'De las siguientes subcategorías, ¿cuál pertenece a la categoría Servicios?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => '¿Qué rubro NO pertenece a la categoría Productos?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'De las siguientes subcategorías, ¿cuál pertenece a la categoría Desafíos de Marketing?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'El rubro “David y Goliat”, ¿a qué categoría pertenece?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'El rubro “Extensión de línea”, ¿a qué categoría pertenece?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Dentro de la categoría Desafíos de Negocio, ¿qué rubro se relaciona a las campañas de comunicación que promueven la imagen y la identidad de la empresa?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Dentro de la categoría Desafíos de Negocio, ¿qué premio distingue a las campañas que usaron un presupuesto publicitario menor a S/ 400,000 sin incluir costos de producción ni fees de los medios? ',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Los Panamericanos o Copa América son acontecimientos relacionados al rubro: ',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Dentro de la categoría de Desafíos de Marketing, ¿A qué rubro pertenecen las campañas de nuevos productos o servicios introducidos bajo una marca existente? ',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Dentro de la categoría Productos, ¿qué rubro está relacionado a las comunicaciones de marketing de productos que son vendidos sin receta médica y tratan asuntos de salud?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => '¿Cuáles son las nuevas categorías del 2020?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Las marcas que resulten ganadoras de esta categoría NO pueden volver a presentarse al año siguiente:',
        ],[
            'unidad_id' => 2, 
            'enunciado' => '¿Qué categoría no participa por el Gran Effie?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Dentro de la categoría Desafíos de Marketing, ¿Qué rubro celebra los esfuerzos de las marcas con fines de lucro que combinaron efectivamente los objetivos comerciales con una causa social?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => '¿Qué premio se gana con un puntaje entre 70 y 80?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => '¿Qué premio se gana con un puntaje mayor a 80?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => '¿Qué premio se gana con un puntaje entre 60 y 70?',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Dentro de la estructura de un caso, los antecedentes, contexto, objetivos y target pertenecen a la parte de:',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'Este premio lo recibe tanto el anunciante como la agencia responsable de la campaña ganadora:',
        ],[
            'unidad_id' => 2, 
            'enunciado' => 'En la estructura de un caso, ¿en qué parte la marca presenta el proceso de pensamiento estratégico que se utilizó para la campaña? ',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Quiénes pueden ser jurados?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Cuál es la responsabilidad del jurado?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Cuál NO es una función del jurado?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Qué puede hacer el jurado si un caso es presentado en una categoría errónea?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Por qué razón se rechazaría o eliminaría la participación de un caso?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Cuántos casos en promedio un jurado evalúa en la etapa de selección?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Cuál es la siguiente acción que debe realizar el jurado después de estar certificado?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => 'Como parte del perfil del jurado, una de sus responsabilidades es:',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿A qué casos se les da feedback?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => 'En caso de ser seleccionado como miembro del Jurado Final y/o Jurado Gran Effie, deberá:',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Por qué es importante que el jurado tenga en cuenta las fechas claves?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => 'El Jefe de Mesa es encargado de:',
        ],[
            'unidad_id' => 3, 
            'enunciado' => 'En la evaluación de los casos, el Jefe de Mesa se asegura de que:',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿La puntuación de los jurados puede realizarse de forma grupal?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => 'Estar listo ante la diversidad de opiniones permitirá al jurado:',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Quién NO puede ser jurado?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => '¿Cuál de los siguientes enunciados respecto de los videocasos son verdaderos?',
        ],[
            'unidad_id' => 3, 
            'enunciado' => 'El código de vestimenta consiste en:',
        ],[
            'unidad_id' => 3, 
            'enunciado' => 'El horario en el que se realizará el proceso de evaluación y selección de casos va de:',
        ],[
            'unidad_id' => 3, 
            'enunciado' => 'El proceso de selección se realizará el:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => '¿En qué parte de la estructura del caso se debe tener especial cuidado al mencionar las fuentes de la data utilizada?',
        ],[
            'unidad_id' => 4, 
            'enunciado' => '¿En qué parte de la estructura del caso se menciona la relación de los medios escogidos con el público objetivo?',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Dentro de la información para evaluar el grado de dificultad del desafío para la marca debe mencionar:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Los objetivos de las campañas NO deben ser:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Los objetivos de la campaña deben ser medibles a través de:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Si se presenta un videocaso:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'En la parte de Insights e idea estratégica, se dice que si la marca no puede explicar una idea en UNA oración, no tiene una … :',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'En la parte de Insight e idea estratégica, se dará puntaje adicional si:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'En la parte de Traer la idea a la vida, ¿cuáles son las estrategias que deberían mencionarse?',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'En la parte de Traer la idea a la vida, los casos deberían mencionar una serie de Los atributos que se deben deberían comunicarse al consumidor. Entre esos atributos  estánson: ',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'En la parte de Resultados, el caso debe mencionar:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Respecto de los videocasos, ¿cuál de los siguientes enunciados es verdadero?',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Cada parte de la estructura del caso se evalúa de:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'La categoría se declara desierta cuando:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Ser un caso finalista NO garantiza:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Leer las bases del concurso ayudará a:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'El día de la evaluación, el jurado NO debe:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Respecto a las categorías:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'En el feedback se puede mencionar:',
        ],[
            'unidad_id' => 4, 
            'enunciado' => 'Un caso se puede descalificar cuando:';
        ]];

        foreach ($array as $item)
            Unidad::create($item);    
    }
}

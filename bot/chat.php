<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    
       
    //presentacion
    "hola" => "¡Hola! Bienvenido/a a Santa Fe Decoraciones. Estoy aquí para ayudarte con tus necesidades de decoración.",
    "buenos dias" => "¡Buenos días! Soy el chatbot de Santa Fe Decoraciones. ¿En qué puedo asistirte hoy?",
    "como estas" => "¡Hola! Estoy muy bien, gracias por preguntar. Estoy aquí y listo para ayudarte. ¿En qué puedo asistirte hoy?",
        
    //saludo
    "buenos dias" => "¡Buenos días! ¿Cómo puedo ayudarte?",
    "buenas tardes" => "¡Buenas tardes! ¿En qué puedo asistirte?",
    "buenas noches" => "¡Buenas noches! Estoy aquí y listo para ayudarte. ¿En qué puedo asistirte hoy?",
    
    //despedida
    "adios" => "¡Hasta luego, cuídate!",
    "hasta la proxima" => "¡Nos vemos pronto, que tengas un buen día!",
    "nos vemos" => "¡Te estaré esperando, hasta luego!",

    
    
    //nombre y genero
    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender(),

   
    //servicios
    "ofrecen asesoramiento en decoración?" => "¡Sí! En nuestra empresa ofrecemos asesoramiento personalizado en decoración para ayudarte a transformar tus espacios.",
    "ayudan con la selección de colores?" => "¡Claro que sí! Nuestro equipo puede ayudarte a elegir la combinación de colores perfecta para tu hogar o lugar de trabajo.",
    "brindan servicios de diseño de interiores?" => "¡Absolutamente! Ofrecemos servicios completos de diseño de interiores para crear ambientes funcionales y estéticamente atractivos.",
    "pueden ayudarme a elegir muebles?" => "Sí, por supuesto. Te ayudaremos a seleccionar muebles que se ajusten a tu estilo y necesidades específicas.",
    "ofrecen consultas virtuales?" => "Sí, ofrecemos consultas virtuales para brindarte asesoramiento y recomendaciones desde la comodidad de tu hogar.",
    "dan recomendaciones sobre iluminación?" => "¡Por supuesto! Te ofrecemos sugerencias de iluminación para resaltar tus espacios y crear la atmósfera deseada.",
    "ayudan con la distribución del espacio?" => "Claro que sí. Nuestro equipo puede ayudarte a optimizar la distribución de tu espacio para mejorar su funcionalidad y flujo.",
    "tienen servicios de diseño a medida?" => "Sí, ofrecemos servicios de diseño personalizado para adaptarnos a tus gustos y necesidades específicas.",
    "pueden ayudarme a elegir accesorios decorativos?" => "¡Por supuesto! Te ayudaremos a seleccionar accesorios que complementen tu estilo y aporten personalidad a tus espacios.",
    "ofrecen servicios de remodelación?" => "Sí, ofrecemos servicios completos de remodelación para transformar completamente tus espacios.",
    "dan consejos para decorar espacios pequeños?" => "Sí, te ofrecemos consejos y soluciones creativas para maximizar el espacio y hacer que los espacios pequeños se sientan más amplios y funcionales.",
    "ayudan con la selección de cortinas y persianas?" => "¡Claro que sí! Te asesoramos en la elección de cortinas y persianas que se adapten a tus necesidades de privacidad y estilo.",
    "brindan ideas para mejorar la decoración de mi hogar?" => "Sí, te ofrecemos ideas y sugerencias para mejorar la decoración de tu hogar y hacer que refleje tu estilo y personalidad.",
    "pueden ayudarme a crear un ambiente acogedor?" => "¡Por supuesto! Te ayudaremos a seleccionar elementos y a diseñar el espacio para crear un ambiente cálido y acogedor en tu hogar.",
    "ofrecen servicios de diseño de jardines?" => "Sí, ofrecemos servicios de diseño de jardines para crear espacios exteriores hermosos y funcionales.",
    "dan sugerencias para decorar mi oficina?" => "Sí, te ofrecemos sugerencias y soluciones de diseño para decorar tu oficina de manera funcional y estética.",
    "pueden ayudarme a elegir alfombras?" => "Sí, te ayudaremos a seleccionar alfombras que complementen tu decoración y aporten confort y estilo a tus espacios.",
    "ofrecen servicios de decoración de eventos?" => "Sí, ofrecemos servicios de decoración de eventos para crear ambientes memorables y personalizados para cualquier ocasión.",
    "brindan soluciones para espacios exteriores?" => "Sí, ofrecemos soluciones de diseño para crear espacios exteriores funcionales y estéticamente atractivos.",
    "dan consejos para decorar dormitorios infantiles?" => "Sí, te ofrecemos consejos y sugerencias para decorar dormitorios infantiles de manera creativa y funcional.",
    "pueden ayudarme a elegir arte para mis paredes?" => "¡Por supuesto! Te ayudaremos a seleccionar obras de arte que complementen tu decoración y reflejen tu estilo personal.",
    "ofrecen servicios de diseño de cocinas?" => "Sí, ofrecemos servicios de diseño de cocinas para crear espacios funcionales y estéticamente atractivos.",
    "brindan ideas para decorar espacios de trabajo?" => "Sí, te ofrecemos ideas y soluciones de diseño para decorar espacios de trabajo que fomenten la productividad y la creatividad.",
    "dan recomendaciones para renovar baños?" => "Sí, te ofrecemos recomendaciones y soluciones de diseño para renovar baños y crear espacios funcionales y hermosos.",


    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, las preguntas deben estar relacionadas con nuestra empresa.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
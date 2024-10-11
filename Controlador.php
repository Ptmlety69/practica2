<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index(){
        return view('index');
}
public function animalest(){
    $tierra=[
        ['nombre' => 'LEON (Panthera leo)', 'Desc'=>'león (de nombre científico Panthera leo) es un felino 
carnívoro de gran tamaño. Es originario del África Subsahariana y 
de ciertas regiones de la India, en donde constituye el mayor
 depredador de la cadena trófica. Es uno de los animales salvajes 
más conocidos y temidos por la humanidad, por su fiereza,
 pero también admirados y representados en símbolos, relatos y esculturas.
','Esp'=>'mamífero carnívoro de la familia de los 
félidos y una de las 4 especies del género Panthera
','Hab'=>': pueden sobrevivir en una amplia variedad de hábitats, como bosques secos, espesos arbustos, llanuras inundables y áreas semiáridas desérticas. Sin embargo, generalmente prefieren las sabanas
 abiertas donde es más fácil acechar a sus presas.
','img'=>''],
        ['nombre' => ': Zebra  (Equus zebra)', 'Desc'=>': Las cebras son animales sociales que viven en manadas. Pacen en grupo, normalmente hierba, e incluso se acicalan unas a otras. La especie más abundante es la cebra de llanura (o de Burchell). Viven en pequeños grupos familiares formados por un macho (semental), varias hembras y sus crías.','Esp'=>' Las cebras forman parte de la familia de los équidos y existen tres especies: la cebra de Hartmann (Equus zebra), la de Grevy (Equus grevyi) y la cebra de las llanuras (Equus quagga).','Hab'=>'Tienen una amplia distribución en el este y el sur de África. Habitualmente viven en praderas sin árboles y bosques de sabana y están ausentes de desiertos, selvas tropicales y humedales.','img'=>''],
        ['nombre' => 'Elefante ( Elephas maximus.)', 'Desc'=>': Es el mamífero más grande de la tierra puede pesar hasta ocho toneladas y mide 3 metros de alto por 7 de largo. Con grandes orejas en forma de abanico y una larga trompa. El elefante africano tiene tres dedos en la pata trasera y cinco en la parte delantera del pie','Esp'=>'','Hab'=>'','img'=>''],
        ['nombre' => '', 'Desc'=>'','Esp'=>'','Hab'=>'','img'=>''],
        ['nombre' => '', 'Desc'=>'','Esp'=>'','Hab'=>'','img'=>''],
        ['nombre' => '', 'Desc'=>'','Esp'=>'','Hab'=>'','img'=>''],
    ];
    return view('terrestres',compact('terr'));
}
public function animalesa(){
    $acua=[
        ['nombre' =>'Ballena azul', 'Desc'=>'La ballena más grande del planeta, puede alcanzar hasta 30 metros de longitud', 'Esp'=>'Balaenoptera musculus', 'Hab'=>'Océanos abiertos, principalmente en aguas profundas', 'img'=>''],
        
        ['nombre' =>'Cachalot', 'Desc'=>'Conocido por su cabeza grande y su capacidad para bucear a grandes profundidades.', 'Esp'=>'Physeter macrocephalus', 'Hab'=>'Aguas profundas de océanos y mares.', 'img'=>''],
        
        ['nombre' =>'Calamar gigante ', 'Desc'=>'Uno de los invertebrados más grandes, puede alcanzar longitudes de más de 12 metros.', 'Esp'=>' Architeuthis dux', 'Hab'=>'Aguas profundas de los océanos, especialmente en zonas templadas y frías.', 'img'=>''],
        
        ['nombre' =>'Tiburón ballena ', 'Desc'=>' El pez más grande del mundo, se alimenta filtrando plancton.', 'Esp'=>'Rhincodon typus', 'Hab'=>'Aguas cálidas de océanos tropicales y subtropicales.', 'img'=>''],
        
        ['nombre' =>'Tiburón peregrin', 'Desc'=>'Segundo pez más grande, también se alimenta de plancton', 'Esp'=>'Cetorhinus maximus', 'Hab'=>'Aguas templadas y frías de océanos abiertos.', 'img'=>''],
        
        ['nombre' =>'Orca', 'Desc'=>'Conocida como "ballena asesina", es un depredador tope y tiene una estructura social compleja.', 'Esp'=>'Orcinus orca', 'Hab'=>'Océanos y mares de todo el mundo, desde aguas frías hasta tropicales', 'img'=>''],
        ];
    return view('acuaticos',compact('acua'));
}
}

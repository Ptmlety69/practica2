<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index(){
        return view('index');
}
public function animalest(){
    $terr=[
        ['nombre' => '', 'Desc'=>'','Esp'=>'','Hab'=>'','img'=>''],
        ['nombre' => '', 'Desc'=>'','Esp'=>'','Hab'=>'','img'=>''],
        ['nombre' => '', 'Desc'=>'','Esp'=>'','Hab'=>'','img'=>''],
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
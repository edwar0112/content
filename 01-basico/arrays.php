<?php

$estudiantes = array('carlos ', 'jose', 'maria', 'luis');

echo"<pre>";
//var_dump($estudiantes);

print_r($estudiantes);
echo"</pre>";

echo $estudiantes[2];

$_instructtor=[
  'nombre'=>'jhon', 
  'apellido' => 'becerra',
   'edad' => 38, 
   'deudas' => '3.700.000.00'
];
echo"<pre>";
print_r($_instructtor);
echo"</pre>";

$tutor=[
  'nombre'=>'edwar andres ', 
  'apellido' => 'vaca pino',
   'edad' => 17, 
   'direccion' =>[
    'ciudad' => 'bucaramanga',
    'barrio' => 'san francisco',
    'nomenclatura' => 'carrera 24 #11-68',
    'zipcode' => '665544'
   ],
   'habilidades' => [
    'git', 'html','css', 'js', 'php', 'phyton', 'slq' 
    ]
   ];

   echo"<pre>";
print_r($tutor);
echo"</pre>";

   echo"<pre>";
print_r($tutor['direccion']['nomenclatura']);
echo"</pre>";

   echo"<pre>";
print_r($tutor['habilidades']);
echo"</pre>";

   echo"<pre>";
print_r($tutor['habilidades'][3]);
echo"</pre>";


$tutor['habilidades'][3] = 'javascript';

$tutor['direccion']['departamento'] = 'santander';

array_splice($tutor('habilidades'), 4, 2);

echo_count($tutor("habilidades"));
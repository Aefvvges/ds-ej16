<?php

require_once 'modelo/producto.php';
require_once 'modelo/proveedores.php';

$prod = new Producto();
$prod->Id = 1;
$prod->Nombre = 'Alfajor';
$prod->Codigo = '1234F';
$prod->Precio = 1000;
$prod->Marca = 'Fantoche';

$prov1 = new Proveedores();
$prov1->Id = 1;
$prov1->Nombre = 'Pablo';
$prov1->Cuil = 304859349483;
$prov1->Direccion = 'España 1230';
$prov1->Telefono = '341683994';

$prov2 = new Proveedores();
$prov2->Id = 2;
$prov2->Nombre = 'Jorge';
$prov2->Cuil = 303947999483;
$prov2->Direccion = 'Santa Fe 4853';
$prov2->Telefono = '3416043995';

$prov3 = new Proveedores();
$prov3->Id = 3;
$prov3->Nombre = 'Marta';
$prov3->Cuil = 274099904948;
$prov3->Direccion = 'Arijon 1890';
$prov3->Telefono = '3419309944';

$prod->ListaProveedores[] = $prov1;
$prod->ListaProveedores[] = $prov2;
$prod->ListaProveedores[] = $prov3;

$prod->MostrarInformacion();
<?php

class Producto {
    public $Id;
    public $Nombre;
    public $Codigo;
    public $Precio;
    public $Marca;
    public $ListaProveedores = array();

    public function MostrarInformacion(){
        echo 'Id del producto: ' . $this->Id . '<br>';
        echo 'Nombre del producto: ' . $this->Nombre . '<br>';
        echo 'Código del producto: ' . $this->Codigo . '<br>';
        echo 'Precio del producto: ' . $this->Precio . '<br>';
        echo 'Marca del producto: ' . $this->Marca . '<br>';
        echo 'Proveedores: <br>';
        foreach ($this->ListaProveedores as $proveedor){
            echo '<ul><li>Id del proveedor: ' . $proveedor->Id . '</li>';
            echo '<li>Nombre del proveedor: ' . $proveedor->Nombre . '</li>';
            echo '<li>Cuil del proveedor: ' . $proveedor->Cuil . '</li>';
            echo '<li>Dirección del proveedor: ' . $proveedor->Direccion . '</li>';
            echo '<li>Teléfono del proveedor: ' . $proveedor->Telefono . '</li></ul>';
        }
    }
}
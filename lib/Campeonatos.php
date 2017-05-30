<?php

class Campeonato{
        var $idCampeonato;
        var $codigo;
        var $nombre;
        var $fechaInicio;
        var $fechaTermino;
        var $cantidadPartidos;
        
        public function  _constructor()


        
        public function ListaCampeonatos(){
            
            $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT idCampeonato,codigo,nombre,fechaInicio,fechaTermino,cantidadPartidos"." FROM campeonato";
        
        $resultado=$db->query($sql);
        $i=0;
               
        while($fila = $resultado->fetch_assoc()){
            $oCampeonato= new Campeonato($fila["idCampeonato"],
                                         $fila["codigo"],
                                         $fila["nombre"],
                                         $fila["codigo"],
                                         $fila["codigo"])
        }
        
        $ocampeonato = new Campeonato();
        return $ocampeonato;
        }
        
}

?>
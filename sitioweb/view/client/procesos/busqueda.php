<?php
    require('../../../serviciosweb/conexion.php');
    
    function Busqueda($search){
    	        $datos=array();
    	        $reg=0;
    	        $renglon = query("CALL spListarMComidas('$search');");
    	      	while($resultado = mysqli_fetch_assoc($renglon)){
                    $datos[$reg]["ID"]=$resultado["menID"];	
                    $datos[$reg]["N_Menu"]=$resultado["nombreMenu"];	
                    $datos[$reg]["DesMenu"]=$resultado["descripMenu"];	
                    $datos[$reg]["img"]=$resultado["imagen"];	
    				$reg++;
    			}							
                ///mysqli_close($conn); 		
            
                return $datos;
    	        
    }
if(isset($_GET["search"])){
    $search = $_GET["search"];
    $DatosBusqueda = Busqueda($search);
    return $DatosBusqueda;

}

?>
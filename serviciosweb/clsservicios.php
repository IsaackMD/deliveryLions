<?php

    class clsservicios{
        public function nombre($nom){
            return "Bienvenido".$nom.",estás consumiendo el servicio web";
        }
        //METODO DE ACCESO
        public function acceso($usuario,$contra){
            $datos=array();
            require('conexion.php');
            $renglon= query("CALL spValidarAcceso('$usuario','$contra')");
            while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["ID"]=$resultado["CLAVE"];
                if((int)$datos[0]!=0){
                    $datos[1]["NOMBRE"]=$resultado["USUARIO"];
                    $datos[2]["ROL"]=$resultado["ROL"];
                    $datos[3]["USU"]=$resultado["USU"];
                }
            }
            return $datos;
        
        }
        public function mostrarafiliados()
	    {
	        $datos=array();   
            $reg=0; 
      
            require('conexion.php');
            //EJECUTA EL PROCEDIMIENTO DE CONSULTA
	        $renglon = query("CALL spListarAfiliados()");
	   
	  	  			
			while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["CLAVE"]=$resultado["Clave"];				
			    $datos[$reg]["NOMBRE"] =$resultado["Nombre"];					
			    $datos[$reg]["USUARIO"] =$resultado["Usuario"];					
			    $datos[$reg]["CORREO"] =$resultado["Correo"];					
			    $datos[$reg]["NEGOCIO"] =$resultado["Negocio"];
				$reg++;
			}							
            ///mysqli_close($conn); 		
        
            return $datos;
	    }
	     public function mostrarafiliadospendientes()
	    {
	        $datos=array();   
            $reg=0; 
      
            require('conexion.php');
            //EJECUTA EL PROCEDIMIENTO DE CONSULTA
	        $renglon = query("CALL spListarAfiliadosPendientes()");
	   
	  	  			
			while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["CLAVE"]=$resultado["Clave"];				
			    $datos[$reg]["NOMBRE"] =$resultado["Nombre"];					
			    $datos[$reg]["USUARIO"] =$resultado["Usuario"];					
			    $datos[$reg]["CORREO"] =$resultado["Correo"];					
			    $datos[$reg]["NEGOCIO"] =$resultado["Negocio"];
				$reg++;
			}							
            ///mysqli_close($conn); 		
        
            return $datos;
	    }
	    public function listaC(){
	        $datos=array();
	        require('conexion.php');
	        $reg=0;
	        $renglon = query("CALL spListarMComidas();");
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
	    
	    public function listaAfiliados(){
	        $datos=array();
	        require('conexion.php');
	        $reg=0;
	        $renglon = query("CALL spListarAfiliados();");
	      	while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["AFI_ID"]=$resultado["Clave"];	
                $datos[$reg]["N_AFI"]=$resultado["Negocio"];	
                $datos[$reg]["DesAFI"]=$resultado["Nombre"];	
                $datos[$reg]["img_AFI"]=$resultado["Imagen"];	
				$reg++;
			}							
            ///mysqli_close($conn); 		
        
            return $datos;
	        
	    }
	    public function mostrarclientes()
	    {
	        $datos=array();   
            $reg=0; 
      
            require('conexion.php');
            //EJECUTA EL PROCEDIMIENTO DE CONSULTA
	        $renglon = query("CALL spListarClientes()");
	   
	  	  			
			while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["CLAVE"]=$resultado["Clave"];				
			    $datos[$reg]["NOMBRE"] =$resultado["Nombre"];					
			    $datos[$reg]["USUARIO"] =$resultado["Usuario"];					
			    $datos[$reg]["CORREO"] =$resultado["Correo"];					
			    $datos[$reg]["TELEFONO"] =$resultado["Telefono"];
				$reg++;
			}							
            ///mysqli_close($conn); 		
        
            return $datos;
	    }
	    public function buscarAfiliados($Clave){
	        $datos=array();
	        $reg=0; 
	        require('conexion.php');
	        $renglon=query("CALL spBuscarAfiliado('$Clave')");
	        
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["CLAVE"]=$resultado["Clave"];				
			    $datos[$reg]["NOMBRE"] =$resultado["Nombre"];	
			    $datos[$reg]["USUARIO"] =$resultado["Usuario"];
			    $datos[$reg]["CORREO"] =$resultado["Correo"];					
			    $datos[$reg]["NEGOCIO"] =$resultado["Negocio"];
				$reg++;
			}
			return $datos;
	    }
	    public function buscarClientes($Clave){
	        $datos=array();
	        $reg=0; 
	        require('conexion.php');
	        $renglon=query("CALL spBuscarCliente('$Clave')");
	        
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["CLAVE"]=$resultado["Clave"];				
			    $datos[$reg]["NOMBRE"] =$resultado["Nombre"];					
			    $datos[$reg]["USUARIO"] =$resultado["Usuario"];					
			    $datos[$reg]["CORREO"] =$resultado["Correo"];					
			    $datos[$reg]["TELEFONO"] =$resultado["Telefono"];
				$reg++;
			}
			return $datos;
	    }
	    public function ValidarAfiliados($cve,$op){
	        $datos=array();
	        
	        require('conexion.php');
	        $renglon=query("CALL spValidarAfiliados('$cve','$op')");
	        
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["MENSAJE"]=$resultado["MENSAJE"];				
			    
				$reg++;
			}
			return $datos;
	    }
	    public function listarTiposUsuarios(){
	        $datos=array();   
            $reg=0; 
      
            require('conexion.php');
            //EJECUTA EL PROCEDIMIENTO DE CONSULTA
	        $renglon = query("CALL spListarTipos()");
	   
	  	  			
			while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["CLAVE"]=$resultado["Clave"];				
			    $datos[$reg]["ROL"] =$resultado["ROL"];					
				$reg++;
			}
			return $datos;
	    }
	    /*REGISTRAR USUARIOS
	    public function RegistrarUsuarios($tipo,$nombre,$ap,$am,$usu,$contra){
	        $datos=array();   
            require('conexion.php');
            $renglon = query("CALL spRegistroUsuario('$tipo','$nombre','$ap','$am','$usu','$contra');");
            while($resultado = mysqli_fetch_assoc($renglon)){
                 $datos[0]["REGISTRADO"] =$resultado["INSERTADO"];	
            }
            ///mysqli_close($conn); 		
        
        return $datos;
	    }*/
	    

        //REGISTRO CLIENTES --- INTERFAZ INICIAL
	    public function registrarClientes($nombre, $ap, $am, $usu, $email, $contra, $telefono, $genero, $fechaNacimiento, $seccion, $privada, $numCasa){
	        $datos=array();
	        require('conexion.php');
	        $renglon=query("CALL spInicioCliente('$nombre', '$ap', '$am', '$usu', '$contra', '$email', '$telefono', '$genero', '$fechaNacimiento',$seccion,'$privada', $numCasa);");
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["REGISTRADO"]=$resultado["INSERTADO"];				
			}	
			//mysqli_clore($conn);
			//SE RETORNAN LOS VALORES DEL ARREGLO
		    return $datos;
	    }
	    
	    //REGISTRO AFILIADOS --- INTERFAZ INICIAL
	    public function registrarAfiliados($nombre, $ap, $am, $usu, $email, $contra, $telefono, $genero, $fechaNacimiento, $seccion, $privada, $numCasa,$nomNegocio,$direccionNegocio,$tipoComida,$horarioApertura,$horarioCierre){
	        $datos=array();
	        require('conexion.php');
	        $renglon=query("CALL spInicioAfiliado('$nombre', '$ap', '$am', '$usu', '$contra', '$email', '$telefono', '$genero', '$fechaNacimiento',$seccion,'$privada', $numCasa,'$nomNegocio','$direccionNegocio',$tipoComida,'$horarioApertura','$horarioCierre');");
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[0]["REGISTRADO"]=$resultado["INSERTADO"];				
			}	
			//mysqli_clore($conn);
			//SE RETORNAN LOS VALORES DEL ARREGLO
		    return $datos;
	    }
	    
	    //LISTAR TIPOS DE COMIDAS
	    public function listarComidas(){
	        $datos=array();
	        $reg=0;
	        
	        require('conexion.php');
	        //EJECUTA EL PROCEDIMIENTO DE CONSULTA
	        $renglon=query("CALL spListarComidas();");
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["ID"]=$resultado["ID"];				
			    $datos[$reg]["CATEGORIA"] =$resultado["CATEGORIA"];	
			    $datos[$reg]["IMAGEN"] =$resultado["IMAGEN"];	
				$reg++;
			}	
			//mysqli_clore($conn);
		    return $datos;
	    }
	    
	    //LISTAR PEDIDOS -- INTERFAZ CLIENTE
	    public function listarPedidos($nombreUsuario){
	        $datos=array();
	        $reg=0;
	        
	        require('conexion.php');
	        //EJECUTA EL PROCEDIMIENTO DE CONSULTA
	        $renglon=query("CALL spListarPedidos('$nombreUsuario');");
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["ID"]=$resultado["Clave"];				
			    $datos[$reg]["NEGOCIO"] =$resultado["Negocio"];					
			    $datos[$reg]["MENU"] =$resultado["Menu"];					
			    $datos[$reg]["CANTIDAD"] =$resultado["Cantidad"];
			    $datos[$reg]["TOTAL"] =$resultado["Total"];
			    $datos[$reg]["FECHA"] =$resultado["Fecha del pedido"];
			    $datos[$reg]["ESTATUS"] =$resultado["Estatus"];
				$reg++;
			}	
			//mysqli_clore($conn);
		    return $datos;
	    }
	    
	    //BUSCAR PEDIDOS -- INTERFAZ CLIENTE
	    public function buscarPedidos($id,$nombreUsuario){
	        $datos=array();
	        $reg=0;
	        
	        require('conexion.php');
	        //EJECUTA EL PROCEDIMIENTO DE CONSULTA
	        $renglon=query("CALL spBuscarPedido($id,'$nombreUsuario');");
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["ID"]=$resultado["Clave"];	
			    $datos[$reg]["NEGOCIO"] =$resultado["Negocio"];					
			    $datos[$reg]["MENU"] =$resultado["Menu"];					
			    $datos[$reg]["CANTIDAD"] =$resultado["Cantidad"];
			    $datos[$reg]["TOTAL"] =$resultado["Total"];
			    $datos[$reg]["FECHA"] =$resultado["Fecha del pedido"];
			    $datos[$reg]["ESTATUS"] =$resultado["Estatus"];
			    $reg++;
			}	
			//mysqli_clore($conn);
		    return $datos;
	    }

        //LISTAR DATOS -- INTERFAZ CLIENTE
	    public function listarDatos($nombreUsuario){
	        $datos=array();
	        $reg=0;
	        
	        require('conexion.php');
	        //EJECUTA EL PROCEDIMIENTO DE CONSULTA
	        $renglon=query("CALL spDatos('$nombreUsuario');");
	        while($resultado = mysqli_fetch_assoc($renglon)){
                $datos[$reg]["NOMBRE"]=$resultado["NOMBRE"];				
			    $datos[$reg]["IMAGEN"] =$resultado["IMAGEN"];					
			    $datos[$reg]["USUARIO"] =$resultado["USUARIO"];					
			    $datos[$reg]["EMAIL"] =$resultado["EMAIL"];
			    $datos[$reg]["TELEFONO"] =$resultado["TELEFONO"];
			    $datos[$reg]["GENERO"] =$resultado["GENERO"];
			    $datos[$reg]["NACIMIENTO"] =$resultado["NACIMIENTO"];
			    $datos[$reg]["SECCION"] =$resultado["SECCION"];
			    $datos[$reg]["PRIVADA"] =$resultado["PRIVADA"];
			    $datos[$reg]["CASA"] =$resultado["CASA"];
			    $datos[$reg]["REGISTRO"] =$resultado["REGISTRO"];
				$reg++;
			}	
			//mysqli_clore($conn);
		    return $datos;
	    }
       //BUSCAR PEDIDO
       public function pedidoAfiliado(){
           
       }
       public function Busqueda($search){
        $datos=array();
        $reg=0;
         require('conexion.php');
        $renglon = query("CALL spBusquedaComida('$search');");
      	while($resultado = mysqli_fetch_assoc($renglon)){
            $datos[$reg]["ID"]=$resultado["menID"];	
            $datos[$reg]["N_Menu"]=$resultado["nombreMenu"];	
            $datos[$reg]["DesMenu"]=$resultado["descripMenu"];	
            $datos[$reg]["img"]=$resultado["imagen"];	
			$reg++;
		}							
        return $datos;
    	        
    }


    }
    //fin de la clase
    




?>
<?php
	$lUserIDString = "";
	if($_SESSION['loggedin'] == "True"){
	    $lUserIDString = "&uid=" . $lUserID;
	} //end if
?>

<div id="" class="user-panel mt-3 pb-3 mb-3 d-flex" text-align: left>

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open"></li>
          <li class="nav-header"><FONT SIZE=5>Menú principal OWASP Mutillidae II</FONT></li>          
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i><p> OWASP Mutillidae 2017 <i class="right fas fa-angle-left"></i></p></a>

              <ul class="nav-item nav-treeview"> 
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                            </li>
                          </ul>
                      </li>                                                    
                      <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                            </li>                                                        
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                            </li>
                            <li class="nav-item">
                              <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                            </li>
                            <li class="nav-item">
                              <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                            </li>                                                      
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                            </li>
                            <li class="nav-item">
                              <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                            </li>                                
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                            </li>
                            <li class="nav-item">
                              <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                            </li>
                            <li class="nav-item">
                              <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                            </li>
                            <li class="nav-item">
                              <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                            </li>                                 
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="index.php?page=pen-test-tool-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                            </li>
                            <li class="nav-item">
                              <a href="index.php?page=pen-test-tool-lookup-ajax.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                            </li>                               
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                            </li>                               
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                            </li>                        
                        </ul>                                                      
                      </li>                     
                    </ul>
                  </li>   
              
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                          </li>
                        </ul>
                    </li>                                                  
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                          </li>                                                        
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                          </li>                                                                         
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                          </li>                                 
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                          </li>                               
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                          </li>                               
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                          </li>                        
                      </ul>                                
                    </li>  
                  </ul> 
                </li>                  

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesiónes</FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omisión de autenticación</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Via fuerza bruta</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=privilege-escalation.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Via cookies</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Via inyección SQL</FONT></p></a>
                            </li>
                          <li class="nav-item">
                            <a href="index.php?page=edit-account-profile.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mediante secuestro de cuenta</FONT></p></a>
                            </li>
                      </ul>
                                                                          
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Escalada de privilegios</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=privilege-escalation.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Via cookies</FONT></p></a>
                                </li>              
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li> 
                                <li class="nav-item">
                                  <a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mediante secuestro de cuenta</FONT></p></a>
                                </li> 
                                <li class="nav-item">
                                  <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Vía CBC-bit Flipping</FONT></p></a>
                                </li>                                           
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Enumeración de nombre de usuario</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>  
                                <li class="nav-item">
                                  <a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Editar perfil de usuario</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda (servicio web SOAP)</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario (servicio web REST)</FONT></p></a>
                                </li>                                                                       
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Token web JSON (JWT)</FONT></a>    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=jwt.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario actual</FONT></p></a>
                                </li>                                                                         
                            </ul>               
                          </li>
                  </ul>  
                </li>        
                
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos sensibles</FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Divulgación de información</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Editar perfil de usuario</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=phpinfo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de información de PHP</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=robots-txt.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Robots.txt</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=secret-administrative-pages.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Páginas administrativas "secretas"</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=html5-storage.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Almacenamiento web HTML5</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=client-side-comments.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Comentarios HTML / JavaScript</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=cache-control.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Control de caché</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=framing.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Click-Jacking</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="framer.html" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Enmarcado entre sitios</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=framing.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Opciones de X-Frame (Click-Jacking)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="framer.html" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Opciones de X-Frame (secuencia de comandos entre cuadros)</FONT></p></a>
                          </li>
                      </ul>
                                                                          
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Divulgación de la ruta de la aplicación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=phpinfo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de información de PHP</FONT></p></a>
                                </li> 
                                <li class="nav-item">
                                  <a href="index.php?page=robots-txt.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Robots.txt</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Divulgación de la ruta de la plataforma</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=phpinfo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de información</FONT></p></a>
                                </li>                                                                         
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=ssl-misconfiguration.php" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Configuración incorrecta de SSL</FONT></a>                   
                          </li>
                          <li class="nav-item">                           
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Token web JSON (JWT)</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=jwt.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información del usuario actual</FONT></p></a>
                                </li>                             
                            </ul>
                          </li>                          
                  </ul>
                </li> 

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de entidad externa XML</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=xml-validator.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Validador XML</FONT></p></a>
                          </li>                          
                      </ul>                                                                        
                  </ul>
                </li> 
  
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - Control de acceso roto </FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Referencias de objetos directos inseguras</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mediante secuestro de cuenta</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=arbitrary-file-inclusion.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inclusión de archivos locales</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=arbitrary-file-inclusion.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inclusión de archivos remotos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=credits.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Créditos</FONT></p></a>
                          </li>                          
                      </ul>
                                                                          
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Falta el control de acceso a nivel de función</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=privilege-escalation.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Cookies como tokens de autenticación</FONT></p></a>
                                </li> 
                                <li class="nav-item">
                                  <a href="index.php?page=secret-administrative-pages.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Páginas administrativas "secretas"</FONT></p></a>
                                </li> 
                                <li class="nav-item">
                                  <a href="index.php?page=client-side-control-challenge.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Desafío de control del lado del cliente</FONT></p></a>
                                </li> 
                                <li class="nav-item">
                                  <a href="index.php?page=robots-txt.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Robots.txt</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Token web JSON (JWT)</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=jwt.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información del usuario actual</FONT></p></a>
                                </li>                                                                         
                            </ul>
                          </li>                          
                  </ul>
                </li>

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - Configuración incorrecta de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="index.php?page=directory-browsing.php" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Navegación de directorio</FONT></a>        
                  </li>      
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Manipulación de métodos (GET para POST)</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info-xpath.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (XPath)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-poll.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Encuesta</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                          </li>                          
                      </ul>                                                                          
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Encabezados HTTP</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=cache-control.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Control de caché</FONT></p></a>
                                </li>   
                                <li class="nav-item">
                                  <a href="index.php?page=framing.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Click-Jacking</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="framer.html" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Encuadre entre sitios (encuadre de terceros)</FONT></p></a>
                                </li>                                                     
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-agent-impersonation.php" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Suplantación de usuario-agente</FONT></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=upload-file.php" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Carga de archivos sin restricciones</FONT></a>                   
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=ssl-misconfiguration.php" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Configuración incorrecta de SSL</FONT></a>                            
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=phpinfo.php" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Página de información de PHP</FONT></a>                            
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=robots-txt.php" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Robots.txt</FONT></a>                            
                          </li>                           
                  </ul>
                </li> 

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - Secuencias de comandos entre sitios (XSS)</FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Reflejado (primer orden)</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=pen-test-tool-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de herramientas de prueba de lápiz</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=html5-storage.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Almacenamiento web HTML5</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inclusión arbitraria de archivos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=xml-validator.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Validador XML</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info-xpath.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (XPath)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-poll.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Encuesta</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registrar usuario</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=browser-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información del navegador</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=back-button-discussion.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Those &quot;Back&quot; Buttons</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=styling-frame.php&page-to-frame=styling.php%3Fpage-title%3DStyling+with+Mutillidae" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Peinado con Mutilidae</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Generador de contraseñas</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=client-side-control-challenge.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Desafío de control del lado del cliente</FONT></p></a>
                          </li>
                      </ul>
                                <!-- BEGIN HTML OUTPUT  -->                                          
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                </li>                                                                         
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                                
                          </li>   
                  </ul>
                </li> 

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                          </li>
                      </ul>
                                                                          
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                </li>                                                                         
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                                
                          </li>   
                  </ul>
                </li> 

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                          </li>
                      </ul>
                                                                          
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                </li>                                                                         
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                                
                          </li>   
                  </ul>
                </li>


                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                          </li>
                      </ul>
                                                                          
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                </li>                                                                         
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                                
                          </li>   
                  </ul>
                </li>

            </li>
    </ul>  
    
      
          <li class="nav-item has-treeview">      
                  <a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i><p> OWASP Mutillidae 2013 <i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav-item nav-treeview"> 
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                                </li>
                              </ul>
                          </li>                                                    
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                                </li>                                                      
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                                </li>                                
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                    
                      
                      
                          </li>                     
                        </ul>
                      </li>   
                  
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                            </ul>
                        </li>                                                  
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                              </li>                                                        
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                              </li>                                                                         
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                              </li>                                 
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                              </li>                        
                          </ul>                                
                        </li>  
                      </ul> 
                    </li>                  

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesión</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li> 
                      </ul>  
                    </li>        
                    
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 
      
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - control de acceso </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 


                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - config de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - cross site scripting</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>                    
                    </li>

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li>
                  </ul>
          </li>

          
          
          <li class="nav-item has-treeview">      
                  <a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i><p> OWASP Mutillidae 2010 <i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav-item nav-treeview"> 
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                                </li>
                              </ul>
                          </li>                                                    
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                                </li>                                                      
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                                </li>                                
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                    
                      
                      
                          </li>                     
                        </ul>
                      </li>   
                  
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                            </ul>
                        </li>                                                  
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                              </li>                                                        
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                              </li>                                                                         
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                              </li>                                 
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                              </li>                        
                          </ul>                                
                        </li>  
                      </ul> 
                    </li>                  

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesión</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li> 
                      </ul>  
                    </li>        
                    
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 
      
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - control de acceso </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 


                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - config de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - cross site scripting</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>                    
                    </li>

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li>
                  </ul>
          </li>
          
              
          <li class="nav-item has-treeview">      
                  <a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i><p> OWASP Mutillidae 2007 <i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav-item nav-treeview"> 
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                                </li>
                              </ul>
                          </li>                                                    
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                                </li>                                                      
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                                </li>                                
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                    
                      
                      
                          </li>                     
                        </ul>
                      </li>   
                  
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                            </ul>
                        </li>                                                  
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                              </li>                                                        
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                              </li>                                                                         
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                              </li>                                 
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                              </li>                        
                          </ul>                                
                        </li>  
                      </ul> 
                    </li>                  

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesión</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li> 
                      </ul>  
                    </li>        
                    
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 
      
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - control de acceso </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 


                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - config de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - cross site scripting</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>                    
                    </li>

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li>
                  </ul>
          </li>
          

          <li class="nav-item has-treeview" >      
                  <a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i><p>  Servicios WEB <i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav-item nav-treeview"> 
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                                </li>
                              </ul>
                          </li>                                                    
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                                </li>                                                      
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                                </li>                                
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                    
                      
                      
                          </li>                     
                        </ul>
                      </li>   
                  
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                            </ul>
                        </li>                                                  
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                              </li>                                                        
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                              </li>                                                                         
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                              </li>                                 
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                              </li>                        
                          </ul>                                
                        </li>  
                      </ul> 
                    </li>                  

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesión</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li> 
                      </ul>  
                    </li>        
                    
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 
      
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - control de acceso </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 


                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - config de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - cross site scripting</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>                    
                    </li>

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li>
                  </ul>
          </li>


          <li class="nav-item has-treeview" >      
                  <a href="#" class="nav-link"><i class="nav-icon fas fa-circle" ></i><p>  Otros <i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav-item nav-treeview"> 
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                                </li>
                              </ul>
                          </li>                                                    
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                                </li>                                                      
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                                </li>                                
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                    
                      
                      
                          </li>                     
                        </ul>
                      </li>   
                  
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                            </ul>
                        </li>                                                  
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                              </li>                                                        
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                              </li>                                                                         
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                              </li>                                 
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                              </li>                        
                          </ul>                                
                        </li>  
                      </ul> 
                    </li>                  

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesión</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li> 
                      </ul>  
                    </li>        
                    
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 
      
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - control de acceso </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 


                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - config de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - cross site scripting</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>                    
                    </li>

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li>
                  </ul>
          </li>

          <li class="nav-item has-treeview" >      
                  <a href="#" class="nav-link"><i class="nav-icon fas fa-circle" ></i><p>  Laboratorio <i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav-item nav-treeview"> 
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                                </li>
                              </ul>
                          </li>                                                    
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                                </li>                                                      
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                                </li>                                
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                    
                      
                      
                          </li>                     
                        </ul>
                      </li>   
                  
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                            </ul>
                        </li>                                                  
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                              </li>                                                        
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                              </li>                                                                         
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                              </li>                                 
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                              </li>                        
                          </ul>                                
                        </li>  
                      </ul> 
                    </li>                  

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesión</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li> 
                      </ul>  
                    </li>        
                    
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 
      
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - control de acceso </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 


                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - config de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - cross site scripting</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>                    
                    </li>

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li>
                  </ul>
          </li>


          <li class="nav-item has-treeview" >      
                  <a href="#" class="nav-link"><i class="nav-icon fas fa-circle" ></i><p>  Documentación <i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav-item nav-treeview"> 
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                                </li>
                              </ul>
                          </li>                                                    
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                                </li>                                                      
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                                </li>                                
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                    
                      
                      
                          </li>                     
                        </ul>
                      </li>   
                  
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                            </ul>
                        </li>                                                  
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                              </li>                                                        
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                              </li>                                                                         
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                              </li>                                 
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                              </li>                        
                          </ul>                                
                        </li>  
                      </ul> 
                    </li>                  

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesión</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li> 
                      </ul>  
                    </li>        
                    
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 
      
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - control de acceso </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 


                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - config de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - cross site scripting</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>                    
                    </li>

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li>
                  </ul>
          </li>


          <li class="nav-item has-treeview" >      
                  <a href="#" class="nav-link"><i class="nav-icon fas fa-circle" ></i><p>  Recursos <i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav-item nav-treeview"> 
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección </p><i class="right fas fa-angle-left"></i></a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>SQLi Extraer datos</FONT></a>                    
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Inf usuario</FONT></p></a>
                                </li>
                              </ul>
                          </li>                                                    
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Omitir autenticación</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>                                                        
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Insertar inyección SQLi</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="?page=add-to-your-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a blog</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=captured-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver datos de captura</FONT></p></a>
                                </li>                                                      
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Blind SQL via timing</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Info. Usuario</FONT></p></a>
                                </li>                                
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                </li>                                 
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                </li>
                                <li class="nav-item">
                                  <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                </li>                               
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                </li>                        
                            </ul>                    
                      
                      
                          </li>                     
                        </ul>
                      </li>   
                  
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><p> A1 - SQL Inyección (Otro)</p><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                            </ul>
                        </li>                                                  
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                              </li>                                                        
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                              </li>                                                                         
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                              </li>                                 
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                              </li>                               
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                              </li>                        
                          </ul>                                
                        </li>  
                      </ul> 
                    </li>                  

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A2 - Gestion de sesión</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li> 
                      </ul>  
                    </li>        
                    
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A3 - Exposición de datos</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A4 - Entidad externa XML</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 
      
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A5 - control de acceso </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 


                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A6 - config de seguridad </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A7 - cross site scripting</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A8 - Insecure deserialization</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li> 

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A9 - Componentes con vulnerabilidad</FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>                    
                    </li>

                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link"><i class="far fa-check-square nav-icon"></i><FONT SIZE=3>A10 - Registro y seguimiento </FONT><i class="right fas fa-angle-left"></i></a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de registro de la aplicación</FONT></a>                    
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="index.php?page=dns-lookup.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Agregar a tu blog</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Búsqueda de DNS</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=echo.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=cors.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CORS)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=content-security-policy.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Mensaje de eco (CSP)</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de documentos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=capture-data.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Página de captura de datos</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=register.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Registro de usuario</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=source-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de código fuente</FONT></p></a>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=text-file-viewer.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Visor de archivos de texto</FONT></p></a>
                              </li>
                          </ul>
                                                                              
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Desbordamiento de búfer</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=repeater.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Reloj de repetición</FONT></p></a>
                                    </li>                                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Inyección de estilo en cascada</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=set-background-color.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Establecer color de fondo</FONT></p></a>
                                    </li>                                                                         
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Volteo CBC-bit</FONT></a>                   
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Práctica SQLMap</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=sqlmap-targets.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Objetivos de práctica de SQLMAP</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=login.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Acceso</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=view-someones-blog.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Ver el blog de alguien</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Información de usuario (SQL)</FONT></p></a>
                                    </li>                                 
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via JSON</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup</FONT></p></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="index.php?page=user-info.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Pen Test Tool Lookup (AJAX)</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via SOAP Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/soap/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Usuario de búsqueda</FONT></p></a>
                                    </li>                               
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-grip-horizontal nav-icon"></i><FONT SIZE=2>Via REST Web Serv.</FONT></a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                      <a href="./webservices/rest/ws-user-account.php" class="nav-link"><i class="far fa-check-circle nav-icon"></i><p><FONT SIZE=2>Gestión de cuentas de usuario</FONT></p></a>
                                    </li>                        
                                </ul>                                
                              </li>   
                      </ul>
                    </li>
                  </ul>
          </li>
</div>




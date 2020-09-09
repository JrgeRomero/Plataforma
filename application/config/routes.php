<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route[''] = '';

//$route['default_controller'] = 'auth/index';
$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Inicio de sesión Login
$route['inicio'] = 'auth/login/'; //Se Ocupa
$route['password'] = 'auth/forgot_password/'; //Se Ocupa
//Finalizar sesión
$route['salir'] = 'auth/logout/'; //Se Ocupa
//Perfil de usuario
$route['perfil'] = 'portal/usuario'; //Se Ocupa
$route['usuarios'] = 'authuser/register'; //Se Ocupa

//Acceso Principal (Dashboard)
$route['menu'] = 'portal/index'; //Se Ocupa
$route['formatos'] = 'portal/formatos'; //Se Ocupa
$route['fclientes'] = 'cliente/index'; //New
$route['Equipos'] = 'computadora/index'; //New
$route['config'] = 'portal/systemsettings'; //Se Ocupa
$route['participantes'] = 'entidades/index'; //Se Ocupa
$route['proyecto'] = 'datosproyecto/index'; //Se Ocupa

$route['puestos'] = 'puestos/index'; //Se Ocupa
$route['departamentos'] = 'departamentos/index'; //Se Ocupa
$route['ubicaciones'] = 'ubicaciones/index'; //Se Ocupa

$route['porrep'] = 'portal/repositorio';

//Accesos Formatos
$route['fboind']  = 'fboletin/index';
$route['fesind']  = 'fescrito/index';
$route['fmlind']  = 'fminutalistum/index';
$route['fmiind']  = 'fminutum/index';
$route['fncind']  = 'fnotacampo/index';
$route['fchlis']  = 'checklist/index';
$route['fcontpres'] = 'fcontrolpresupuestal/index';

$route['notainfo']  = 'fnotainformativa/index'; //Se Ocupa
$route['autofrente']  = 'fautofrentedeobra/index'; //Se Ocupa
$route['minutajunta']   = 'fminutajunta/index'; //Se Ocupa
$route['finiquito']   = 'ffiniquitoservicios/index'; //Se Ocupa
$route['actarecepcion'] = 'factarecepcion/index'; //Se Ocupa
$route['listacalidad'] = 'flistadecalidad/index'; //Se Ocupa

$route['asistencia'] = 'listaentradasalida/index'; //Se Ocupa
$route['tracker'] = 'ftracker/index'; //Se Ocupa
$route['anexostracker'] = 'ftrackeranexo/index'; //Se Ocupa

//Pruebas
$route['subirarchivos'] = 'portal/upload'; //Se Ocupa
$route['pruebas'] = 'portal/pruebas'; //Se Ocupa

//Carpeta
$route['carind'] = 'carpeta/index';
<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
//$routes->get('/', 'IndexController::index');
//$routes->get('/registro', 'Influencer::registro');
//$routes->post('/crear', 'Influencer::crear');
//$routes->get('/eliminar/(:any)', 'Influencer::delete/$1');
//$routes->get('/actualizar/(:any)', 'Influencer::edit/$1');

$routes->get('/', 'IndexController::index');


$routes->group('influencer', static function ($routes) {
$routes->get('new', 'InfluencerController::new');
$routes->post('create', 'InfluencerController::create');
$routes->get('edit/(:any)', 'InfluencerController::edit/$1');
$routes->get('privacidad', 'InfluencerController::privacidad');
$routes->post('cambiarFotoPerfil', 'InfluencerController::cambiarFotoPerfil');
$routes->post('agregarRedSocial', 'InfluencerController::agregarRedSocial');
$routes->post('eliminarRedes', 'InfluencerController::elminarRedes');
$routes->post('actualizarPerfil', 'InfluencerController::actualizarPerfil');
$routes->post('elminarCategoria', 'InfluencerController::elminarCategoria');
$routes->post('adicionarCategoria', 'InfluencerController::adicionarCategoria');
$routes->post('eliminarLenguaje', 'InfluencerController::eliminarLenguaje');
$routes->post('adicionarIdioma', 'InfluencerController::adicionarIdioma');
$routes->post('eliminarVideo', 'InfluencerController::eliminarVideo');
$routes->post('cambiarVideo', 'InfluencerController::cambiarVideo');
$routes->post('eliminarFotoGaleria', 'InfluencerController::eliminarFotoGaleria');
$routes->post('agregarFotoGaleria', 'InfluencerController::agregarFotoGaleria');
$routes->post('editarResenia', 'InfluencerController::editarResenia');
$routes->post('eliminarMarcas', 'InfluencerController::eliminarMarcas');
$routes->post('eliminarPagos', 'InfluencerController::eliminarPagos');
$routes->post('adicionarEmpresa', 'InfluencerController::adicionarEmpresa');
$routes->post('adicionarPago', 'InfluencerController::adicionarPago');
$routes->post('editarOferta', 'InfluencerController::editarOferta');
$routes->get('new2/(:any)', 'InfluencerController::registro/$1');
$routes->post('guardarRedesSociales', 'InfluencerController::guardarRedesSociales');
$routes->get('new3/(:any)', 'InfluencerController::registrofinal/$1');
$routes->post('continuarregistro', 'InfluencerController::continuarregistro');
$routes->get('mensajes/(:any)', 'InfluencerController::mensajesInfluencer/$1');


});




$routes->get('/perfil/(:any)', 'PerfilController::index/$1');
$routes->post('/perfil/create', 'PerfilController::enviarMensajeAInfluencer');
$routes->post('/perfil/correo', 'PerfilController::enviarCorreoLocal');

$routes->get('busqueda', 'UsuarioController::index');
$routes->post('busqueda/resultado', 'UsuarioController::buscarInfluencers');

$routes->get('privacidad', 'InfluencerController::privacidad');



//RUTAS DE EJEMPLOS
$routes->get('/ejemplo', 'EnsayoController::index');
$routes->post('/crear', 'EnsayoController::crear');




$routes->group('dashboard', static function ($routes) {
    $routes->get('/', 'dashboard\DashboardController::index');
    $routes->get('influencers', 'dashboard\DashboardController::influencers',['as'=>'influencerdash']);
    $routes->get('mensajes', 'dashboard\DashboardController::mensajes',['as'=>'mensajesdash']);
    $routes->get('noticias', 'dashboard\DashboardController::noticias',['as'=>'noticiasdash']);
    $routes->get('nuevanoticia', 'dashboard\DashboardController::nuevaNoticia',['as'=>'nuevanoticiadash']);
    $routes->post('crearnoticia', 'dashboard\DashboardController::crearnoticia',['as'=>'crearnoticiadash']);
    $routes->get('representantes', 'dashboard\DashboardController::representantes',['as'=>'representantesdash']);
    $routes->get('visitantes', 'dashboard\DashboardController::visitantes',['as'=>'visitantesdash']);
    $routes->get('show', 'dashboard\DashboardController::show');
    
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

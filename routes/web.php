<?php
use App\Contacto;
use App\Telefono;
use App\Carro;
use App\Usuario;
use App\clases\productos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/phpinfo", function(){phpinfo();});
Route::get('numero/{n}', "inicioController@showtabla")
->where(array('n'=>'[0-9]+'));

Route::get("layout", "InicioController@layout");
Route::get("layout2", "InicioController@layout2");

#proyectos de la otra clase de RAMiro
/*-------------------------------------------------------------------------------*/
Route::get('factor/{nu}', "InicioController@factorialsito")
->where(array('nu'=>'[0-9]+'));
Route::get('binario/{num}', "EstructuradatosController@secbinario")
->where(array('num'=>'[0-9]+'));
Route::get("/ingresar/nombre/{nombre}", "EstructuradatosController@secnombre");
Route::get("/numerosinvertidos", "EstructuradatosController@listnum");
Route::get("/serie/{numero}", "EstructuradatosController@cserie");
Route::get("/mayor", "EstructuradatosController@cmayor");
Route::get("/menor", "EstructuradatosController@cmenor");
Route::get("/secuencia","EstructuradatosController@secuencia");
Route::get("/letrasanumeros/{palabra}", "EstructuradatosController@cpalabra");
Route::get("/numerosletras/{palabra}", "EstructuradatosController@cnumeros");
/*-------------------------------------------------------------------------------*/
#EXAMEN
/*-------------------------------------------------------------------------------*/
Route::get("/examen/1/{decimal}", "EstructuradatosController@auno");
Route::get("/examen/3", "EstructuradatosController@atres");
Route::get("/examen/2", "EstructuradatosController@ados");
Route::get("/examen", "EstructuradatosController@pregunta");
#collection
/*-------------------------------------------------------------------------------*/
Route::get("/coleccion","ColeccionesController@devolverprimero");
Route::get("/coleccion/ultimo","ColeccionesController@devolverultimo");
Route::get("/coleccion/avg", "ColeccionesController@avg");
Route::get("/coleccion/chunk", "ColeccionesController@chunk");
Route::get("/coleccion/collaps", "ColeccionesController@collaps");
Route::get("/coleccion/combine", "ColeccionesController@combine");
Route::get("/coleccion/concat", "ColeccionesController@concat");
Route::get("/coleccion/contains", "ColeccionesController@contains");
Route::get("/coleccion/count", "ColeccionesController@count");
Route::get("/coleccion/crossjoin", "ColeccionesController@crossjoin");
Route::get("/coleccion/diff", "ColeccionesController@diff");
Route::get("/coleccion/diffassoc", "ColeccionesController@diffassoc");
Route::get("/coleccion/diffkeys", "ColeccionesController@diffkeys");
Route::get("/coleccion/dump", "ColeccionesController@dump");
Route::get("/coleccion/each", "ColeccionesController@each");
Route::get("/coleccion/eachspread", "ColeccionesController@eachspred");
Route::get("/coleccion/every", "ColeccionesController@every");
Route::get("/coleccion/except", "ColeccionesController@except");
Route::get("/coleccion/filter", "ColeccionesController@filter");
Route::get("/coleccion/firstwhere", "ColeccionesController@firstwhere");
Route::get("/coleccion/map", "ColeccionesController@map");
Route::get("/coleccion/flaten", "ColeccionesController@flaten");
Route::get("/coleccion/forget", "ColeccionesController@forget");
Route::get("/coleccion/forpage", "ColeccionesController@forpage");
Route::get("/coleccion/get", "ColeccionesController@get");
Route::get("/coleccion/groupby", "ColeccionesController@groupby");
Route::get("/coleccion/groupbycal", "ColeccionesController@groupbycal");
/*-------------------------------------------------------------------------------*/
Route::get("/formularioproducto", "ColeccionesController@registroultimafun");
Route::post("/producto", "ColeccionesController@registroproducto");
Route::get("/pruebita","operacionesdbController@horario");
Route::get("/tablas", "ColeccionesController@formularioiriota");
//registrar alumno, 3 unidades, promedio, cuantos pasaron, cuantos reprobaron y porcentaje de cuantos pasaron y cuantos reprobaron
Route::get("/alumnos", "controllerU2@viewform");
Route::post("/pstalumnos", "controllerU2@retcalificaciones");
/*-------------------------------------------------------------------------------*/
Route::get("/accesodenegado", function(){
	return view("mid.accesodenegado");
});
Route::get("/mostrarinfo",["middleware"=>"poli", "uses"=>"inicioController@mostrar"]);
Route::get("/form", function(){
	return view("midleware.elformularioese");
});
Route::get("/url", ["middleware"=>"veri", function(Request $request){
	$Resultado=Request::instance()->query('aceptado');
	return view("midleware.aceptado", compact('aceptado'));
}]);
#llamr contacto
Route::get("/contacto", "operacionesdbController@devolverrcontacto");
#Página principal
//formulario
Route::get("/altacontacto/reg", "operacionesdbController@viewregstrarcontacto");
//guardar info
Route::get("/altacontacto", "operacionesdbController@registrarcontacto");
//formulario alterar
Route::get("/altacontacto/alt", "operacionesdbController@viewalterarcontacto");
//alterar info
Route::get("/altercontacto", "operacionesdbController@alterarcontacto");
//formulario eli 
Route::get("/altacontacto/eli", "operacionesdbController@vieweliminarcontacto");
//eliminar info
Route::post("/altacontacto/elis", "operacionesdbController@eliminarcontacto");
Route::get("/tel", function(){
	return (contacto::findOrFail(1)->telefonos->first());
});
Route::get("/tel2", function(){
	return Telefono::find(1)->contacto;
});
Route::get("/contarcar", function(){
	return Contacto::find(1)->carro->first();
});
Route::get("/altafelefono","operacionesdbController@viewregistrartelefono");
Route::post("/altatelefono","operacionesdbController@registrartelefono");
Route::get("/registrarcarro", "operacionesdbController@viewregistrarcarro");
Route::post("/altacarrito", "operacionesdbController@registrarcarro");
Route::get("/altacarropersona", "operacionesdbController@viewregistrarcontactocarro");
Route::post("/regcarropersona", "operacionesdbController@registrarcontactocarro");
Route::get("/logiadocontacto", "operacionesdbController@viewusuarito");
Route::post("/logiado", "operacionesdbController@usuarito");
/*-------------------------------------------------------------------------------*/
Route::get("/entrada", "operacionesdbController@entrada");
Route::get("/menubicis", "operacionesdbController@menuexam");
Route::get("/altabicis", "operacionesdbController@viewbicicletas");
Route::post("/regbici", "operacionesdbController@regbici");
Route::get("/portadores", "operacionesdbController@viewportador");
Route::post("/regportadores", "operacionesdbController@regport");
Route::get("/relacionales" ,"operacionesdbController@viewportadorbici");
Route::Post("/regrelaciones", "operacionesdbController@regportadorbici");
Route::get("/consultas", "operacionesdbController@bicicletasasignadas");
Route::get("/consultas2", "operacionesdbController@bicicletasinasignar");
Route::get("/consultas3", "operacionesdbController@marcadebici");
Route::get("/consultas4", "operacionesdbController@maydeedad");
Route::post("/eliminarportador", "operacionesdbController@eliminarbici");
/*-------------------------------------------------------------------------------*/
#presentación con RAMiro
/*-------------------------------------------------------------------------------*/
Route::get("/metodo_ordenamiento", "controllerU2@");
Route::get("/marranokun", "controllerU2@preordenamesta");
Route::get("/adolfo", "controllerU2@adolfo");
Route::get("/burbuja", "controllerU2@burbuja");
Route::get("/inserccion", "controllerU2@inserccion");
Route::get("/gnoma", "controllerU2@gnoma");
Route::get("/selection", "controllerU2@selection");
Route::get("/dsn", "controllerU2@MostrarMerge");
Route::get("/edsonview", "controllerU2@edsonview");
Route::get("/ultiedson", "controllerU2@mergesort");
/*-------------------------------------------------------------------------------*/
#css y selectores
/*-------------------------------------------------------------------------------*/
Route::get("/cuadricula", "controllerU2@cuadricula");
Route::get("/functiondelacuadricula", "controllerU2@functiondelacuadricula");
Route::get("/calculadora", "controllerU2@viewcalculadora");
Route::get("/pruebitamovedera", "controllerU2@pruebamesta");
Route::get("/gato", "controllerU2@gato");
Route::get("/btntexto", "controllerU2@botontexto");
/*-------------------------------------------------------------------------------*/
#proyectini
/*-------------------------------------------------------------------------------*/
Route::get("/menu", function(){return view("marmolera/formulariomenu");});
//Clientes
Route::get('verClientes', 'MarmoleriaClientes@viewverclientes');
Route::get('/registrarClientes', 'MarmoleriaClientes@viewregistrarclientes');
Route::post('/registrarClientes', 'MarmoleriaClientes@registrarclientes');
Route::get('/seleccionarClientes', 'MarmoleriaClientes@viewseleccionarclientes');
Route::get('/actualizarClientes/{id}', 'MarmoleriaClientes@viewactualizarclientes');
Route::post('/actualizarClientes/{id}', 'MarmoleriaClientes@actualizarclientes');
Route::get('/clientesborrados', 'MarmoleriaClientes@viewclientesborrados');
Route::get('/clientesmodificados', 'MarmoleriaClientes@viewclientesmodificados');
Route::get('/clientesingresados', 'MarmoleriaClientes@viewclientesingresados');
Route::get('/saldocliente/{id}', 'MarmoleriaClientes@viewsaldocliente');
Route::post('/saldocliente/{id}', 'MarmoleriaClientes@viewclientesingresados');
//Ventas
Route::get('verVentas', 'MarmoleriaVentas@viewverventas');
Route::get('/registrarVentas', 'MarmoleriaVentas@viewregistrarventas');
Route::get('/selecciondeestadodelcliente/{id}', 'MarmoleriaVentas@estadocliente');
Route::post('/registrarVentas', 'MarmoleriaVentas@registrarventas');
Route::get('/seleccionarVentas', 'MarmoleriaVentas@viewseleccionarventas');
Route::get('/actualizarVentas/{id}', 'MarmoleriaVentas@viewactualizarventas');
Route::post('/actualizarVentas/{id}', 'MarmoleriaVentas@actualizarventas');
//Productos
Route::get('/Marmoleria', 'MarmoleriaController@viewInicio');
Route::get('/verProductos', 'MarmoleriaController@viewverproductos');
Route::get('/registrarProductos', 'MarmoleriaController@viewregistrarproductos');
Route::post('/registrarProductos', 'MarmoleriaController@registrarproductos');
Route::get('/seleccionarProductos/{categoria}', 'controllerU4@viewseleccionarproductos');
Route::get('/actualizarProductos/{id}', 'MarmoleriaController@viewactualizarproductos');
Route::post('/actualizarProductos/{id}', 'MarmoleriaController@actualizarproducto');
Route::get('/eliminarProductos/{id}', 'MarmoleriaController@eliminarproductos');
Route::get('/verprodcutosporfecha', 'MarmoleriaController@viewverproductosingresados');
//Materiales
Route::get('verMateriales', 'MarmoleriaMateriales@viewvermateriales');
Route::get('/registrarMateriales', 'MarmoleriaMateriales@viewregistrarmateriales');
Route::post('/registrarMateriales', 'MarmoleriaMateriales@registrarmateriales');
Route::get('/seleccionarMaterial', 'MarmoleriaMateriales@viewseleccionarmateriales');
Route::get('/actualizarMateriales/{id}', 'MarmoleriaMateriales@viewactualizarmateriales');
Route::post('/actualizarMateriales/{id}', 'MarmoleriaMateriales@actualizarmateriales');
Route::get('/eliminarMaterial/{id}', 'MarmoleriaMateriales@eliminarmaterial');
//Estados
Route::get('verEstados', 'MarmoleriaEstados@viewverestados');
Route::get('/registrarEstados', 'MarmoleriaEstados@viewregistrarestados');
Route::post('/registrarEstados', 'MarmoleriaEstados@registrarestados');
Route::get('/seleccionarEstados', 'MarmoleriaEstados@viewseleccionarestados');
Route::get('/actualizarEstados/{id}', 'MarmoleriaEstados@viewactualizarestados');
Route::post('/actualizarEstados/{id}', 'MarmoleriaEstados@actualizarestados');
Route::get('/eliminarEstados/{id}', 'MarmoleriaEstados@eliminarestado');
//Localidades
Route::get('verLocalidades', 'MarmoleriaLocalidades@viewverlocalidades');
Route::get('/registrarLocalidades', 'MarmoleriaLocalidades@viewregistrarlocalidades');
Route::post('/registrarLocalidades', 'MarmoleriaLocalidades@registrarlocalidades');
Route::get('/seleccionarLocalidades', 'MarmoleriaLocalidades@viewseleccionarlocalidades');
Route::get('/actualizarLocalidades/{id}', 'MarmoleriaLocalidades@viewactualizarlocalidades');
Route::post('/actualizarLocalidades/{id}', 'MarmoleriaLocalidades@actualizarlocalidades');
Route::get('/eliminarLocalidades/{id}', 'MarmoleriaLocalidades@eliminarlocalidad');
//Categoria
Route::get('/seleccionarcategoriassin', 'MarmoleriaCategoria@viewseleccionarcategoriassin');
Route::get('verCategoria', 'MarmoleriaCategoria@viewvercategoria');
Route::get('/registrarCategoria', 'MarmoleriaCategoria@viewregistrarcategoria');
Route::post('/registrarCategoria', 'MarmoleriaCategoria@registrarcategoria');
Route::get('/seleccionarCategoria', 'MarmoleriaCategoria@viewseleccionarcategoria');
Route::get('/actualizarCategoria/{id}', 'MarmoleriaCategoria@viewactualizarcategoria');
Route::post('/actualizarCategoria/{id}', 'MarmoleriaCategoria@actualizarcategoria');
Route::get('/eliminarCategoria/{id}', 'MarmoleriaCategoria@eliminarcategoria');
//Login
Route::get('/login', 'UserController@viewlogin');
Route::post('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::get('/registrarse', 'UserController@viewregistrarse');
Route::post('/registrarse', 'UserController@registrarse');
//Inicio
Route::get('/inicio', 'UserController@viewinicio');
//Administrador
Route::get('/inicioAdmin', 'UserController@viewinicioadmin');
//Examen de ordenamiento
Route::get('/examen2', 'controllerU3@viewregistro');
Route::post('/examen2.1', 'controllerU3@agegaritem');
Route::get('/examen2.2', 'controllerU3@tabladesordenada');
Route::get('/ordennombre', 'controllerU3@selectionnombre');
//ajax
Route::get("/micoleccion", "controllerU3@micoleccion2");
Route::get("/jqueryajax", function(){
	return view("/jqueryajax/formulariojqueryajax");
});
Route::post("/otracoleccion", "controllerU3@micoleccion");
Route::get("/ingresaraglo", function(){
	return view("/jqueryajax/formularioagregado");
});
Route::post("/aleatorioss", "controllerU3@aleatorioss");
Route::get("/aleatoriosexm", function(){
	return view("/jqueryajax/formularioaleatorios");
});
Route::get("/colas", "controllerU3@colas");
Route::get("/graficamesta", function(){return view("/jqueryajax/formulariograficas");});
Route::get("/graficamestareg", function(){return view("/jqueryajax/formularioingresaragraficas");});
Route::post("/graficas", "controllerU4@reggraficas");
Route::post("/consultagraf", "controllerU4@consgraficas");
Route::get("/export", "controllerU4@export");
Route::get("import", "controllerU4@import");
Route::get("/productoimagenes", "MarmoleriaProductos@productoimagenes");
Route::post("subida", "controllerU4@");
#mitología
Route::get("/mitologia/cargarbestiario", function(){return view("/mitologia/bestiarioregistrar");});
Route::get("/mitologia/registrar/296387", "controllermitologico@elementos");
Route::get("/mitologia/registrar/296388", "controllermitologico@regelementos");
Route::get("/mitologia/registrar/275352", "controllermitologico@peligrosidad");
Route::get("/mitologia/registrar/275353", "controllermitologico@regpeligrosidad");
Route::get("/mitologia/registrar/873696", "controllermitologico@categoria");
Route::get("/mitologia/registrar/873697", "controllermitologico@regcategoria");
Route::get("/mitologia/registrar/374585", "controllermitologico@regiones");
Route::get("/mitologia/registrar/374586", "controllermitologico@regregiones");
Route::get("/mitologia/registrar/834172", "controllermitologico@catalogo");
Route::get("/mitologia/registrar/834173", "controllermitologico@regcatalogo");
Route::get("/mitologia", "controllermitologico@inicio");
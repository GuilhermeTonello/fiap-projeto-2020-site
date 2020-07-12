<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index_guardian');
});

//Auth::routes();

Auth::routes(['register' => false]);

/*
Route::get('/register', 'HomeController@index');
Route::post('/register', 'HomeController@index');
*/
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix("wireframe-app-cliente")->group(function (){

  Route::get('Aguardar_resultado', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Aguardar_resultado.html'));
  });
  Route::get('Ajuda', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Ajuda.html'));
  });
  Route::get('Bem_vindo', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Bem_vindo.html'));
  });
  Route::get('Boleto', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Boleto.html'));
  });
  Route::get('Celular_Android__1', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Celular_Android__1.html'));
  });
  Route::get('Chat_Bot_menu', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Chat_Bot_menu.html'));
  });
  Route::get('Chatbot', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Chatbot.html'));
  });
  Route::get('Confirmado_sinistro', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Confirmado_sinistro.html'));
  });
  Route::get('Confirmando_sinistro', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Confirmando_sinistro.html'));
  });
  Route::get('Data', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Data.html'));
  });
  Route::get('Detalhamento_do_produtos', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Detalhamento_do_produtos.html'));
  });
  Route::get('Foto', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Foto.html'));
  });
  Route::get('Localiza_o_sinistro', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Localiza_o_sinistro.html'));
  });
  Route::get('Login__cadastro', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Login__cadastro.html'));
  });
  Route::get('Meu_servi_os_menu', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Meu_servi_os_menu.html'));
  });
  Route::get('Meus_seguros_Menus', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Meus_seguros_Menus.html'));
  });
  Route::get('Meus_seguros_normal', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Meus_seguros_normal.html'));
  });
  Route::get('Meus_servi_os', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Meus_servi_os.html'));
  });
  Route::get('Preenchimento_de_dados', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Preenchimento_de_dados.html'));
  });
  Route::get('Produtos', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Produtos.html'));
  });
  Route::get('Quest', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Quest.html'));
  });
  Route::get('Quest_com_janela', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Quest_com_janela.html'));
  });
  Route::get('Quest_com_janela_menu', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Quest_com_janela_menu.html'));
  });
  Route::get('Quest_menu', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Quest_menu.html'));
  });
  Route::get('Sela__o', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Sela__o.html'));
  });
  Route::get('Sinistro', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Sinistro.html'));
  });
  Route::get('Sinistro__2', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Sinistro.html'));
  });
  Route::get('Sinistro_menu', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Sinistro_menu.html'));
  });
  Route::get('Splash', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Splash.html'));
  });
  Route::get('Video_sinistro', function () {
      return include(base_path('resources/views/wireframe-app-cliente/Video_sinistro.html'));
  });
});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return env('APP_TIMEZONE');
});
$router->get('/sources/fetch',  ['as'=>'sources.fetch', 'uses'=>'SourceController@fetch']);
$router->get('/api-key', ['as'=>'api.key', 'uses'=>'ApiController@getKey']);

$router->get('/sources', ['as'=>'sources.index', 'uses'=>'SourceController@index']);
$router->get('/sources/content/{idOzae}',  ['as'=>'sources.content', 'uses'=>'SourceController@content']);
$router->get('/sources/getContentArticle/{url}',  ['as'=>'sources.getContentArticle', 'uses'=>'SourceController@getContentArticle']);
$router->get('/sources/{id}', ['as'=>'sources.show', 'uses'=>'SourceController@show']);

$router->get('/words', ['as'=>'words.index', 'uses'=>'WordController@index']);
$router->get('/words/fetch',  ['as'=>'words.fetch', 'uses'=>'WordController@fetch']);
$router->get('/words/{id}', ['as'=>'words.show', 'uses'=>'WordController@show']);


$router->get('/articles', ['as' => 'articles.index', 'uses'=>'ArticleController@index']);
$router->get('/articles/{id}', ['as' => 'articles.show', 'uses'=>'ArticleController@show']);
$router->get('/articles/word/{word_id}', ['as' => 'articles.fetchByWord', 'uses'=>'ArticleController@fetchByWord']);


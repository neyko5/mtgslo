<?php

Route::get('/',"HomeController@index");
Route::get('/novice',"HomeController@index");

Route::get('/lige',"LeagueController@index");
Route::get('/lige/{link}/{id}',"LeagueController@show");

Route::get('/turnirji',"TournamentController@index");
Route::get('/turnirji/koledar',"TournamentController@calendar");

Route::get('/turnirji/{link}/{id}',"TournamentController@show");

Route::get('/deckliste/{link}/{id}',"TournamentController@decklist");

Route::get('/clanki',"ArticleController@index");
Route::get('/clanki/{link}/{id}',"ArticleController@show");


Route::get('/trgovine',"HomeController@stores");

Route::get('/nagradne',"CompetitionController@index");
Route::get('/nagradne/{link}/{id}',"CompetitionController@show");


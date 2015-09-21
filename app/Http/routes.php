<?php

// -- frontend --
// homepage
get('/', [ 'as' => 'homepage', 'uses' => 'HomeController@index']);
// chi siamo
get('/chi-siamo', [ 'as' => 'chi-siamo', 'uses' => 'PagineController@chiSiamo']);
// privacy
get('/privacy', [ 'as' => 'privacy', 'uses' => 'PagineController@privacy']);
// contatti
get('/contatti', [ 'as' => 'contatti', 'uses' => 'ContattiController@getContatti']);
post('/contatti', [ 'as' => 'contatti', 'uses' => 'ContattiController@postContatti']);
// pubblica
get('/segnala', [ 'as' => 'segnala', 'uses' => 'SegnalaController@getSegnala']);
post('/segnala', [ 'as' => 'segnala', 'uses' => 'SegnalaController@postSegnala']);
// elenco annunci
get('/annunci/regione/{slug}', [ 'as' => 'annunciRegione', 'uses' => 'AnnunciController@indexByArea'])->where('slug', '[a-z-]+');
get('/annunci/taglia/{slug}', [ 'as' => 'annunciTaglia', 'uses' => 'AnnunciController@indexBySize'])->where('slug', '[a-z]+');
get('/annunci/taglia-regione/{slug}', [ 'as' => 'annunciTagliaRegione', 'uses' => 'AnnunciController@indexBySizeArea'])->where('slug', '[a-z-]+');
// scheda annuncio
get('/annunci/{slug}', [ 'as' => 'annuncio', 'uses' => 'AnnunciController@show'])->where('slug', '[a-z-]+');

// -- backend --
// le schede di backend devono essere protette dall'auth
// cms homepage


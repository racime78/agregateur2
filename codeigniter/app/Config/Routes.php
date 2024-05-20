<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Accueil::index'); // Route pour la page d'accueil

$routes->add('gestion-offre', 'Offres::index'); // Nouvelle route pour la gestion des offres

$route['offres/ajouter'] = 'offres/ajouter';

$route['offres/inserer'] = 'offres/inserer';



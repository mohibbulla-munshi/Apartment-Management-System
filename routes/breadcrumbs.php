<?php


// Home
// Breadcrumbs::for('/', function ($trail) {
//     $trail->push('Home', route('/'));
// });

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    
    $trail->push('Dashboard', route('dashboard'));
});

//Setting
Breadcrumbs::for('setting', function ($trail) {
    $trail->push('Apartment Setting', route('setting'));
});

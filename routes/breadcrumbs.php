<?php


// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Floors
Breadcrumbs::for('floors', function ($trail) {
    $trail->push('Floor List', url('floors'));
});

Breadcrumbs::for('addFloors', function ($trail) {
    $trail->push('Add New Floor', url('floors/create'));
});

// Floors
Breadcrumbs::for('units', function ($trail) {
    $trail->push('Unit List', url('units'));
});

Breadcrumbs::for('addunits', function ($trail) {
    $trail->push('Add New Unit', url('units/create'));
});

// Floors
Breadcrumbs::for('owners', function ($trail) {
    $trail->push('Unit List', url('owners'));
});

Breadcrumbs::for('addowners', function ($trail) {
    $trail->push('Add New Owner', url('owners/create'));
});

// Rents
Breadcrumbs::for('rent', function ($trail) {
    $trail->push('Rent List', url('rent'));
});

Breadcrumbs::for('addrent', function ($trail) {
    $trail->push('Add New Rent', url('rent/create'));
});

// Utility
Breadcrumbs::for('utility', function ($trail) {
    $trail->push('Utility List', url('utility'));
});

Breadcrumbs::for('addutility', function ($trail) {
    $trail->push('Add New utility', url('utility/create'));
});

// Maintenance
Breadcrumbs::for('maintenance', function ($trail) {
    $trail->push('Maintenance List', url('maintenance'));
});

Breadcrumbs::for('addMaintenance', function ($trail) {
    $trail->push('Add New Maintenance', url('maintenance/create'));
});

// Funds
Breadcrumbs::for('fund', function ($trail) {
    $trail->push('Fund List', url('fund'));
});

Breadcrumbs::for('addFund', function ($trail) {
    $trail->push('Add New Fund', url('fund/create'));
});

// Bills
Breadcrumbs::for('bill', function ($trail) {
    $trail->push('Bill List', url('bill'));
});

Breadcrumbs::for('addBill', function ($trail) {
    $trail->push('Add New Bill', url('bill/create'));
});



//Setting
Breadcrumbs::for('setting', function ($trail) {
    $trail->push('Apartment Setting', route('setting'));
});

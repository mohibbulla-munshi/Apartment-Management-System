<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

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

// Employees
Breadcrumbs::for('employees', function ($trail) {
    $trail->push('Employees List', url('employees'));
});

Breadcrumbs::for('addEmployees', function ($trail) {
    $trail->push('Add New Employees', url('employees/create'));
});

// Tenants
Breadcrumbs::for('tenants', function ($trail) {
    $trail->push('Tenants List', url('tenants'));
});

Breadcrumbs::for('addTenants', function ($trail) {
    $trail->push('Add New Tenants', url('tenants/create'));
});

// Committees
Breadcrumbs::for('committees', function ($trail) {
    $trail->push('Committee Member List', url('committees'));
});

Breadcrumbs::for('addCommitteeMember', function ($trail) {
    $trail->push('Add New Committee Member', url('committees/create'));
});

// Owners
Breadcrumbs::for('owners', function ($trail) {
    $trail->push('Committee Member List', url('owners'));
});

Breadcrumbs::for('addOwner', function ($trail) {
    $trail->push('Add New Owner', url('owners/create'));
});

// Owners
Breadcrumbs::for('complaints', function ($trail) {
    $trail->push('Complaint List', url('complaints'));
});

Breadcrumbs::for('addComplaint', function ($trail) {
    $trail->push('Add New Complaint', url('complaints/create'));
});







//Setting
Breadcrumbs::for('setting', function ($trail) {
    $trail->push('Apartment Setting', route('setting'));
});

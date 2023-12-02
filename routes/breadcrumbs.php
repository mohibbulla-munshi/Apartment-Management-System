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

// Owners
Breadcrumbs::for('meetings', function ($trail) {
    $trail->push('Meeting List', url('meeting'));
});

Breadcrumbs::for('addMeeting', function ($trail) {
    $trail->push('Add New Meeting', url('meeting/create'));
});

// Tenant Notice
Breadcrumbs::for('tenantNotice', function ($trail) {
    $trail->push('Tenant Notic List', url('notice/tenant'));
});

Breadcrumbs::for('addTenantNotice', function ($trail) {
    $trail->push('Add New Tenant Notice', url('notice/tenant/create'));
});

// Owner Notice
Breadcrumbs::for('ownerNotice', function ($trail) {
    $trail->push('Owner Notic List', url('notice/owner'));
});

Breadcrumbs::for('addOwnerNotice', function ($trail) {
    $trail->push('Add New Owner Notice', url('notice/owner/create'));
});

// Owner Notice
Breadcrumbs::for('employeeNotice', function ($trail) {
    $trail->push('Employee Notic List', url('notice/employee'));
});

Breadcrumbs::for('addEmployeeNotice', function ($trail) {
    $trail->push('Add New Employee Notice', url('notice/employee/create'));
});

// Employee Salary
Breadcrumbs::for('employeeSalary', function ($trail) {
    $trail->push('Employee Salary List', url('employee_salaries'));
});

Breadcrumbs::for('addEmployeeSalary', function ($trail) {
    $trail->push('Add New Employee Salary', url('employee_salaries/create'));
});

// Employee Salary
Breadcrumbs::for('employeeLeaveRequest', function ($trail) {
    $trail->push('Employee Leave Request List', url('employee_salaries'));
});

Breadcrumbs::for('addEmployeeLeaveRequest', function ($trail) {
    $trail->push('Add New Employee Salary', url('employee_salaries/create'));
});

// Admin Setup
Breadcrumbs::for('adminSetupList', function ($trail) {
    $trail->push('Admin List', url('settings/admin_setup'));
});

Breadcrumbs::for('AddAdminSetup', function ($trail) {
    $trail->push('Add New Admin', url('settings/admin_setup/create'));
});



//Building 
Breadcrumbs::for('building', function ($trail) {
    $trail->push('Building List', route('setting'));
});
Breadcrumbs::for('addBuilding', function ($trail) {
    $trail->push('Add Building', route('setting'));
});

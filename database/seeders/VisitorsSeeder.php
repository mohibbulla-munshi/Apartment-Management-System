<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fontdesk\Visitor;

class VisitorsSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate sample data and insert into the visitors table
        Visitor::factory()->count(10000)->create();
    }
}

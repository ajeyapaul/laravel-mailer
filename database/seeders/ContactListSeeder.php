<?php

namespace Database\Seeders;

use App\Models\ContactList;
use Illuminate\Database\Seeder;

class ContactListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactList::factory(10)->create();
    }
}

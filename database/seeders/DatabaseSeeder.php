<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Talk;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Speaker;
use App\Models\Conference;
use App\Models\Venue;
use Illuminate\Database\Seeder;
use Database\Factories\TalkFactory;
use Database\Factories\TicketFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
    }
}

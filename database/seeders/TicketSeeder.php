<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $ticket = new Ticket();
            $ticket->agency = $faker->randomElement(['Trenitalia', 'Italo']);
            $ticket->departure_station = $faker->randomElement(['Milano', 'Roma', 'Napoli', 'Venezia']);
            $ticket->arrival_station = $faker->randomElement(['Bari', 'Bergamo', 'Firenze', 'Ancona']);
            $ticket->departure_time = $faker->numberBetween(0, 24);
            $ticket->arrival_time = $faker->numberBetween(0, 24);
            $ticket->reference_number = $faker->bothify('??-######');
            $ticket->carriages = $faker->numberBetween(1, 20);
            $ticket->is_available = $faker->randomElement([true, false]);
            $ticket->is_deleted = $faker->randomElement([true, false]);
            $ticket->save();
        }
    }
}

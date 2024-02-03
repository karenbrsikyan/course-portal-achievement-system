<?php

namespace Database\Seeders;

use App\Models\Badge;
use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            0 => 'Beginner',
            4 => 'Intermediate',
            8 => 'Advanced',
            10 => 'Master',
        ])->each(fn($badge, $achievementsRequired) => Badge::factory()->create([
            'name' => $badge,
            'achievements_required' => $achievementsRequired,
        ]));
    }
}

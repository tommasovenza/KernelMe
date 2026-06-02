<?php

namespace Database\Seeders;

use App\Models\Entry;
use Illuminate\Database\Seeder;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            // first day
            [
                "date" => "2026-06-03",
                "time" => "09:08",
                "type" => "E",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-03",
                "time" => "13:30",
                "type" => "U",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-03",
                "time" => "13:51",
                "type" => "E",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-03",
                "time" => "18:11",
                "type" => "U",
                "notes" => "niente da segnalare"
            ],
            // second day
            [
                "date" => "2026-06-04",
                "time" => "09:00",
                "type" => "E",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-04",
                "time" => "13:30",
                "type" => "U",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-04",
                "time" => "14:30",
                "type" => "E",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-04",
                "time" => "18:00",
                "type" => "U",
                "notes" => "niente da segnalare"
            ],
            // third day
            [
                "date" => "2026-06-05",
                "time" => "09:05",
                "type" => "E",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-05",
                "time" => "13:25",
                "type" => "U",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-05",
                "time" => "14:11",
                "type" => "E",
                "notes" => "niente da segnalare"
            ],
            [
                "date" => "2026-06-05",
                "time" => "18:02",
                "type" => "U",
                "notes" => "niente da segnalare"
            ]
        ];
        // loop
        foreach ($data as $key => $value) {
            Entry::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = ['Front-End', 'Back-end', 'Full-stack'];

        foreach ($types as $typeName) {
            $type = new Type();
            $type->name = $typeName;
            $type->save();
        }
    }
}

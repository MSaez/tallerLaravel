<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = new Collection([
            'Laravel',
            'Android',
            'Django',
            'VueJS',
            'NodeJS',
            'React',
        ]);

        $channels->each(function ($value) {
            $channel = new \App\Channel();
            $channel->name = $value;
            $channel->slug = str_slug($value);
            $channel->save();
        });
    }
}

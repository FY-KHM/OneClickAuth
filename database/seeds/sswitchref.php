<?php

use Illuminate\Database\Seeder;
use App\switcher;

class sswitchref extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gitn = new switcher;
        $gitn->name = "Github";
        $gitn->type = "1";
        $gitn->save();

        $facn = new switcher;
        $facn->name = "Facebook";
        $facn->type = "1";
        $facn->save();

        $gn = new switcher;
        $gn->name = "Google";
        $gn->type = "1";
        $gn->save();

        $lin = new switcher;
        $lin->name = "Linkedin";
        $lin->type = "1";
        $lin->save();
    }
}

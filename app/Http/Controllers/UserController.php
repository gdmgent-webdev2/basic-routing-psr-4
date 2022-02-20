<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use Faker\Factory as Faker;

class UserController {

    private $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function index() {
        $users = User::all();
        dump($users);
        die();
        dump($this->faker->name);
    }
}
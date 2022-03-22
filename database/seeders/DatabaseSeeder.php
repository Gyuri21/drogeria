<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table( "perfumes")->insert(
            [
            "name" => "illatos",
            "type" => "női",
            "price" => 15],
            [
            "name" => "gucci",
            "type" => "női",
            "price" => 14],
            [
            "name" => "Nike",
            "type" => "férfi",
            "price" => 13],
            [
            "name" => "Keserű",
            "type" => "női",
            "price" => 12],
            [
            "name" => "Csábító",
            "type" => "női",
            "price" => 11],
            
            
        );
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Add Search Scout
use Laravel\Scout\Searchable;

class Person extends Model
{
    //
    use Searchable;

    //To Configure Algolia with laravel/scout
    //1-composer require laravel/scout
    //2-composer require algolia/algoliasearch-client-php
    //3-php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
    //To move all table data from mysql DB to Algolia
    //4-php artisan scout:import "App\Person"

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Explicitly define the table name
    protected $table = 'contacts';

    // Define fillable fields
    protected $fillable = ['name', 'email'];
}

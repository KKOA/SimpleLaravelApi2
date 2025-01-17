<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	use HasFactory;
	protected $table = 'products';
	protected $primaryKey = 'id';
	protected $fillable = ['image', 'title', 'price', 'description'];
	// public $timestamps = false;
	public $incrementing = false;
}

<?php

namespace App\Models\Intermediary;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
		//
		protected $primaryKey = 'id_resource';
		protected $guarded = [];

		const CREATED_AT = 'creation_date';
		const UPDATED_AT = 'last_update';
}

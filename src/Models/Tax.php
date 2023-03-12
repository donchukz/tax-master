<?php

namespace Pontian\TaxMaster\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static isActive()
 * @method static isInactive()
 * @method static find(mixed $selected_tax_id)
 * @method static where(string $string, string $string1)
 */
class Tax extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'taxes';

}

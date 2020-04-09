<?php namespace Akmal\DescOrder\Models;

use Model;

/**
 * Model
 */
class DescOrder extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_descorder_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

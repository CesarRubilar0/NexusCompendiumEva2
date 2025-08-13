<?php

namespace App\Models;

class Institute
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
    ];

    public $id;
    public $name;
    public $description;
    public $address;
    public $phone;
    public $email;
    public $created_at;
    public $updated_at;

    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
        
        if (!isset($this->created_at)) {
            $this->created_at = date('Y-m-d H:i:s');
        }
        if (!isset($this->updated_at)) {
            $this->updated_at = date('Y-m-d H:i:s');
        }
    }

    /**
     * Obtener usuarios del instituto
     */
    public function users()
    {
        // Relación con modelo Users
        return [];
    }

    /**
     * Obtener proyectos del instituto
     */
    public function projects()
    {
        // Relación con modelo Projects
        return [];
    }
}

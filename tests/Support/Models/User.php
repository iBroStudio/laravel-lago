<?php

namespace IBroStudio\Lago\Tests\Support\Models;

use IBroStudio\Lago\Models\Contracts\CustomerObjectDataEloquentSource;
use IBroStudio\Lago\Tests\Support\Database\Factory\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use MichaelRubel\ValueObjects\Collection\Complex\Email;
use MichaelRubel\ValueObjects\Collection\Complex\FullName;
use MichaelRubel\ValueObjects\Collection\Complex\Name;

class User extends Authenticatable implements CustomerObjectDataEloquentSource
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function getId(): string
    {
        return (string) $this->id;
    }

    public function getName(): FullName
    {
        return FullName::from($this->name);
    }

    public function getEmail(): Email
    {
        return Email::from($this->email);
    }

    protected static function newFactory()
    {
        return UserFactory::new();
    }
}

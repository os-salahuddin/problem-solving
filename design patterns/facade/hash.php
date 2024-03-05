<?php
class hash
{
    const algorithm = [
        'mdf' => mdf::class,
        'cha1' => sha1::class
    ];
    public static function make(string $value, string $algorithm):string
    {
        if(!array_key_exists($algorithm, self::algorithm)) {
           throw new exception('Error: algorithm not found');
        }

        return (new self::algorithm[$algorithm])->make($value);
    }
}
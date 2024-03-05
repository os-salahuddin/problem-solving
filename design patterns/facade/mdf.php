<?php
class mdf implements hasher
{
    public function make(string $value):string
    {
       return md5($value);
    }
}
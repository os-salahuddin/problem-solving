<?php
class sha1 implements hasher
{
    public function make(string $value):string
    {
       return sha1($value);
    }
}
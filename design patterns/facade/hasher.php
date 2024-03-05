<?php
interface hasher
{
    public function make(string $value):string;
}
<?php


namespace App\Contracts;


interface Pipe
{
    public function handle($content, \Closure $next);
}

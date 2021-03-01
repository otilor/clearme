<?php


namespace App\Pipelines;


class RetrieveUserDetails implements \App\Contracts\Pipe
{

    public function handle($content, \Closure $next)
    {
        dd($content);
    }
}

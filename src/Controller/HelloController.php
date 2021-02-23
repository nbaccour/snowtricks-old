<?php
/**
 * Created by PhpStorm.
 * User: msi-n
 * Date: 23/02/2021
 * Time: 00:42
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("hello/{prenom?Nizar}", name="hello")
     */
    public function Hello($prenom)
    {
        return new Response("Hello $prenom");
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tineo
 * Date: 29/01/18
 * Time: 02:22 AM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends Controller
{
    /**
     * @Route("/", name="search_page")
     */
    public function index()
    {
        $number = mt_rand(0, 100);

        return $this->render('search/index.html.twig', array('number' => $number));
    }
}
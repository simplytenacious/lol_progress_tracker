<?php
/**
 * Created by PhpStorm.
 * User: jmprell
 * Date: 16/11/17
 * Time: 18:24
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller {
    /**
     * @Route("/{page}")
     */
    public function showAction ($page = 'index') {
        $templating = $this->container->get('templating');
        $html = $templating->render('default/'.$page.'.html.twig',
                                    ['page' => $page]);

        return new Response($html);
    }
}
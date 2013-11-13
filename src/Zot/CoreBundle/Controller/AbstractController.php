<?php
namespace Zot\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbstractController extends Controller
{
    public function indexAction()
    {
        return 'teste';
    }
}
<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Guest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TestController extends Controller
{
    public function testoneAction(Request $request)
    {



        return new Response('<html><body>Test Page 1</body></html>');
    }
}
?>

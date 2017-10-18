<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Guest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GuestController extends Controller
{
    public function editAction(Request $request)
    {
        $guest = new Guest();
    	$form = $this->createFormBuilder($guest)
	    ->add('guestName', TextType::class, array('label' => 'GuestName:',
						'required' => 'false'))
	    ->add('phoneNumber1', TextType::class, array('label' => 'Phone1:',
						'required' => 'false'))
	    ->add('phoneNumber2', TextType::class, array('label' => 'Phone2:',
						'required' => 'false'))
	    ->add('save', SubmitType::class, array('label' => 'Create Post'))
	    ->getForm();

	$form->handleRequest($request);

	if ($form->isSubmitted() && $form->isValid()){
	    $guest = $form->getdata();

   	    $em = $this->getDoctrine()->getManager();

            $em->persist($guest);
            $em->flush();
            return new Response('<html><body>Save Edit</body></html>');

	}
	else{
	    return $this->render('default/guest_edit.html.twig', array(
	        'form' => $form->createView(),
	    ));
	}
    }
    
    public function createAction(Request $request)
    {
//    	$em = $this->getDoctrine()->getManager();

//        $guest = new Guest();
//        $guest->setGuestName('Tom');

//        $em->persist($guest);
//        $em->flush();
//	return new Response('<html><body>Save</body></html>');

	$repository = $this->getDoctrine()
		->getRepository(Guest::class);

	if (!$guest){
		throw $this->createNotFoundException(
			'No Product found for id '
		);
	}
	return new Response('<html><body>Save</body></html>');
    }
}
?>

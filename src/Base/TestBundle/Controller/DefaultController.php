<?php

namespace Base\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $id = 1;
        //$data = $em->getRepository('BaseTestBundle:Location')->find($id);
        $data = $em->getRepository('BaseTestBundle:Location')->getTest($id);
        $data2 = $em->getRepository('BaseTestBundle:Location')->getMethod($id);
        //$query = $em->createQuery('SELECT n FROM BaseTestBundle:Location n WHERE n.id ='.$id);
        //$metadata = $em->getMetadataFactory()->getAllMetadata();
        ladybug_dump($data->getResult());
        ladybug_dump($data2->getResult());
        return $this->render('BaseTestBundle:Default:index.html.twig', array('name' => $name));
    }
}

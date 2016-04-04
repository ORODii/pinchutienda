<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clientes;
use AppBundle\Entity\Departamentos;
use AppBundle\Entity\Productos;
use AppBundle\Form\ProductosType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em           = $this->getDoctrine()->getManager();
        $productosRep = $em->getRepository('AppBundle:Productos');

        $producto = new Productos();

        $form = $this->createForm(ProductosType::class, $producto);

        if ($request->getMethod() === 'POST') {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em->persist($producto);
                $em->flush();
            }
        }

        $productos = $productosRep->findAll();

        return $this->render(
            'default/index.html.twig',
            array('productos' => $productos, 'form' => $form->createView())
        );
    }
}

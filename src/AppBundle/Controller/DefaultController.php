<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clientes;
use AppBundle\Entity\Departamentos;
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
        $em = $this->getDoctrine()->getManager();

        $departamento = $em->getRepository('AppBundle:Departamentos')->findOneById(2);
        $usuario      = $em->getRepository('AppBundle:Clientes')->findOneByNombre('Andrés');

        $usuario->setDepartamentos($departamento);

        // $em->persist($usuario);
        $em->flush();
exit;
        // $departamento = new Departamentos();
        // $departamento->setNombre('Calidad');
        // $departamento->setDescripcion('');
        // $em->persist($departamento);
        // $em->flush();

        // echo $departamento->getId();

        $cliente = new Clientes();

        echo $departamento->getNombre();


        // Establecemos los datos a guardar o modificar
        $cliente->setNombre('Luis');
        $cliente->setApellidos('Cetz');
        $cliente->setEmail('luisitoEmoxito@gmail.com');
        $cliente->setTelefono('999999999');
        $cliente->setDepartamentos($departamento);

        // Deja en espera a la entidad
        $em->persist($cliente);

        // Guarda en la base de datos
        $em->flush();
        exit;
    }
}

<?php

// Path: src/OC/PlatformBundle/Controller/AdvertController.php

// Correspond au chemin du fichier controller
namespace OC\PlatformBundle\Controller;

// Le controller va utiliser (use) l'objet Response
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{

  // On définit la méthode d'index (Ps: toujours ajouter "Action")
  function indexAction()
  {
    // On utilise une variable qui hérite du controller
    $content = $this
      ->get('templating')
      ->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Winzou' ))
    ;

    // On crée un réponse contenant une variable
    return new Response($content);
  }

  function byeAction()
  {
    $content = $this
      ->get('templating')
      ->render('OCPlatformBundle:Advert:bye.html.twig',
        array('aurevoir' => 'Tchouuuus',
              'nom' => 'Weichuan'
        )
      );
    return new Response($content);
  }
}

?>

<?php

// Path: src/OC/PlatformBundle/Controller/AdvertController.php

// Correspond au chemin du fichier controller
namespace OC\PlatformBundle\Controller;

// Le controller va utiliser (use) l'objet Response
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
  // On donne à la methode l'argument $id
  // Qui va correspondre à {id} de la route (URL)
  function viewAction($id)
  {
    return new Response ("Affichage de l'annonce d'id : ".$id);
  }

  function viewSlugAction($slug, $year, $format)
  {
    return new Response ("On pourra afficher l'annonce correspondant au slug '".$slug."', créée en ".$year." et au format ".$format.".");
  }

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

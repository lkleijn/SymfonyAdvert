<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;

class AdvertController extends Controller {

    public function indexAction($page) {

        // On ne sait pas combien de pages il y a
        // Mais on sait qu'une page doit être supérieure ou égale à 1
        if ($page < 1) {
            // On déclenche une exception NotFoundHttpException, cela va afficher
            // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
            throw new NotFoundHttpException('Page "' . $page . '" inexistante.');
        }
        // Ici, on récupérera la liste des annonces, puis on la passera au template
        // Mais pour l'instant, on ne fait qu'appeler le template
        return $this->render('OCPlatformBundle:Advert:index.html.twig', array('listAdverts' => array()));
    }

    public function viewAction($id) {
        // On récupère le repository
        $repository = $this->getDoctrine()->getRepository('OC\PlatformBundle\Entity\Advert');


        // On récupère l'entité correspondante à l'id $id

        $advert = $repository->find($id);


        // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
        // ou null si l'id $id  n'existe pas, d'où ce if :

        if (null === $advert) {

            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

// On récupère la liste des candidatures de cette annonce

        $listApplications = $em
                ->getRepository('OCPlatformBundle:Application')
                ->findBy(array('advert' => $advert))

        ;


        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
                    'advert' => $advert,
                    'listApplications' => $listApplications
        ));
    }

    public function addAction(Request $request) {
// Création de l'entité
        $advert = new Advert();
        $advert->setTitle('Recherche développeur Symfony2.');
        $advert->setAuthor('Alexandre');
        $advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…");
        // On peut ne pas définir ni la date ni la publication,
// car ces attributs sont définis automatiquement dans le constructeur
        // Création de l'entité Image
        // Création d'une première candidature

        $application1 = new Application();
        $application1->setAuthor('Marine');
        $application1->setContent("J'ai toutes les qualités requises.");

        // Création d'une deuxième candidature par exemple

        $application2 = new Application();
        $application2->setAuthor('Pierre');
        $application2->setContent("Je suis très motivé.");

        // On lie les candidatures à l'annonce

        $application1->setAdvert($advert);
        $application2->setAdvert($advert);

        $image = new Image();
        $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
        $image->setAlt('Job de rêve');

        // On lie l'image à l'annonce
        $advert->setImage($image);
        // On récupère l'EntityManager

        $em = $this->getDoctrine()->getManager();
// Étape 1 : On « persiste » l'entité
        $em->persist($advert);
        $em->persist($application1);
        $em->persist($application2);
// Étape 2 : On « flush » tout ce qui a été persisté avant
        $em->flush();

        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) {
            // Ici, on s'occupera de la création et de la gestion du formulaire

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            // Puis on redirige vers la page de visualisation de cettte annonce
            return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
        }

        // On récupère le service
        $antispam = $this->container->get('oc_platform.antispam');

        // Je pars du principe que $text contient le texte d'un message quelconque
        if ($antispam->isSpam($advert->getContent())) {
            throw new \Exception('Votre message a été détecté comme spam !');
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    public function editAction($id, Request $request) {
        // Ici, on récupérera l'annonce correspondante à $id
        // Même mécanisme que pour l'ajout

        $em = $this->getDoctrine()->getManager();


        // On récupère l'annonce

        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        if (null === $advert) {

            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

        // La méthode findAll retourne toutes les catégories de la base de données

        $listCategories = $em->getRepository('OCPlatformBundle:Category')->findAll();


        // On boucle sur les catégories pour les lier à l'annonce

        foreach ($listCategories as $category) {

            $advert->addCategory($category);
        }


        // On n'a pas besoin de persister l'annonce ni l'image.
        // Rappelez-vous, ces entités sont automatiquement persistées car
        // on les a récupérées depuis Doctrine lui-même
        // On déclenche la modification



        $em->flush();

        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }

        return $this->render('OCPlatformBundle:Advert:edit.html.twig', array('advert' => $advert));
    }

    public function deleteAction($id) {
        // Ici, on récupérera l'annonce correspondant à $id
        // Ici, on gérera la suppression de l'annonce en question

        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }

    public function menuAction() {

        // On fixe en dur une liste ici, bien entendu par la suite
        // on la récupérera depuis la BDD !

        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );


        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
                    // Tout l'intérêt est ici : le contrôleur passe
                    // les variables nécessaires au template !

                    'listAdverts' => $listAdverts
        ));
    }

}

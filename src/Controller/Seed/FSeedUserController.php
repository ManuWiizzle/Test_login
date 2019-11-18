<?php

namespace App\Controller\Seed;

use App\Entity\Seed\FSeedUser;
use App\Form\Seed\FSeedUserType;
use App\Repository\Seed\FSeedUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/seed/f/seed/user")
 */
class FSeedUserController extends AbstractController
{
    /**
     * @Route("/", name="seed_f_seed_user_index", methods={"GET"})
     */
    public function index(FSeedUserRepository $fSeedUserRepository): Response
    {
        return $this->render('seed/f_seed_user/index.html.twig', [
            'f_seed_users' => $fSeedUserRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="seed_f_seed_user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fSeedUser = new FSeedUser();
        $form = $this->createForm(FSeedUserType::class, $fSeedUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fSeedUser);
            $entityManager->flush();

            return $this->redirectToRoute('seed_f_seed_user_index');
        }

        return $this->render('seed/f_seed_user/new.html.twig', [
            'f_seed_user' => $fSeedUser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idUser}", name="seed_f_seed_user_show", methods={"GET"})
     */
    public function show(FSeedUser $fSeedUser): Response
    {
        return $this->render('seed/f_seed_user/show.html.twig', [
            'f_seed_user' => $fSeedUser,
        ]);
    }

    /**
     * @Route("/{idUser}/edit", name="seed_f_seed_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FSeedUser $fSeedUser): Response
    {
        $form = $this->createForm(FSeedUserType::class, $fSeedUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('seed_f_seed_user_index');
        }

        return $this->render('seed/f_seed_user/edit.html.twig', [
            'f_seed_user' => $fSeedUser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idUser}", name="seed_f_seed_user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FSeedUser $fSeedUser): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fSeedUser->getIdUser(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fSeedUser);
            $entityManager->flush();
        }

        return $this->redirectToRoute('seed_f_seed_user_index');
    }
}

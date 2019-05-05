<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AuthController
 * @package AppBundle\Controller
 * @Route("/")
 */
class AuthController extends BaseController
{
    /**
     * @Route(
     *     "register",
     *      name="register-action",
     *     methods={"POST"}
     * )
     * @param Request $request
     * @return JsonResponse
     */
    public function registerAction(Request $request): JsonResponse
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user = $form->getData();

            $token = $this->generateToken();
            /** @var User $user */
            $user->setToken($token);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new JsonResponse($this->getSerializer()->normalize($user));
        }

        return new JsonResponse(['errorMessage' => 'Вы ввели некоректные данные'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * @param Request $request
     * @Route(
     *     "login",
     *     name="login-action",
     *     methods={"POST"}
     * )
     * @return JsonResponse
     */
    public function loginAction(Request $request): JsonResponse
    {
        $response = [
            'user' => '',
            'errorMessage' => ''
        ];

        /** @var User $user */
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(
            [
                'email' => $request->get('email')
            ]
        );

//        dump($this->getSerializer()->normalize($user));
//        exit();

        if (!$user) {
            $response['errorMessage'] = 'Неверный логин или пароль';
            return new JsonResponse($response, Response::HTTP_BAD_REQUEST);
        }

        $userSpecial = null;
        $fullName = null;

        if ($user->getUserSpecial()) {
            $userSpecial = $user->getUserSpecial()->getSpecial()->getId();
        }

        if ($user->getUserBaseInfo()) {
            $fullName = $user->getUserBaseInfo()->getFirstName() . " " . $user->getUserBaseInfo()->getLastName() . " " . $user->getUserBaseInfo()->getThirdName();
        }

        $resultUser = [
          'id' => $user->getId(),
          'name' => $user->getName(),
            'token' => $user->getToken(),
            'special_id' => $userSpecial,
            'fullName' => $fullName
        ];

        if ($user->getPassword() == $request->get('password')) {
            $response['user'] = $resultUser;
            return new JsonResponse($response);
        }

        $response['errorMessage'] = 'Неверный логин или пароль';
        return new JsonResponse($response, Response::HTTP_BAD_REQUEST);
    }

    private function generateToken(): string
    {
        return bin2hex(random_bytes(64));

    }
}

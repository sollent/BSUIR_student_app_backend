<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Special;
use AppBundle\Entity\User;
use AppBundle\Entity\UserAddress;
use AppBundle\Entity\UserBaseInfo;
use AppBundle\Entity\UserDocuments;
use AppBundle\Entity\UserEducation;
use AppBundle\Entity\UserPhone;
use AppBundle\Entity\UserSpecial;
use AppBundle\Repository\AccountRepository;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AccountController
 * @package AppBundle\Controller
 */
class AccountController extends BaseController
{
    /**
     * @var AccountRepository
     */
    private $accountRepository;

    /**
     * AccountController constructor.
     * @param AccountRepository $accountRepository
     */
    public function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route(
     *     "/user-by-token",
     *     name="get-user-by-token-action",
     *     methods={"GET"}
     * )
     */
    public function getUserByToken(Request $request): JsonResponse
    {
        $response = [
            'user' => '',
            'errorMessage' => ''
        ];

        $user = $this
            ->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(
                [
                    'token' => $request->get('token')
                ]
            );

        $response['user'] = $this->getSerializer()->normalize($user);
        return new JsonResponse($response);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route(
     *     "/save-user",
     *     name="save-user-action",
     *     methods={"POST", "GET"}
     * )
     */
    public function saveUserInfo(Request $request): JsonResponse
    {
        $token = $request->headers->get('Authorization');

        $user = $this
            ->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(
                [
                    'token' => $token
                ]
            );

        try {
            $userBaseInfo = new UserBaseInfo();
            $userBaseInfo
                ->setFirstName($request->get('firstName'))
                ->setLastName($request->get('lastName'))
                ->setThirdName($request->get('thirdName'))
                ->setBirthDay(new \DateTime($request->get('birthDay')))
                ->setIsMan($request->get('isMan'))
                ->setIsWomen($request->get('isWomen'))
                ->setProtectionInfo($request->get('protectionInfo'))
                ->setAverageMark($request->get('averageMark'))
                ->setIsFreePosition($request->get('isFreePosition'))
                ->setIsNotFreePosition($request->get('isNotFreePosition'))
            ;

            $userDocuments = new UserDocuments();
            $userDocuments
                ->setDocumentType($request->get('documentType'))
                ->setDocumentIdNumber($request->get('documentIdNumber'))
                ->setDocumentSeries($request->get('documentSeries'))
                ->setDocumentNumber($request->get('documentNumber'))
                ->setDocumentDate(new \DateTime($request->get('documentDate')))
                ->setDocumentWhoGot($request->get('documentWhoGot'))
            ;

            $userEducation = new UserEducation();
            $userEducation
                ->setPlaceEducation($request->get('placeEducation'))
                ->setEducationDocumentType($request->get('educationDocumentType'))
                ->setSchoolNumber($request->get('schoolNumber'))
                ->setDocumentNumber($request->get('documentSchoolNumber'))
                ->setDateOfEndEducation(new \DateTime($request->get('dateOfEndEducation')))
            ;

            $userAddress = new UserAddress();
            $userAddress
                ->setIndex($request->get('index'))
                ->setCountry($request->get('country'))
                ->setArea($request->get('area'))
                ->setRaion($request->get('raion'))
                ->setTypeOfPoint($request->get('typeOfPoint'))
                ->setNameOfPoint($request->get('nameOfPoint'))
                ->setStreetType($request->get('streetType'))
                ->setStreetName($request->get('streetName'))
                ->setHouseNumber($request->get('houseNumber'))
                ->setHousePartNumber($request->get('housePartNumber'))
                ->setApartmentNumber($request->get('apartmentNumber'))
                ->setWantHaveHome($request->get('wantHaveHome'))
            ;

            $userPhone = new UserPhone();
            $userPhone
                ->setCountryCode($request->get('countryCode'))
                ->setHomePhone($request->get('homePhone'))
                ->setMobilePhone($request->get('mobilePhone'))
            ;

            $userSpecial = new UserSpecial();
            $userSpecial
                ->setDepartmentName($request->get('departmentName'))
                ->setSpecial(
                    $this->getDoctrine()->getRepository(Special::class)->find($request->get('special_id'))
                )
            ;

            $em = $this->getDoctrine()->getManager();

            $em->persist($userBaseInfo);
            $em->persist($userDocuments);
            $em->persist($userEducation);
            $em->persist($userAddress);
            $em->persist($userPhone);
            $em->persist($userSpecial);

            /** @var User $user */
            $user
                ->setUserBaseInfo($userBaseInfo)
                ->setUserDocuments($userDocuments)
                ->setUserEducation($userEducation)
                ->setUserAddress($userAddress)
                ->setUserPhone($userPhone)
                ->setUserSpecial($userSpecial)
                ->setAccountComplete(true)
            ;
        } catch (FatalThrowableError $exception) {
            return new JsonResponse(['errorMessage' => 'Error'], Response::HTTP_BAD_REQUEST);
        }


        $em->persist($user);
        $em->flush();

        return new JsonResponse(['successMessage' => 'User has been success saved']);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route(
     *     "/get-full-user",
     *     name="get-full-user-info-action",
     *     methods={"GET"}
     * )
     */
    public function getFullUserInfo(Request $request): JsonResponse
    {
        $token = $request->headers->get('Authorization');

        $user = $this
            ->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(
                [
                    'token' => $token
                ]
            );

        return new JsonResponse($this->getSerializer()->normalize($user));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route(
     *     "/get-users-by-average-mark",
     *     name="get-users-by-average-mark-action",
     *     methods={"GET"}
     * )
     */
    public function getUsersByAverageMarkAndSpecial(Request $request): JsonResponse
    {
        $token = $request->headers->get('Authorization');

        if (!$token) {
            return new JsonResponse(['errorMessage' => 'Access denied'], Response::HTTP_UNAUTHORIZED);
        }

        $resultUsers = [];

        $users = $this->accountRepository->getUsersOrderByMarks($request->get('special_id'));

        foreach ($users as $user) {
            /** @var User $user */
            $userInfo = $user->getUserBaseInfo();
            array_push($resultUsers, [
                'id' => $user->getId(),
               'name' => $user->getName(),
               'firstName' => $userInfo->getFirstName(),
               'lastName' => $userInfo->getLastName(),
                'thirdName' => $userInfo->getThirdName(),
                'averageMark' => $userInfo->getAverageMark(),
                'specialName' => $user->getUserSpecial()->getSpecial()->getName()
            ]);
        }

        return new JsonResponse($resultUsers);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route(
     *     "/is-fully-user"
     * )
     */
    public function isFullyUser(Request $request): JsonResponse
    {
        $token = $request->headers->get('Authorization');

        $user = $this
            ->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(
                [
                    'token' => $token
                ]
            );

        if ($user->getUserBaseInfo()) {
            return new JsonResponse(['successMessage' => 'Success']);
        }

        return new JsonResponse(['errorMessage' => 'Error'], Response::HTTP_UNAUTHORIZED);
    }
}
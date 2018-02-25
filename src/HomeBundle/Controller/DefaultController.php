<?php

namespace HomeBundle\Controller;

use HomeBundle\Entity\Formulaire;
use HomeBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DateTime;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */

    public function indexAction()
    {

        return $this->render('HomeBundle:Default:index.html.twig');

    }

    public function loginAction()
    {
        return $this->render('HomeBundle:Default:login.html.twig');
    }

    public function registerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() === 'POST') {
            $user = $em->getRepository('HomeBundle:User')->findOneBy(array('pseudo'=> $request->get('pseudo')));
            if($user == null){
                $newUser = new User();
                $newUser->setPseudo($request->get('pseudo'));
                $newUser->setDateRegister(new DateTime(date('Y-m-d')));
                $em->persist($newUser);
                $em->flush();
                return $this->render('HomeBundle:Default:formulaire.html.twig',array(
                    'user'=>$newUser,
                ));
            }
            else if($user != null){

                $user->setDateLastLogin(new DateTime(date('Y-m-d')));
                $em->persist($user);
                $em->flush();
                return $this->render('HomeBundle:Default:formulaire.html.twig',array(
                    'user'=>$user,
                ));
            }

        }
        else{
            return $this->render('HomeBundle:Default:error.html.twig', array(
                'message'=>'Merci de saisir un pseudo valide',
            ));
        }
    }

    public function traitementFormulaireAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() === 'POST') {

            $user = $em->getRepository('HomeBundle:User')->findOneBy(array('pseudo'=> $request->get('user')));

            $form = new Formulaire();
            $form->setUser($user);
            $form->setInr($request->get('inr'));
            $form->setTemperature($request->get('temperature'));
            $form->setPoids($request->get('poids'));
            $form->setPam($request->get('pam'));
            $form->setPasyst($request->get('pasyst'));
            $form->setPadiast($request->get('padiast'));

            $form->setTroubleVision($request->get('trouble-vision'));
            $form->setSangUrines($request->get('sang-urines'));
            $form->setSangSelles($request->get('sang-selles'));
            $form->setSellesNoires($request->get('selles-noires'));
            $form->setEssoufflement($request->get('essoufflement'));

            $form->setDrvLnRouge($request->get('drv-ln-rouge'));
            $form->setDrvLnDouloureux($request->get('drv-ln-douloureux'));
            $form->setDrvLnEcoulement($request->get('drv-ln-ecoulement'));

            $form->setVadFlow($request->get('vad-flow'));
            $form->setVadPower($request->get('vad-power'));
            $form->setVadAlarmesRecentes($request->get('vad-alarmes-recentes'));

            $form->setGpuAccepted($request->get('gpu-accepted'));


            $em->persist($form);
            $em->flush();

            // MAIL

            $message = \Swift_Message::newInstance()
                ->setSubject('GLAD VAD REPORT : '.$user->getPseudo() . ' // COULEUR')
                ->setFrom('example@gmail.com')
                ->setTo('mikael.descoins@ynov.com')
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'HomeBundle:Default:mail.html.twig',array(
                        'form'=>$form, 'user'=>$user)
                    ),
                    'text/html'
                );


            # Send the message
            $this->get('mailer')
                ->send($message);



            // RETURN

            return $this->render('HomeBundle:Default:validation.html.twig',array(
                'formulaire'=>$form,
            ));

        }
        else{
            return $this->render('HomeBundle:Default:error.html.twig', array(
                'message'=>'Une erreur est survenue lors du traitement de votre formulaire, merci de réessayer.',
            ));
        }
    }
}

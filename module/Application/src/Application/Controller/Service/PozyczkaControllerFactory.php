<?php
/**
 * Date: 31.07.15
 * Time: 17:53
 *
 * @author Mariusz Filipkowski
 */
namespace Application\Controller\Service;


use Application\Controller\PozyczkaController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class PozyczkaControllerFactory
 *
 * @package Application\Controller\Serivce
 */
class PozyczkaControllerFactory implements FactoryInterface{


    /**
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return PozyczkaController
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $services = $serviceLocator->getServiceLocator();
        try{
            $em = $services->get('doctrine.entitymanager.orm_default');
            var_dump($em);
            echo 'asd';
            var_dump($em->getRepository('Pozyczka\Model\Pozyczka'));
            var_dump($services->get('pozyczka_repository'));
            echo 'asd';
        }catch (\Exception $e){
            var_dump($e->getMessage());
        }
        return new PozyczkaController($services->get('pozyczka_repository'));
    }
}
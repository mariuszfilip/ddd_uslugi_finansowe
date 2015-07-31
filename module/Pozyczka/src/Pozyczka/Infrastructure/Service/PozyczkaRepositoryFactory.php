<?php
/**
 * Date: 31.07.15
 * Time: 15:40
 *
 * @author Mariusz Filipkowski
 */
namespace Pozyczka\Infrastructure\Serivce;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Pozyczka\Model\PozyczkaRepository;

class PozyczkaRepositoryFactory implements FactoryInterface{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return PozyczkaRepository
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $em = $serviceLocator->get('doctrine.entitymanager.orm_default');
        return $em->getRepository('Pozyczka\Model\Pozyczka');
    }

}
<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Pozyczka\Model\PozyczkaRepository;

class PozyczkaController extends AbstractActionController
{
    private $repository;

    public function __construct(PozyczkaRepository $repository){
        $this->repository = $repository;
    }

    public function indexAction()
    {
        echo 'oki';
        return new ViewModel();
    }
}

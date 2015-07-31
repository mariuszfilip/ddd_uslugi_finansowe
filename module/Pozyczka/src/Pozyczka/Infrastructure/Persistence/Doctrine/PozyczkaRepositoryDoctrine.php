<?php
/*
 * This file is part of the codeliner/php-ddd-cargo-sample package.
 * (c) Alexander Miertsch <kontakt@codeliner.ws>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Pozyczka\Infrastructure\Persistence\Doctrine;

use Pozyczka\Model\PozyczkaRepositoryInterface;
use Doctrine\ORM\EntityRepository;
class PozyczkaRepositoryDoctrine extends EntityRepository implements PozyczkaRepository
{

    public function get($idPozyczki)
    {
        return $this->find($idPozyczki);
    }
}

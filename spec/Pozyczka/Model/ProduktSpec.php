<?php
/**
 * Date: 31.07.15
 * Time: 14:43
 *
 * @author Mariusz Filipkowski
 */

namespace spec\Pozyczka\Model;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
class ProduktSpec extends ObjectBehavior{

        function it_is_initizable(){
            $idProduktu = 1;
            $idGrupyProduktu = 4;
            $idCennika = 1;
            $this->beConstructedWith($idProduktu,$idGrupyProduktu,$idCennika);
            $this->shouldHaveType('Pozyczka\Model\Produkt');
        }

}
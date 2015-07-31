<?php
/**
 * Date: 31.07.15
 * Time: 11:52
 *
 * @author Mariusz Filipkowski
 */



namespace spec\Pozyczka\Model;
use PhpSpec\ObjectBehavior;

use Pozyczka\Model\Produkt;
use Prophecy\Argument;
class PozyczkaSpec extends ObjectBehavior{

    function it_is_initializable()
    {
        $this->shouldHaveType('Pozyczka\Model\Pozyczka');
    }

    function let(Produkt $produkt)
    {

        $idPozyczki = 1;
        $idKlienta = 1;
        $dDataWymagalnosci = '2015-12-12';
        $iNumerOkresu = 1;


        $this->beConstructedWith($idPozyczki,$idKlienta,$iNumerOkresu,$dDataWymagalnosci,$produkt);
        $this->shouldHaveType('Pozyczka\Model\Pozyczka');
        $this->beAnInstanceOf('Pozyczka\Model\Pozyczka');
    }

    function it_is_czy_dpd_jest_prawidlowe(){
        $this->pobierzDpd()->shouldReturn(1);
    }

    function it_is_czy_pozyczka_splacona(){
        $this->czyPozyczkaSplacona()->shouldReturn(false);
    }
    function it_is_czy_pozyczka_odstapiona(){
        $this->czyPozyczkaOdstapiona()->shouldReturn(false);
    }


}

<?php

namespace Pozyczka\Model;

use Pozyczka\Model\Produkt;

/**
 * Class Pozyczka
 *
 * @package Pozyczka\Model
 */
class Pozyczka
{

    /**
     * @var int
     */
    private $_id_pozyczki;

    /**
     * @var int
     */
    private $_id_klienta;

    /**
     * @var int
     */
    private $_numer_okresu;

    /**
     * @var string
     */
    private $_data_wymagalnosci;

    /**
     * @var Pozyczka/Model/Produkt
     */
    private $_produkt;

    //Todo moze zamiast tylu parametrow da sie np array przekazac czy tak moze byc?

    /**
     * @param                         $idPozyczki
     * @param                         $idKlienta
     * @param                         $iNumerOkresu
     * @param                         $dDataWymagalnosci
     * @param \Pozyczka\Model\Produkt $produkt
     */
    public function __construct($idPozyczki, $idKlienta, $iNumerOkresu, $dDataWymagalnosci, Produkt $produkt)
    {
        $this->_id_pozyczki = $idPozyczki;
        $this->_id_klienta = $idKlienta;
        $this->_numer_okresu = $iNumerOkresu;
        $this->_data_wymagalnosci = $dDataWymagalnosci;
        $this->_produkt = $produkt;
    }

    /**
     * @return int
     */
    public function pobierzIdPozyczki()
    {
        return $this->_id_pozyczki;
    }

    /**
     * @return int
     */
    public function pobierzIdKlienta()
    {
        return $this->_id_klienta;
    }

    /**
     * @return int
     */
    public function pobierzNumerOkresu()
    {
        return $this->_numer_okresu;
    }

    /**
     * @return string
     */
    public function pobierzDataWymagalnosci()
    {
        return $this->_data_wymagalnosci;
    }

    /**
     * @return Pozyczka
     */
    public function pobierzProdukt()
    {
        return $this->_produkt;
    }

    /**
     * @return int
     */
    public function pobierzDpd()
    {
        return 1;
    }


    public function czyPozyczkaSplacona()
    {
        // TODO: write logic here
    }

    public function czyPozyczkaOdstapiona()
    {
        // TODO: write logic here
    }
}

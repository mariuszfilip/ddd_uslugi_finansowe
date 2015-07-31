<?php
/**
 * Date: 31.07.15
 * Time: 15:23
 *
 * @author Mariusz Filipkowski
 */

namespace spec\Pozyczka\Model;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
class StatusSpec extends ObjectBehavior
{

    function it_is_initizable(){
        $idStatus = 1;

        $this->beConstructedWith($idStatus);
        $this->shouldHaveType('Pozyczka/Model/Status');
    }

}
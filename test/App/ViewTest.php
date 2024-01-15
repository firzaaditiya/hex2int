<?php

namespace Z44\Hex2int;

use PHPUnit\Framework\TestCase;
use Z44\Hex2int\App\View;

require_once __DIR__ . "/../Helper/Helper.php";

class ViewTest extends TestCase
{
    /**
     * @test
     */
    public function render() : void
    {
        View::render(view: "Home/index", model: array(
            "title" => "Hex to Interger 32 Bit"
        ));

        $this->expectOutputRegex("[Hex to Interger 32 Bit]");
        $this->expectOutputRegex("[You can convert the hexadecimal code to integer 32, with different results converted]");
        $this->expectOutputRegex("[Big Endian]");
        $this->expectOutputRegex("[Little Endian]");
        $this->expectOutputRegex("[Mid Big Endian]");
        $this->expectOutputRegex("[Mid Little Endian]");
    }

    /**
     * @test
     */
    public function redirect() : void
    {
        View::redirect(url: "/");

        $this->expectOutputRegex("[Location: /]");
    }
}
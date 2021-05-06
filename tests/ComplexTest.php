<?php

use Main\Complex;

class ComplexTest extends \PHPUnit\Framework\TestCase
{
    public function testCreate()
    {
        $real = 1.0;
        $imaginary = 2;
        $complex = new Complex($real, $imaginary);

        self::assertEquals($real, $complex->getRealPart());
        self::assertEquals($imaginary, $complex->getImaginaryPart());
    }

    public function testPlus()
    {
        $complex1 = new Complex(2, -6);
        $complex2 = new Complex(-3, 4);

        $resultComplex = $complex1->plus($complex2);

        self::assertEquals(-1, $resultComplex->getRealPart());
        self::assertEquals(-2, $resultComplex->getImaginaryPart());
    }

    public function testMinus()
    {
        $complex1 = new Complex(5, -6);
        $complex2 = new Complex(-3, 2);

        $resultComplex = $complex1->minus($complex2);

        self::assertEquals(8, $resultComplex->getRealPart());
        self::assertEquals(-8, $resultComplex->getImaginaryPart());
    }

    public function testMultiply()
    {
        $complex1 = new Complex(2, 3);
        $complex2 = new Complex(-1, 1);

        $resultComplex = $complex1->multiply($complex2);

        self::assertEquals(-5, $resultComplex->getRealPart());
        self::assertEquals(-1, $resultComplex->getImaginaryPart());
    }

    public function testDivides()
    {
        $complex1 = new Complex(-2, 1);
        $complex2 = new Complex(1, -1);

        $resultComplex = $complex1->divides($complex2);

        self::assertEquals(-3 / 2, $resultComplex->getRealPart());
        self::assertEquals(-1 / 2, $resultComplex->getImaginaryPart());
    }
}
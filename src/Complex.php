<?php

namespace Main;

class Complex
{
    private float $realPart;
    private float $imaginaryPart;

    public function __construct(float $realPart, float $imaginaryPart)
    {
        $this->realPart = $realPart;
        $this->imaginaryPart = $imaginaryPart;
    }

    public function plus(Complex $complex): Complex
    {
        $newReal = $this->realPart + $complex->getRealPart();
        $newImag = $this->imaginaryPart + $complex->getImaginaryPart();

        return new self($newReal, $newImag);
    }

    public function minus(Complex $complex): Complex
    {
        $newReal = $this->realPart - $complex->getRealPart();
        $newImag = $this->imaginaryPart - $complex->getImaginaryPart();

        return new self($newReal, $newImag);
    }

    public function multiply(Complex $complex): Complex
    {
        $newReal = $this->realPart * $complex->getRealPart() - $this->imaginaryPart * $complex->getImaginaryPart();
        $newImag = $this->realPart * $complex->getImaginaryPart() + $this->imaginaryPart * $complex->getRealPart();

        return new self($newReal, $newImag);
    }

    public function divides(Complex $complex): Complex
    {
        $divider = ($complex->getRealPart() ** 2) + ($complex->getImaginaryPart() ** 2);

        $newReal = ($this->realPart * $complex->getRealPart() + $this->imaginaryPart * $complex->getImaginaryPart())
            / $divider;
        $newImag = ($complex->getRealPart() * $this->imaginaryPart - $this->realPart * $complex->getImaginaryPart())
            / $divider;

        return new self($newReal, $newImag);
    }

    public function getRealPart(): float
    {
        return $this->realPart;
    }

    public function getImaginaryPart(): float
    {
        return $this->imaginaryPart;
    }
}
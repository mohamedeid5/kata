<?php


namespace App;


class PrimeFactors
{

    public function generate($number)
    {
        $factors = [];

        // first step is divide number by smallest prime number (2)

        for ($divisor = 2;$number > 1;$divisor++) {

            for (;$number % $divisor === 0;$number /= $divisor) {

                $factors[] = $divisor;

            }

        }

        return $factors;
    }
}
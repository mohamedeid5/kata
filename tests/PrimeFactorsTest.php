<?php


use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     *
     * @test
     *
     * @dataProvider factors
     * @param $number
     * @param $expected
     */

    public function it_generates_prime_factors_for_1($number, $expected)
    {
        $factors = new PrimeFactors();

        $this->assertEquals($expected, $factors->generate($number));
    }


    /**
     * @return array[]
     */
    public function factors(): array
    {
        return [

          [1, []],
          [2, [2]],
          [3, [3]],
          [4, [2, 2]],
          [5, [5]],

        ];
    }


}

<?php
class checkForNumberFour
{
    function countDigit4In($number) {
        $counter = 0;
        for($i = 0; $i <= $number; $i++) {
            $counter = $this->countDigitFour(str_split($i), $counter);
        }
        return $counter;
    }

    /**
     * @param $splitNumber
     * @param $number
     * @return mixed
     */
    public function countDigitFour(array $splitNumber, $number)
    {
        foreach ($splitNumber as $seperatedNumber) {
            if ($seperatedNumber == 4) {
                $number++;
                break;
            }
        }
        return $number;
    }
}
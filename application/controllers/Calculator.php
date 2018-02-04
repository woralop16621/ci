<?php
class Calculator extends Ci_Controller
{
    public function Plus($num1, $num2)
    {
        $sum=$num1+$num2;
        echo "Total : " . $sum;
    }
}

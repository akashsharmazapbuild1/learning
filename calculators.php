<?php
$num1,$num2;
class Calculators{
public function_Add(){
           $Add = $num1 + $num2;
           echo "the sum of two number is" .$Add <br>;
       }
public function_Substract(){
           $Substract = $num1 - $num2;
            echo "the substraction of two number is " .$Subtract <br>;
        }
public function_Multiply(){
            $Multiply= $num1 * $num2;
             echo "the multiply of two number is".$Multiply <br>;
         }
public function_Divide(){ 
            $Divide = $num1 /$num2;
             echo "the Divide of two number is ".$Divide <br>;
    }
}
$obj=new Calculators();
$obj->Add("5","10");
$obj->Substract("10","5");
$obj->Multiply("5","10");
$obj->Divide("10","5");
?>

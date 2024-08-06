<?php

class Conversor{

    public $valor;

    function converterValor(){

        
        if($this->valor < 4){
            return str_repeat('I',$this->valor);
        }
        else if($this->valor == 4){
            return  str_repeat('IV',$this->valor);
        }else if($this->valor >=5 and $this->valor < 10 ){
            $repeticao = floor($this->valor/5);
            $repeticao2 = ($this->valor % 5);
            $strfinal = '';
            if($repeticao ==1 and $repeticao2==0){
                $strfinal = str_repeat('V',1);
            }else{
              $strfinal =   str_repeat('V',$repeticao);
              $strfinal .=  str_repeat('I',$repeticao2);
            }
            return $strfinal;
        }else if($this->valor >=10 and $this->valor < 100 ){
            $strfinal = '';

            

            $repeticao = floor($this->valor/10);
            $repeticao2 = ($this->valor % 10);

            
            if($repeticao ==1and $repeticao2==0){
                $strfinal = str_repeat('X',1);
            }else{
                 if($repeticao == 4){
                    $strfinal .= str_repeat('X',1);
                    $strfinal .= str_repeat('L',1);
                }else if($repeticao >=5 and $repeticao < 9){
                    $strfinal .= str_repeat('L',1);
                    $repeticao =  floor(($this->valor-50)/10);
                }else if($repeticao >=9){
                    $strfinal .= str_repeat('XC',1);
                    $repeticao =  floor(($this->valor-90)/10);
                }else{
                    $strfinal .=   str_repeat('X',$repeticao);

                }
                    
                
                
                
              if($repeticao2 >= 5 ){
                if($repeticao2 != 9){
                    $repeticao3 = floor($repeticao2/5);
                    $repeticao4 = ($repeticao2 % 5);
                    $strfinal .=   str_repeat('V',$repeticao3);
                    $strfinal .=  str_repeat('I',$repeticao4);
                }else{
                    
                    $strfinal .=  str_repeat('IX',1);
                    
                }
                
              
            }else if($repeticao2 == 4 ){
                $strfinal .=   str_repeat('IV',1);
                
            }else{
                $strfinal .=   str_repeat('I',$repeticao2);
            }
        }
            return $strfinal;

        }else if($this->valor >=100 and $this->valor < 1000 ){


            $strfinal = '';

            $repeticao01 = floor($this->valor/100);
            
            $repeticao02 = ($this->valor % 100);

            $repeticao = floor($repeticao02/10);
            $repeticao2 = ($repeticao02 % 10);

            if($repeticao01 ==1 and $repeticao02==0){
                $strfinal .= str_repeat('C',1);
            }else{
                if($repeticao01 < 4){
                    $strfinal .= str_repeat('C',$repeticao01);
                }else if($repeticao01 == 4){
                    $strfinal .= str_repeat('CD',1);
                }else if($repeticao01 >=9){
                    $strfinal .= str_repeat('CM',1);
                    $repeticao =  floor((($this->valor)-(100)*$repeticao01)/10);
                }else {
                    $strfinal .= str_repeat('D',1);
                    $repeticao01temp = $repeticao01 - 5; 
                    $strfinal .= str_repeat('C',$repeticao01temp);
                    
                }
                
                
            }
            if($repeticao ==1and $repeticao2==0){
                $strfinal .= str_repeat('X',1);
            }else{
                
                 if($repeticao == 4){
                    $strfinal .= str_repeat('X',1);
                    $strfinal .= str_repeat('L',1);
                }else if($repeticao >=5 and $repeticao < 9){
                    $strfinal .= str_repeat('L',1);
                    $repeticao =  floor((($this->valor-50)-((100)*$repeticao01))/10);
                }else if($repeticao >=9){
                    $strfinal .= str_repeat('XC',1);
                    $repeticao =  floor((($this->valor-90)-(100)*$repeticao01)/10);
                }else{
                    $strfinal .=   str_repeat('X',$repeticao);
                }
                    
                    
                
                
                
              if($repeticao2 >= 5 ){
                if($repeticao2 != 9){
                    $repeticao3 = floor($repeticao2/5);
                    $repeticao4 = ($repeticao2 % 5);
                    $strfinal .=   str_repeat('V',$repeticao3);
                    $strfinal .=  str_repeat('I',$repeticao4);
                }else{
                    
                    $strfinal .=  str_repeat('IX',1);
                    
                }
                
              
            }else if($repeticao2 == 4 ){
                $strfinal .=   str_repeat('IV',1);
                
            }else{
                $strfinal .=   str_repeat('I',$repeticao2);
            }
        }
            return $strfinal;

        }else if($this->valor >=1000 and $this->valor < 3001 ){


            $strfinal = '';

            $repeticao001 = floor($this->valor/1000);
            
            $repeticao002 = ($this->valor % 1000);

            if($repeticao001 ==1 and $repeticao002==0){
                $strfinal .= str_repeat('M',1);
            }else{
                $strfinal .= str_repeat('M',$repeticao001);
            }

            $repeticao01 = floor($repeticao002/100);
            
            $repeticao02 = ($repeticao002 % 100);

            $repeticao = floor($repeticao02/10);
            $repeticao2 = ($repeticao02 % 10);

            if($repeticao01 ==1 and $repeticao02==0){
                $strfinal .= str_repeat('C',1);
            }else{
                if($repeticao01 < 4){
                    $strfinal .= str_repeat('C',$repeticao01);
                }else if($repeticao01 == 4){
                    $strfinal .= str_repeat('CD',1);
                }else if($repeticao >=9){
                    $strfinal .= str_repeat('CM',1);
                    $repeticao =  floor((($this->valor)-(100)*$repeticao01)/10);
                }else {
                    $strfinal .= str_repeat('D',1);
                    $repeticao01temp = $repeticao01 - 5; 
                    $strfinal .= str_repeat('C',$repeticao01temp);
                    
                }
                
                
            }
            if($repeticao ==1and $repeticao2==0){
                $strfinal .= str_repeat('X',1);
            }else{
                
                 if($repeticao == 4){
                    $strfinal .= str_repeat('X',1);
                    $strfinal .= str_repeat('L',1);
                }else if($repeticao >=5 and $repeticao < 9){
                    $strfinal .= str_repeat('L',1);
                    $repeticao =  floor((($this->valor-50)-((100)*$repeticao01))/10);
                }else if($repeticao >=9){
                    $strfinal .= str_repeat('XC',1);
                    $repeticao =  floor((($this->valor-90)-(100)*$repeticao01)/10);
                }else{
                    $strfinal .=   str_repeat('X',$repeticao);
                }
                    
                    
                
                
                
              if($repeticao2 >= 5 ){
                if($repeticao2 != 9){
                    $repeticao3 = floor($repeticao2/5);
                    $repeticao4 = ($repeticao2 % 5);
                    $strfinal .=   str_repeat('V',$repeticao3);
                    $strfinal .=  str_repeat('I',$repeticao4);
                }else{
                    
                    $strfinal .=  str_repeat('IX',1);
                    
                }
                
              
            }else if($repeticao2 == 4 ){
                $strfinal .=   str_repeat('IV',1);
                
            }else{
                $strfinal .=   str_repeat('I',$repeticao2);
            }
        }
            return $strfinal;

        }

    }

    function converterValor2(){

        $valorteste = $this->valor;
        $strfinal = '';
        if($valorteste >= 1000 and $valorteste <= 3000){

            $repeticao = floor($valorteste/1000);
            $strfinal .= str_repeat('M',$repeticao);
            $valorteste -= (1000)*$repeticao;

        }
        if($valorteste >= 500){

            $strfinal .= str_repeat('D',1);
            $valorteste -= 500;

        }
        if($valorteste >= 100 and $valorteste <= 999){

            $repeticao = floor($valorteste/100);
            $strfinal .= str_repeat('C',$repeticao);
            $valorteste -= (100)*$repeticao;

        }
        if($valorteste >= 50 ){

            $repeticao = floor($valorteste/50);
            $strfinal .= str_repeat('L',$repeticao);
            $valorteste -= (50)*$repeticao;

            
        }

        if($valorteste >= 40 ){

            $strfinal .= str_repeat('XL',1);
            $valorteste -= 40;

            
        }
        if($valorteste >= 10 ){

            $repeticao = floor($valorteste/10);
            $strfinal .= str_repeat('X',$repeticao);
            $valorteste -= (10)*$repeticao;

        }
        if($valorteste >= 9 ){

            $strfinal .= str_repeat('IX',1);
            $valorteste -= 9;

        }
        if($valorteste >= 5 ){

            $repeticao = floor($valorteste/5);
            $strfinal .= str_repeat('V',$repeticao);
            $valorteste -= (5)*$repeticao;

        }

        if($valorteste == 4 ){
            $strfinal .= str_repeat('IV',1);
            $valorteste -= 4;
        }

        if($valorteste < 4 and $valorteste > 0 ){
            $strfinal .= str_repeat('I',$valorteste);
            $valorteste -= (1)*$repeticao;

        }

        return $strfinal;
    }

    function converterValor3(){

        $valores=[
            'M'=>1000,
            'D'=>500,
            'C'=>100,
            'L'=>50,
            'XL'=>40,
            'X'=>10,
            'IX'=>9,
            'V'=>5,
            'IV'=>4,
            'I'=>1,
        ];

        $valorteste=$this->valor;
        $strfinal = '';
        foreach($valores as $key=>$value){
            
            if($valorteste >= $value){
                $repeticao = floor($valorteste  / $value);
                $strfinal .= str_repeat($key,$repeticao); 
                $valorteste -= ($value) * $repeticao;
            }

        }

        return $strfinal;

    }

    

}

$teste = new Conversor();

$teste->valor = 500;
echo $teste->converterValor();
echo PHP_EOL;
echo $teste->converterValor2();
echo PHP_EOL;
echo $teste->converterValor3();


?>
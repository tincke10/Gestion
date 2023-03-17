<?
// Se controla el valor del coseguro si el afiliado se atiende en alguno de los Centros Medicos 
// Prestadores Internos - Ej: Susana Davila
if (($ordeplme == 220) or ($ordeplme == 240)) //PMO
       {
       if ( ($ordepres == 810100) or ($ordepres == 810400) ) $coseguro = 750; //Consultas

       elseif ( ($ordepres == 820400) or  ($ordepres == 830600) 
             or ($ordepres == 850100) or ($ordepres == 850200) or ($ordepres == 850500) 
             or ($ordepres == 870100)  or ($ordepres == 870400) 
             or ($ordepres == 880100)
             or ($ordepres == 880200) or ($ordepres == 880300)  
             or ($ordepres == 890101) ) $coseguro = 750; //Practicas
		
	   elseif (($ordepres == 850400) or ($ordepres == 870200) or ($ordepres == 870300)
			 or ($ordepres == 870601) or ($ordepres == 870602) or ($ordepres == 870604)
			 or ($ordepres == 880400) or ($ordepres == 880500) 
			 or ($ordepres == 900400) or ($ordepres == 900500)
             or ($ordepres == 900600) or ($ordepres == 900700) or ($ordepres == 901000) )  $coseguro = 390;
		
	   elseif (($ordepres == 820200) or ($ordepres == 820800) ) $coseguro = 780; //Practicas
	   
       elseif ( ($ordepres == 890101) or ($ordepres == 890102) or ($ordepres == 890103) or ($ordepres == 890104) 
          or ($ordepres == 890105) or ($ordepres == 890201) or ($ordepres == 890202) or ($ordepres == 890203)
            ) $coseguro = 100;//RX

       elseif ( ($ordepres == 830100) or ($ordepres == 830200) or ($ordepres == 830500) ) $coseguro = 2250;
				 
       elseif (($ordepres == 830600))  $coseguro = 1200;
	   
	   elseif (($ordepres == 900902))  $coseguro = 2990;
	   
	   elseif (($ordepres == 901100))  $coseguro = 2340;
	   
	   elseif (($ordepres == 890204))  $coseguro = 1000;
	   
       elseif (( $ordepres == 821700 )) $coseguro = 550;

	   elseif (($ordepres == 900901))  $coseguro = 1950;

       elseif (($ordepres == 900100 ) ) $coseguro = 1560;
       //else $coseguro =10;
       //echo $coseguro;
        }





	elseif (($ordeplme == 221) or ($ordeplme == 243) or ($ordeplme == 260) or ($ordeplme == 261) or ($ordeplme == 266) or ($ordeplme == 267) or ($ordeplme == 268) or ($ordeplme == 1) or ($ordeplme == 2) or ($ordeplme == 16) or ($ordeplme == 271) or ($ordeplme == 273) or ($ordeplme == 275) or ($ordeplme == 278)) //PMA 10000 - PLAN CLASICO
       {
       if ( ($ordepres == 810100) or ($ordepres == 810400) ) $coseguro = 480; //Consultas

       elseif ( ($ordepres == 820200) or ($ordepres == 820800) 
             or ($ordepres == 850100) or ($ordepres == 850200) or ($ordepres == 850500) 
             or ($ordepres == 870100) or ($ordepres == 870400) 
             or ($ordepres == 880100) or ($ordepres == 880200) 
             or ($ordepres == 880300) or ($ordepres == 900100) or ($ordepres == 890101)) $coseguro = 480; //Practicas
			
		elseif (($ordepres == 890204))  $coseguro = 880;
		
		elseif ( ($ordepres == 820100)  or ($ordepres == 820400) or ($ordepres == 820500) or ($ordepres == 830600) 
             or ($ordepres == 820900)  or ($ordepres == 850400)  or ($ordepres == 850600)
             or  ($ordepres == 870200) or ($ordepres == 870300)  or ($ordepres == 870500) or ($ordepres == 870600) 
             or ($ordepres == 870601) or ($ordepres == 870602) or ($ordepres == 870604) or ($ordepres == 870700)
             or ($ordepres == 880400) or ($ordepres == 880500) or ($ordepres == 880600) 
             or ($ordepres == 900200) or ($ordepres == 900300) or ($ordepres == 900400) or ($ordepres == 900500) or ($ordepres == 900600) or ($ordepres == 900700) 
             or ($ordepres == 900800) or ($ordepres == 900900) or ($ordepres == 901000) or ($ordepres == 901200) or ($ordepres == 901300) or ($ordepres == 901400) 
             or ($ordepres == 901500) or ($ordepres == 901600)           
            ) $coseguro = 210; //Practicas


       elseif ( ($ordepres == 890101) ) $coseguro = 50; //RX

      /*elseif ( ($ordepres == 830100) or ($ordepres == 830200) or ($ordepres == 830500)  or ($ordepres == 900900) ) $coseguro = 80;*/

       elseif ( ($ordepres == 821700) or ($ordepres == 830100) or ($ordepres == 830200) or ($ordepres == 830500) or ($ordepres == 830600) )  $coseguro = 460;
		
	   elseif ( ($ordepres == 900901) ) $coseguro = 1050; 
	   elseif ( ($ordepres == 900902) ) $coseguro = 1320; 
	   elseif ( ($ordepres == 901100) ) $coseguro = 1130; 

       elseif ( ($ordepres == 890204) or ($ordepres == 890205) ) $coseguro = 390; // ORTOMANTOMOGRAFIA PANORAMICA Y TELERADIOGRAFIA LATERAL
       
       //else $coseguro =10;
       //echo $coseguro;
        }



	elseif (($ordeplme == 222) or ($ordeplme == 229) or ($ordeplme == 246) or ($ordeplme == 249) or ($ordeplme == 262) or ($ordeplme == 263) or ($ordeplme == 272) or ($ordeplme == 274) or ($ordeplme == 276)  or ($ordeplme == 277)) //PMA 15000 - PLAN SUPERIOR
       {
       if ( ($ordepres == 810100) or ($ordepres == 810400) ) $coseguro = 230; //Consultas 

       elseif ( ($ordepres == 820100) or ($ordepres == 820400) or ($ordepres == 820500) or ($ordepres == 830600)  
             or ($ordepres == 820900)  or ($ordepres == 850400) 
             or ($ordepres == 850600) or ($ordepres == 870200) or ($ordepres == 870300) or ($ordepres == 870500) or ($ordepres == 870600) 
             or ($ordepres == 870601) or ($ordepres == 870602) or ($ordepres == 870604) or ($ordepres == 870700)
             or ($ordepres == 880400) or ($ordepres == 880500) or ($ordepres == 880600) or ($ordepres == 900100) or ($ordepres == 900101) 
             or ($ordepres == 900200) or ($ordepres == 900300) or ($ordepres == 900400) or ($ordepres == 900500) or ($ordepres == 900600) or ($ordepres == 900700) 
             or ($ordepres == 900800) or ($ordepres == 900900) or ($ordepres == 901000) or ($ordepres == 901200) or ($ordepres == 901300) or ($ordepres == 901400) 
             or ($ordepres == 901500) or ($ordepres == 901600)           
            ) $coseguro = 120; //Practicas

      elseif ( ($ordepres == 820200) or ($ordepres == 820800) or ($ordepres == 850100) or ($ordepres == 850200) or ($ordepres == 850500)
      or ($ordepres == 870100) or ($ordepres == 880100) or ($ordepres == 880200) or ($ordepres == 880300)  ) $coseguro = 230;
       /*elseif ( ($ordepres == 890101) or ($ordepres == 890102) or ($ordepres == 890103) or ($ordepres == 890104) 
            or ($ordepres == 890105) or ($ordepres == 890201) or ($ordepres == 890202) or ($ordepres == 890203)
            ) $coseguro = 30;	//RX*/
            
       elseif ( ($ordepres == 890101) ) $coseguro = 230; //RX     

       /*elseif ( ($ordepres == 830100) or ($ordepres == 830200) or ($ordepres == 830500) or ($ordepres == 900900) ) $coseguro = 40;*/
       
       elseif ( ($ordepres == 821700) or ($ordepres == 830100) or ($ordepres == 830200) or ($ordepres == 830500) or ($ordepres == 830600) 
               or ($ordepres == 900902) )  $coseguro = 250;

       elseif ( ($ordepres == 890205) ) $coseguro = 250; // ORTOMANTOMOGRAFIA PANORAMICA Y TELERADIOGRAFIA LATERAL
       elseif ( ($ordepres == 890204) or ($ordepres == 900100) or ($ordepres == 900901) or ($ordepres == 901100) )  $coseguro = 480;
       elseif ( ($ordepres == 870400) ) $coseguro = 320;
       elseif ( ($ordepres == 900902) ) $coseguro = 630;
       //else $coseguro =10;
       //echo $coseguro;
        }   



	elseif (($ordeplme == 223) or ($ordeplme == 232) or ($ordeplme == 250) or ($ordeplme == 253) or ($ordeplme == 264) or ($ordeplme == 265)) //PMA 20000
       {
       if ( ($ordepres == 810100) or ($ordepres == 810400) ) $coseguro = 0; //Consultas

       elseif ( ($ordepres == 820200) or ($ordepres == 820400) or ($ordepres == 820800) or ($ordepres == 830600) 
            or ($ordepres == 850100) or ($ordepres == 850200) or ($ordepres == 850400) or ($ordepres == 850500) 
            or ($ordepres == 870100) or ($ordepres == 870200) or ($ordepres == 870300) or ($ordepres == 870400) 
            or ($ordepres == 870601) or ($ordepres == 870602) or ($ordepres == 870604) or ($ordepres == 880100)
            or ($ordepres == 880200) or ($ordepres == 880300) or ($ordepres == 880400) or ($ordepres == 880500) 
            or ($ordepres == 900101) or ($ordepres == 900400) or ($ordepres == 900500)
            or ($ordepres == 900600) or ($ordepres == 900700) or ($ordepres == 901000)             
            ) $coseguro = 0; //Practicas

       elseif ( ($ordepres == 890101) or ($ordepres == 890102) or ($ordepres == 890103) or ($ordepres == 890104) 
            or ($ordepres == 890105) or ($ordepres == 890201) or ($ordepres == 890202) or ($ordepres == 890203)
            ) $coseguro = 0;	//RX

       elseif ( ($ordepres == 830100) or ($ordepres == 830200) or ($ordepres == 830500) or ($ordepres == 900900) ) $coseguro = 0;
       
       //else $coseguro =10;
       //echo $coseguro;
   		}
?>      



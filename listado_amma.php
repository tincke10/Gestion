<?
session_start();
$conn=@pg_connect("host=192.168.0.4 user=adminis password=peperina dbname=adminis");
?>
<html>
<head>
<title>A.M.M.A.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../text.css" rel="stylesheet" type="text/css">
<style>
#table { background:#D3E4E5;
 border:1px solid gray;
 border-collapse:collapse;
 color:#fff;
 font:normal 12px verdana, arial, helvetica, sans-serif;
}

#td, th { color:#363636;
 padding:.4em;
}
#tr { border:1px dotted gray;
}
#thead th, tfoot th { background:#5C443A;
 color:#FFFFFF;
 padding:3px 10px 3px 10px;
 text-align:left;
 text-transform:uppercase;
}
#tbody td a { color:#363636;
 text-decoration:none;
}
#tbody td a:visited { color:gray;
 text-decoration:line-through;
}
#tbody td a:hover { text-decoration:underline;
}
#tbody th a { color:#363636;
 font-weight:normal;
 text-decoration:none;
}
#tbody th a:hover { color:#363636;
}
#tbody td+td+td+td a { background-image:url('bullet_blue.png');
 background-position:left center;
 background-repeat:no-repeat;
 color:#03476F;
 padding-left:15px;
}

#tbody th, tbody td { text-align:left;
 vertical-align:top;
}
#tfoot td { background:#5C443A;
 color:#FFFFFF;
 padding-top:3px;
}
.odd { background:#fff;
}
#tbody tr:hover { background:#99BCBF;
 border:1px solid #03476F;
 color:#000000;
}
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="POST">
  <table width="778"   border="0" cellpadding="0" cellspacing="0" align="center">
  
    <tr> 
      
                        <td align="center" height="266" colspan="2" valign="top"><p align="center"><br>
                         
			




<?

	
		echo "<table  id=table align=center><tr align=center bgcolor=#5C443A><td align=center><font face=arial size=3><center>Ingrese su n&uacute;mero de documento o n&uacute;mero de socio.</center></font></td></tr></table>"
		?>
<br><br>

		<table align="center">
			<TR><TD><font face=arial size=2>N&deg; de Documento o N&deg; de socio</font><font face=arial size=1>: </font><input type="text" name="ndoc" size="12"></TD><td><input type="submit" value="Buscar"></td></TR>
		</table>
</form>

		<?

		if ($_POST['ndoc']){


		$doc = trim(htmlentities($_POST['ndoc']));
		
		//$doc = str_pad($doc, 8,"0", STR_PAD_LEFT);

		//$sql = "select * from socios where (nrodocumento = '$doc' or ordesoci = '$doc') and ordeenti = 1";
		//$sql = "select * from ddjj_auxiliar where cuit = '$cuit' order by ordeddau desc";

		$sql = "select * from socios where (nrodocumento::bigint= $doc or ordesoci = $doc) and ordeenti = 1";	

		$result = pg_query($conn,$sql);
			if (pg_num_rows($result)>0){
                $row=pg_fetch_array($result);

                $sql_loca = "select * from localidades where ordeloca=".$row['ordeloca'];
                $result_loca = pg_query($conn,$sql_loca);
                $row_loca = pg_fetch_array($result_loca);

                function getUltimoDiaMes($elAnio,$elMes) {
                    return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
                }

			    $socio = $row['ordesoci'];
                $fechaIni = date('Y-m')."-01";
                $mesFin = date('m');
                $anioFin = date('Y');
                $fechaFin = date('Y-m')."-".getUltimoDiaMes($anioFin,$mesFin);

				$nro = $row['nrodocumento'];
				?>

				<br>
				<table align="center" id="table" width="100%">
				<TR id="tr"><TD id="td"><b>Cliente</b> : <font size=1><?echo $row['apellido'].", ".$row['nombres']." - ".$row['nrodocumento'] ?> </TD><td id="td"><b>Localidad </b>: <font size=1><?echo $row_loca['descloca']?> </td></TR>
				</table>
				<br>
				<?
				echo "<table align=center width=80%  id=table>
					<tr id=tr>
						<th id=th align=left>Fecha de Generaci&oacute;n</th>
						<th id=th align=left>Saldo</th>
						<th id=th align=left>Imprimir</th>
					</tr>
					<tbody id=tbody>";

                $sql2 = "select * from movivent where ordesoci=$socio and impomovivent <> 0 and saldmovivent>0 and ordecomp=97 and ordeenti=1 and ordesucu=12 order by fechmovivent desc";
                //echo $sql2;
				$result2 = pg_query($conn,$sql2);
				while($row2=pg_fetch_array($result2)){

					$ordemovivent = $row2['ordemovivent']; 
					echo "<tr align=center id=tr>
					<td align=center id=td>".$row2['fechmovivent']."</td>
					<td align=center id=td>$ ".$row2['saldmovivent']."</td>
					<td align=center id=td>
					<form name='form_cupon' id='form_cupon' method='POST' action='http://www.amma.org.ar/adminis/martin/cupon.php' target='_blank'>
					<input type='hidden' value='".$ordemovivent."' name='ordemovivent' />
					<input type='submit' value='Imprimir'/>
					</form>
					</td>
					</tr>";


				} 

			echo "</tbody>
			</table>";
			}
			else
			{
			?>
			<br>
			<table align="center">
			<TR><TD>No se han encontrado resultados para el N&deg; de Documento ingresado.</TR>
			</table>
			<br>
			<?
			}
		}

		
if ($conn) pg_close($conn);
	?>
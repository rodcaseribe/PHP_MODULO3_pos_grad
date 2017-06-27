<?php
//REFERENCIAR O ARQUIVO COM A CLASSE DE GERAÇÃO DE PDF
include 'pdf/mpdf.php';


$saida = 
        "<html>
            <body>
        		<img src=eu.png></img>
        <h1>Rodolfo Casemiro Ribeiro</h1>
	                <ul>
		  <!-- <img src=https://mancilha.files.wordpress.com/2008/09/teste2.png></img>-->
                    <li>Idade: 25 anos</li>
                    <li>Formação: Engenheiro da Computação - UNICEP</li>
                    <li>Técnico em Mecatrônica</li>
                    <li>Cargo Atual: Administrador de Redes - UNICEP</li>
                    <li>Cursando Pós Gradução UNIARA</li>
		   <li> Apaixonado por linux e BASH, e adoro brincar com várias linguagens de programação</li>
		   
		   <li>Sites:</li>
                </ul>
		 <h5><i>http://www.roothc.com.br<br>
		 <i>http://www.vacuumsolutions.com.br<br>
		 <i>https://apps.facebook.com/pesquisarinsta/<br>
		 <i>http://novobit.com.br</h5>

	

                          </body>
        </html>
        ";

$arquivo = "Exemplo03.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($saida);
/*
 * F - salva o arquivo NO SERVIDOR
 * I - abre no navegador E NÃO SALVA
 * D - chama o prompt E SALVA NO CLIENTE
 */

$mpdf->Output($arquivo, 'I');

echo "PDF GERADO COM SUCESSO";


?>

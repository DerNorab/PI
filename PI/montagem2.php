<html>
<meta charset="UTF-8"/>
    <head>
        <title>Montagem de PC e Dicas em Hardwares</title>
        <link rel="shortcut icon" href="imagens/logo1.png" type="image/x-icon" />
        </head>
<link rel="stylesheet" href="estilos.css"></link>
    <body>
        <center><img src="imagens/logo1.png" height="200px" alt="Logo"/></center>
        <div class="menu">
           <nav>
        <li><a href="proposta.html">Proposta do Site</a></li>
        <li><a href="dicas.html">Dicas em Hardwares</a></li>
        <li><a href="montagem.html">Montagem do PC</a></li>
        <li><a href="quemsomos.html">Quem Somos</a></li>
    </nav>
       </div>
    </br>
        <div class="fundo_1">
            <div class="h1_a"><h1>Resultado do Forms</h1>
                <?php
                $nome = $_POST["nome"];
                $resposta1 = $_POST["resposta1"];
                $resposta2 = $_POST["resposta2"];
                $resposta3 = $_POST["resposta3"];
                $resposta4 = $_POST["resposta4"];

                
                if ($resposta1 >= 2000 and $resposta1 < 2500 and $resposta2 == "sim" or $resposta2 == "Sim") {
                    echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais </br>";
                    echo "<a href='https://www.kabum.com.br/produto/478057/computador-completo-3green-intel-core-i7-6-geracao-16gb-ddr4-ssd-1tb-windows-10-monitor-24-led-hdmi-flex-3f-054?gad_source=1&gclid=EAIaIQobChMIvp2Ykr3WggMVPF9IAB0XGAqJEAQYAiABEgJTqfD_BwE'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Intel</p>";
                    echo "<p>- Processador: Intel I7 6ª geração</p>";
                    echo "<p>- Memória RAM: 16gb</p>";
                    echo "<p>- Armazenamento: SSD 1tb</p>";
                    echo "<p>- Sistema Operacional: Windows 10</p>";
                    echo "<p>- Placa de Vídeo: Intel H. Series</p>";
                    echo "<p>- Fabricante: 3green</p>";
                    echo "<img src='imagens/computador_pessoal_1.jpg' height='300px' />";
                    
                }

                elseif ($resposta1 >= 2000 and $resposta1 < 2500 and $resposta3 == "sim" or $resposta3 == "Sim") {
                    echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais </br>";
                    echo "<a href='https://www.dell.com/pt-br/shop/computadores-all-in-ones-e-workstations/vostro-small-desktop/spd/vostro-3710-desktop/v3710w6505w?gacd=9657105-15015-5761040-275878141-0&dgc=ST&cid=71700000112393939&gad_source=1&gclid=EAIaIQobChMIodWR_LzWggMVdR99Ch2BDAKNEAQYASABEgItj_D_BwE&gclsrc=aw.ds'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Intel</p>";
                    echo "<p>- Processador: Intel I3 12ª geração</p>";
                    echo "<p>- Memória RAM: 8gb</p>";
                    echo "<p>- Armazenamento: SSD 256tb</p>";
                    echo "<p>- Sistema Operacional: Windows 11 Home</p>";
                    echo "<p>- Placa de Vídeo: Intel UHD Graphics 730";
                    echo "<p>- Fabricante: DELL</p>";
                    echo "<img src='imagens/computador_trabalho_1.jpg' height='300px' />";
                }

                elseif ($resposta1 >= 2000 and $resposta1 < 2500 and $resposta4 == "sim" or $resposta4 == "Sim") {
                    echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais </br>";
                    echo "<a href='https://www.kabum.com.br/produto/478057/computador-completo-3green-intel-core-i7-6-geracao-16gb-ddr4-ssd-1tb-windows-10-monitor-24-led-hdmi-flex-3f-054?gad_source=1&gclid=EAIaIQobChMIvp2Ykr3WggMVPF9IAB0XGAqJEAQYAiABEgJTqfD_BwE'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Intel H61</p>";
                    echo "<p>- Processador: Intel I7 3ª geração</p>";
                    echo "<p>- Memória RAM: 16gb</p>";
                    echo "<p>- Armazenamento: SSD 512tb</p>";
                    echo "<p>- Sistema Operacional: Windows 10</p>";
                    echo "<p>- Placa de Vídeo: GTX 750</p>";
                    echo "<p>- Fabricante: 3green</p>";
                    echo "<img src='imagens/computador_gamer_1.jpg' height='300px' />";
                }

                elseif ($resposta1 >= 2500 and $resposta1 < 3000 and $resposta2 == "sim" or $resposta2 == "Sim") {
                    echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais </br>";
                    echo "<a href='https://www.kabum.com.br/produto/472907/computador-intel-core-i5-10400-32gb-ddr4-ssd-1tb-m2-windows-11-pro?gad_source=1&gclid=EAIaIQobChMI6MHewZrYggMVEhatBh18QgLhEAQYAyABEgIPqfD_BwE'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Intel H510m LGA 1200</p>";
                    echo "<p>- Processador: Intel core I5 10ª geração</p>";
                    echo "<p>- Memória RAM: 32gb</p>";
                    echo "<p>- Armazenamento: SSD 1tb</p>";
                    echo "<p>- Sistema Operacional: Windows 11 Pro</p>";
                    echo "<p>- Placa de Vídeo: Não especificado</p>";
                    echo "<p>- Fabricante: A J S TECH</p>";
                    echo "<img src='imagens/computador_pessoal_2.jpg' height='300px' />";
                }

                elseif ( $resposta1 >= 2500 and $resposta1 < 3000 and $resposta3 == "sim" or $resposta3 == "Sim") {
                    echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais</br>";
                    echo "<a href='https://www.kabum.com.br/produto/429378/computador-skill-pro-completo-intel-12-geracao-core-i5-10400f-16gb-ssd-512gb-geforce-2gb-linux-monitor-led-21-5-teclado-e-mouse-sp-092?gad_source=1&gclid=EAIaIQobChMI2pWH5cDWggMV3c7CBB03dQB9EAQYBSABEgLxBPD_BwE'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Intel H610 LGA 1700</p>";
                    echo "<p>- Processador: Intel I5 12ª geração</p>";
                    echo "<p>- Memória RAM: 16gb</p>";
                    echo "<p>- Armazenamento: SSD 512tb</p>";
                    echo "<p>- Sistema Operacional: Linux</p>";
                    echo "<p>- Placa de Vídeo: NVIDIA GeForce GT 610</p>";
                    echo "<p>- Fabricante: Skill PRO</p>";
                    echo "<img src='imagens/computador_trabalho_2.jpg' height='300px' />";
                }

                elseif ($resposta1 >= 2500 and $resposta1 < 3000 and $resposta4 == "sim" or $resposta4 == "Sim") {
                    echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais </br>";
                    echo "<a href='https://www.pichau.com.br/computador-pichau-gamer-intel-i5-11400f-geforce-gtx-1650-4gb-16gb-ddr4-ssd-480gb-33238?gad_source=1&gclid=EAIaIQobChMIgsLsmZ7YggMVuiytBh0QiAZ_EAQYBSABEgJC7vD_BwE'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Pichau Alphard B560M</p>";
                    echo "<p>- Processador: Intel I5 11ª geração</p>";
                    echo "<p>- Memória RAM: 16gb</p>";
                    echo "<p>- Armazenamento: SSD 500tb</p>";
                    echo "<p>- Sistema Operacional: Não especificado</p>";
                    echo "<p>- Placa de Vídeo: GEFORCE GTX 1650</p>";
                    echo "<p>- Fabricante: Pichau</p>";
                    echo "<img src='imagens/computador_gamer_2.jpg' height='300px' />";
                }

                elseif ($resposta1 >= 3000 and $resposta2 == "sim" or $resposta2 == "Sim") {
                    echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais </br>";
                    echo "<a href='https://www.pichau.com.br/computador-pichau-gamer-intel-i5-10400f-geforce-gtx-1660-super-6gb-16gb-ddr4-ssd-480gb-37244?gad_source=1&gclid=EAIaIQobChMI1YfCiaTYggMVDACtBh0eMA87EAQYASABEgJ9efD_BwE'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Pichau Alphard B560M-T</p>";
                    echo "<p>- Processador: Intel I5 10ª geração</p>";
                    echo "<p>- Memória RAM: 16gb</p>";
                    echo "<p>- Armazenamento: SSD 500tb</p>";
                    echo "<p>- Sistema Operacional: Não especificado</p>";
                    echo "<p>- Placa de Vídeo: Mancer GTX 1660 Super Heimdall</p>";
                    echo "<p>- Fabricante: Pichau</p>";
                    echo "<img src='imagens/computador_pessoal_3.jpg' height='300px' />";
                }

                elseif ($resposta1 >= 3000 and $resposta3 == "sim" or $resposta3 == "Sim") {
                    echo "</br>";echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais </br>";
                    echo "<a href='https://www.dell.com/pt-br/shop/cty/pdp/spd/inspiron-24-5420-aio/aio5420w2350w?gacd=9657105-15015-5761040-275878141-0&dgc=ST&cid=71700000112393939&gad_source=4&gclid=EAIaIQobChMIoO2JvcLWggMVjGFIAB3uZggiEAQYAyABEgIoZ_D_BwE&gclsrc=aw.ds'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Intel</p>";
                    echo "<p>- Processador: Intel I5 13ª geração</p>";
                    echo "<p>- Memória RAM: 8gb</p>";
                    echo "<p>- Armazenamento: SSD 256tb</p>";
                    echo "<p>- Sistema Operacional: Windows 11 Home</p>";
                    echo "<p>- Placa de Vídeo: Intel UHD</p>";
                    echo "<p>- Fabricante: DELL</p>";
                    echo "<img src='imagens/computador_trabalho_3.jpg' height='300px' />";
                }

                elseif ($resposta1 >= 3000 and $resposta4 == "sim" or $resposta4 == "Sim") {
                    echo "</br>";
                    echo "Aqui está $nome o seu computador com base no seu orçamento de $resposta1 reais </br>";
                    echo "<a href='https://www.kabum.com.br/produto/475775/pc-gamer-3green-hunter-intel-core-i7-ram-16gb-geforce-rtx-3060-12gb-ssd-512gb-24-polegadas-full-hd-kit-gamer-3h-004?gad_source=1&gclid=EAIaIQobChMI6aX73cLWggMVhxqtBh1DQgiiEAQYCiABEgI0cfD_BwE'> Aqui está o seu Computador</a>";
                    echo "</br>";
                    echo "<h2>Detalhes do Produto</h2>";
                    echo "<p>- Placa Mãe: Intel H61</p>";
                    echo "<p>- Processador: Intel Core I7 3ª geração</p>";
                    echo "<p>- Memória RAM: 16gb</p>";
                    echo "<p>- Armazenamento: SSD 512tb</p>";
                    echo "<p>- Sistema Operacional: Windows 10</p>";
                    echo "<p>- Placa de Vídeo: NVIDIA GEFORCE RTX 3060</p>";
                    echo "<p>- Fabricante 3green</p>";
                    echo "<img src='imagens/computador_gamer_3.jpg' height='300px' />";
                }

                ?>
            </div></div>
    </body>
</html>
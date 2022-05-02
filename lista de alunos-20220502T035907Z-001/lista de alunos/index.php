<?php
	include('conecta.php');

	echo "<table><tr><th>Nome</th><th>Data de nascimento</th><th>Sexo</th>
                          <th>Altura(M)</th></tr>";
	$query="select * from `tb_aluno`";
	if ($result=$mysqli->query($query)) {
                  while ($obj = $result->fetch_object())  {
                  		if ($obj->id_sexo=='1') {
                  			$sexo="Masculino";
                  		}
                  		else{
                  			$sexo="Feminino";
                  		}
                  	
                          echo "<tr>

                          <td>".$obj->nm_aluno."</td><td>".$obj->dt_nascimento."</td><td>".$sexo.
                          "</td><td>".$obj->vl_altura."</td></tr>";

                  }
              }
              echo "<br><br>";

              $query= "select count(cd_aluno) as quantidade from tb_aluno;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos é:".$obj->quantidade."<br>";
                 }
                
              }
              $query= "select count(cd_aluno) as quantidadem from tb_aluno where id_sexo=0;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos do sexo masculio é:".$obj->quantidadem."<br>";
                 }
                
              }
              $query= "SELECT count(cd_aluno) as quantidadef from tb_aluno where id_sexo=1;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos do sexo Feminino é:".$obj->quantidadef."<br>";
                 }
                
              }
              $query= "SELECT * FROM `tb_aluno` order by vl_altura limit 1";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "O aluno mais baixo é:".$obj->nm_aluno."<br>";
                 }
                
              }
              $query= "SELECT * FROM `tb_aluno` order by vl_altura desc limit 1";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A aluna mais alta é:".$obj->nm_aluno."<br>";
                 }
                
              }
              $query= "SELECT ROUND(avg(vl_altura),2) as mdaltura FROM tb_aluno";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A média de altura é:".$obj->mdaltura."M<br>";
                 }
                
              }

              $query= "SELECT nm_aluno,YEAR(CURDATE())-YEAR(dt_nascimento) AS idade FROM tb_aluno";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A idade de ".$obj->nm_aluno." é:".$obj->idade."<br>"; //certo
                 }
                
              }
              $query= "SELECT ROUND(AVG(YEAR(CURDATE())-YEAR(dt_nascimento)),2) AS idadem FROM tb_aluno";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A idade média da sala é:".$obj->idadem."<br>"; //CERTO
                 }
                
              }
              $query= "SELECT count(YEAR(CURDATE())-YEAR(dt_nascimento)) AS idadep FROM tb_aluno where YEAR(CURDATE())-YEAR(dt_nascimento)=0;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos com 0 anos é:".$obj->idadep."<br>"; //CERTO
                 }
                
              }
              
              $query= "SELECT count(YEAR(CURDATE())-YEAR(dt_nascimento)) AS idadep FROM tb_aluno where YEAR(CURDATE())-YEAR(dt_nascimento)=16;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos com 16 anos é:".$obj->idadep."<br>"; //CERTO
                 }
                
              }
              $query= "SELECT count(YEAR(CURDATE())-YEAR(dt_nascimento)) AS idadep FROM tb_aluno where YEAR(CURDATE())-YEAR(dt_nascimento)=17;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos com 17 anos é:".$obj->idadep."<br>"; //CERTO
                 }
                
              }
              $query= "SELECT count(YEAR(CURDATE())-YEAR(dt_nascimento)) AS idadep FROM tb_aluno where YEAR(CURDATE())-YEAR(dt_nascimento)=18;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos com 18 anos é:".$obj->idadep."<br>"; //CERTO
                 }
                
              }
              $query= "SELECT count(YEAR(CURDATE())-YEAR(dt_nascimento)) AS idadep FROM tb_aluno where YEAR(CURDATE())-YEAR(dt_nascimento)=19;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos com 19 anos é:".$obj->idadep."<br>"; //CERTO
                 }
                
              }
              $query= "SELECT count(YEAR(CURDATE())-YEAR(dt_nascimento)) AS idadep FROM tb_aluno where YEAR(CURDATE())-YEAR(dt_nascimento)=20;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos com 20 anos é:".$obj->idadep."<br>"; //CERTO
                 }
                
              }
              $query= "SELECT count(YEAR(CURDATE())-YEAR(dt_nascimento)) AS idadep FROM tb_aluno where YEAR(CURDATE())-YEAR(dt_nascimento)=21;";
              if ($result=$mysqli->query($query)) {
                 while ($obj = $result->fetch_object())  {
                  echo "A quantidade de alunos com 21 anos é:".$obj->idadep."<br>"; //CERTO
                 }
                
              }
?>
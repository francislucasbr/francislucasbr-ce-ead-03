<?php

  $nomeAluno = $_POST ['aluno'];
  $nomeDisciplina = $_POST ['disciplina'];
  $nomeCurso = $_POST ['curso'];
  $imagem = $_POST ['imagem'];
  $notava1 = $_POST ['notava1'];
  $notava2 = $_POST ['notava2'];
  $notava3 = $_POST ['notava3'];
  $notaTrabalhos = $_POST ['notaTrabalhos'];
  $nomeProfessor = $_POST ['professor'];
  $nomeCoordenador = $_POST ['coordenador'];

  $notaTotal = $notava1 + $notava2 + $notava3 + $notaTrabalhos;

  $conceito = ' ';
  switch ($conceito) {
    case 0: if ($notaTotal >= 90) $conceito = 'Excelente';
    case 1: if ($notaTotal <= 89) $conceito = 'Ótimo';
    case 2: if ($notaTotal <=79) $conceito = 'Bom';
    case 3: if ($notaTotal <=69) $conceito = 'Ruim';
    case 4: if ($notaTotal <=59) $conceito = 'Péssimo';
  }
  
  $concluido ='';
  switch ($concluido) {
    case 0: if ($notaTotal < 60) $concluido ='<font color=red>NÃO</font> concluiu';
    case 1: if ($notaTotal >= 60) $concluido = 'concluiu';
  }


  echo '<h1 align = center><img src= '.$imagem.' alt=Faculdades Promove title=Faculdades Promove width=200px height=100px> </h1>';
  echo '<h2 align = center> DECLARAÇÃO </h2>';
  echo '<p align = center> Declaramos para os devidos fins que '.$nomeAluno.' '.$concluido.' satisfatoriamente as atividades da disciplina '.$nomeDisciplina.' do curso de '.$nomeCurso.'. </p> ';
  echo '<p align = center> Segue o desempenho de '.$nomeAluno.': </p>';

  echo '<table align = center border = 1>
          <tr>
            <td> Critério: </td> 
            <td> Valor total: </td>
            <td> Nota do aluno: </td>
            <td> Desempenho: </td>
          </tr>

          <tr>
            <td> Prova 1</td>
            <td> 15 </td>
            <td> '.$notava1.' </td>
            <td> '.$desempenho = round($notava1 * 100 / 15).'% </td>
          </tr>

          <tr>
            <td> Prova 2</td>
            <td> 25 </td>
            <td> '.$notava2.' </td>
            <td> '.$desempenho = round($notava2 * 100 / 25).'% </td>
          </tr>

          <tr>
            <td> Prova 3</td>
            <td> 35 </td>
            <td> '.$notava3.' </td>
            <td> '.$desempenho = round($notava3 * 100 / 35). '% </td>
          </tr>

          <tr>
            <td> Trabalhos</td>
            <td> 25 </td>
            <td> '.$notaTrabalhos.' </td>
            <td> '.$desempenho = round($notaTrabalhos * 100 / 25). '% </td>
          </tr>
        </table> <br> <br>';

  echo '<p align = center> Com este resultado, o conceito de '.$nomeAluno.' foi '.$conceito.', já que sua nota total foi de '.$notaTotal.' pontos. </p> <br>';
?>
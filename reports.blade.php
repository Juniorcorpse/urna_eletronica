<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <title>Document</title>
    <style>
        @media print{
        .flex-baner{
    
    /* background-image: url('images/capa.jpg'); */

  /* background-color: #cccccc; */
  /* height: 50px; */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /* position: a; */
}

}
.flex-baner img{
    display: block;
   
    
    
}
/* .header{
    position: fixed;
    top: -10px;
    left: 0;
    right: 0;
    width: 100%;
    text-align: center;
    height: 60px;
}
.header img{
    display: block;
    max-width: 100%;
    height: auto;
} */


/* .flex-baner{https://esic.sitespublicos.com.br/assets/img/logo2.png
    margin-bottom: 30px;
} https://esic.sitespublicos.com.br/capa.jpg*/
    </style>
</head>
<body>
    <div class="header">
        
          <img  src="https://esic.sitespublicos.com.br/capa.jpg" class="flex-baner img-responsive" />
       
    </div>

    <div class="container all-tickets-area app_main">
        
        
        <div class="ticket-area">
            
            <div class="ticket-big-box ticket-box all-user-ticket-box">
                
                <div class="box-title">
    
                    <div class="title-text">
    
                        <h3>Sistema Eletrônico de Serviço de<br/>  Informação ao Cidadão - e-SIC</h3>
    
                    </div>

                    

                        <form action="" method="get" class="app_form">
                            <div class="label_group-3">
                                <label class="label">
                                    <span class="legend">DATA INICAL:</span>
                                    <input type="date" name="start_date"/>
                                </label>
                                
                                <label class="label">
                                    <span class="legend">DATA FIM:</span>
                                    <input type="date" name="start_date"/>
                                </label>
                            
                                <label class="label">
                                    <button type="submit" title="" >pesquisar</button>
                                </label>
                            </div>
                            
                                
                            
                            
                        </form>
                        <div class="filtro">
    
                            <p>Periodo: Fev/2022 a Abr/2022</p>
        
                        </div>
                        <div class="greem">
                            <p>Nossos Chamados</p>
                        </div>
                        <div class="counts">
                            <div class="count-1">
                                total: (1)
                            </div>
                            <div class="count-2">
                                total: (2)
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table border="1" class="table table-hover  responsive-table">

                                <thead>
            
                                    <tr>
            
                                        <th>Protocolo</th>
            
                                        <th>Título</th>
            
                                        <th>Departamento</th>
            
                                        <th>Data</th>
            
                                        <th>Tipo</th>

                                        <th>Idade</th>
            
                                        <th>Status</th>
            
                                    </tr>
            
                                </thead>
                                <tbody>

                                </tbody>

                                <tfoot class="footer">
                                    <tr>    
                                        
                                        <?php
                                        /**
 * @param string|null $date
 * @param string $format
 * @return string  RETORNA O NOME DO MES POR EXTENSO: janeiro - ano, fevereiro - ano...
 */
function date_month_name(?string $date, string $format = "%d/%b/%Y"): string
{
	setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');
	$date = (empty($date) ? "now" : $date);
	return utf8_encode(strftime($format, strtotime($date)));
}
                                            //  date_default_timezone_set('America/Sao_Paulo');
                                        ?>
                                        <td colspan="7" class=" ">Relatório gerado em: <?= date_month_name("now"); ?> as <?= date('H:m a'); ?></td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
    
            </div>
        </div>
    
    </div>
<footer class="app_footer">
    <div class="rodape"><span class="t-l">
        
       
    </span>
    <span class="t-r">        
     <img src="https://esic.sitespublicos.com.br/footer.png" alt="webdos" sizes="" srcset="">
    </span></div>
        
</footer>
   
    
</body>
</html>


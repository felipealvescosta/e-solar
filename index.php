<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">

    <title> E-Solar -  Projeto de TCC</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Felipe Alves, Erika Nenes">
    <link rel="shortcut icon" href="img/favico.png">

    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Links do estilo -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

    <!--Grafico de Linha-->
    <script type="text/javascript">
              $(function () {
                  var chart;
                  $(document).ready(function() {
                      $.getJSON("data.php", function(json) {
                    
                      chart = new Highcharts.Chart({
                            chart: {
                                renderTo: 'grafico_linha',
                                type: 'line',
                                marginRight: 130,   
                                marginBottom: 25
                            },
                            title: {
                                text: 'Hora ',
                                x: -20 //center
                            },
                            subtitle: {
                                text: '---Sistema E-Solar ---',
                                x: -20
                            },
                            xAxis: {
                                categories: []
                            },
                            yAxis: {
                                title: {
                                    text: 'Voltagem'
                                },
                                plotLines: [{
                                    value: 0,
                                    width: 1,
                                    color: '#808080'
                                }]
                            },
                            tooltip: {
                                formatter: function() {
                                        return '<b>'+ this.series.name +'</b><br/>'+ this.x +': '+ this.y;
                                }
                            },
                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'top',
                                x: -10,
                                y: 100,
                                borderWidth: 0
                            },
                            series: json
                        });
                    });
                  
                  });
                  
              });
    </script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
  </head>



  <body>

    <!--Inicio menu topo-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container" >
            <div class="col-xs-2 logo">
              <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="img/logo-esolar1.png" height="130"></a>
            </div>
            </div>
            <div class="col-xs-7 slogan">
              <h2>e-Solar</h2> <small>Apresentação TCC</small>
            </div>
            <div class="col-xs-3">
              <div id="navbar" class="navbar-collapse collapse">
                  <a href="projeto.php" class="nav navbar-nav navbar-right"><span class="glyphicon glyphicon-paperclip"></span> Projeto</a>
              </div><!--/.navbar-collapse -->
            </div>
          </div>
    </nav>


    <!-- Inicio Conteudo -->
    <div class="container">

        <!--Grafico Linha-->
        <div class="row">
          <div class="col-xs-12 " >
              <div class="col-xs-1">
               
              </div>  
              
              <div class="col-xs-10">
                <h4 class="cor conteudo">Relatório</h4>
                    <div id="grafico_linha" style="min-width: 330px; height: 450px; margin: 0 auto">
                    <!--Grafico linha aqui--> 
                    </div>
                </div>

                <div class="col-xs-1">
                 
              </div> 
          </div>
        </div>
        <div class="alin" id="dia"></div> 

       <!-- Inicio Rodape-->
        <div class="row">
        <div class="container">
          <div class="col-xs-12 footer">
            <h6><span class="glyphicon glyphicon-play-circle"></span> Apresentação - Projeto de TCC - IFCE</h6> e-Solar | Iguatu - CE
          </div>
        </div> 
        </div>
        <!-- Fim rodape-->

  </div> <!-- /container -->


  </body>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/highcharts.js" type="text/javascript"></script>
    <script src="js/modules/exporting.js" type="text/javascript"></script>
     <!--<script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>-->

</html>
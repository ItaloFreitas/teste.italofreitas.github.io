<?PHP 
    //INCLUDE DO LAYOUT HEADER
    include('templates/header.php');?>
<body>
<?PHP include('templates/topo.php');?>
<div class="main">
  <div class="main-inner">
    <div class="container">
     <div class="row">
     
     		
            <div class="span12">
               <div class="alert alert-info">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Olá, Usuário!</strong> Seja Bem vindo ao <strong>WVA System</strong> !
               </div>
      		</div>
            
            
            <div class="span12">	      		
	      		<div id="target-1" class="widget">	      			
	      			<div class="widget-content">	      				
			      		<h1>WVA System - Apresentação</h1>			      		
			      		<p>O <strong>WVA System</strong> é um Sistema de Postagem desenvolvido pelo canal '<strong>Web Vídeo Aulas</strong>', cujo objetivo é gerenciar toda parte de postagens e
                        algumas funções internas do próprio sistema.	<br>
                        O Sistema foi desenvolvido na linguagem <strong>PHP</strong>, utilizando juntamente com a classe <strong>PDO</strong>. O banco de dados utilizado é o famoso <strong>MySQL</strong>.</p>
                        
                        <p>O desenvolvimento desse Sistema tem como objetivo, ensinar aos apaixonados por <strong>Web Design</strong>, ensinar uma maneira de desenvolver
                        um sistema p/ gerenciamento de dados, seja ele para um site instituicional, portal de notícias, loja virtual, etc.</p>
                        
                        <p>Espero que todos tenha um ótimo aprendizado, que vocês usem os conceitos aprendidos nesse projeto p/ aplicações em outros.</p>
                        <p><strong>Forte abraço, e até a próxima!</strong></p>
                        
		      		</div> <!-- /widget-content -->
	      		</div> <!-- /widget -->
      		</div><!-- span 12 -->
            
            
    </div><!-- row -->        
     
        
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Últimos Posts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Título da Postagem </th>
                    <th> Resumo</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
          
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<?PHP include('templates/footer.php');?>
</body>
</html>

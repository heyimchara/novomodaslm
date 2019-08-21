<h2>Listar Endereços</h2>
        
   <table class="table">
            <thead>
                <tr>
                    <th>IdEndereco</th>
                    <th>Ver Endereço</th>
                    <th>Deletar</th>
                    <td>Editar</td>
                </tr>
            </thead>
       
        <?php foreach ($enderecos as $endereco): ?> 
            <tr>
                <td><?=$endereco['idEndereco']?></td>
                <td><?=$endereco['logradouro']?></td>
                <td><a href="./endereco/ver/<?=$endereco['idEndereco']?>">Ver</a></td>
                <td><a href="./endereco/deletar/<?=$endereco['idEndereco']?>">Deletar</a></td>
                <td><a href="./endereco/editar/<?=$endereco['idEndereco']?>">Editar</a></td>
            </tr>
        <?php endforeach; ?>
   </table> 
        <br>
        <a href="./endereco/adicionar" class="btn btn-primary">Novo Endereço</a>
        <br><br>
        
        
        <a href="./cliente/cadastro">Voltar ao Cadastro do Cliente</a>
   
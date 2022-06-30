<!-- Conteúdo da página -->
<div class="container">
      <h1 class="mt-2">Relação de Categorias</h1>
      <hr>

<table class="table table-hover"> 
        <thead>
             <tr>
                 <th>Nome</th>
                 <th>Ações</th>
             </tr>
     </thead>
     <tbody> 
         <?php foreach($categorias as $categoria):?>
         <tr>
             <td><?= $categoria['nome'] ?></td>
             <td>
                 <a href="<?php echo $base_url . "?c=categoria&m=excluir&id=" . $categoria['idcategoria']?>" class="btn btn-danger" title="Excluir"><i class="fa-solid fa-trash-check"></i>Excluir</a>
                 <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-paintbrush"></i>Editar</a>
             </td>
         </tr>
         <?php endforeach;?>
     </tbody>
</table>

    </div>
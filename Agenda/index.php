<?php
    include_once("./templates/header.php")
?>    
<!--mensagens de aviso-->
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''):?>
            <p id="msg"><?=$printMsg?></p>
        <?php endif;?>
        <!--Título-->
        <h1 id="main-title">AGENDA CRUD DO TIAGO</h1>
        <?php if(count($contacts) > 0):?>
        <p>Hum... Temos contatos! Vamos dar uma olhada:</p>
            <!-- Criação de uma tabela para colocar os contatos-->
            <table class="table" id="contacts-table">
            <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Telefone</th>
                  <th scope="col"></th>
               </tr>
            </thead>
            <tbody>
               <?php foreach($contacts as $contact): ?>
                  <tr>
                     <td scope="row" class="col-id"><?= $contact['id'] ?></td>
                     <td scope="row"><?= $contact['name'] ?></td>
                     <td scope="row"><?= $contact['phone'] ?></td>
                     <td class="actions">
                        <a href="<?= $BASE_URL ?>show.php?id=<?= $contact['id'] ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact['id'] ?>"><i class="glyphicon glyphicon-edit"></i></a>
                        <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                           <input type="hidden" name="type" value="Delete">
                           <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                           <button type="submit" class="delete-btn"><i class="glyphicon glyphicon-trash"></i></button>
                        </form>
                     </td>
                  </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
            <!--Fim da tabela-->
        <?php else:?>
            <p id="empty-list-text">Hum... Ainda não temos contatos! <a href="<?=$BASE_URL?>create.php"> Crudiar um contato!</a></p>
        <?php endif;?>
    </div>
<?php
    include_once("./templates/footer.php")
?>
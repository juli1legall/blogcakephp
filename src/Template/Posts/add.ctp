<h1>Ajouter un article</h1>
<?php
  echo $this->Form->create($post);
  echo $this->Form->control('title');
  echo $this->Form->control('content',['rows'=>'3']);
  echo $this->Form->button(__('Sauvegarder l\'article'));
  echo $this->Form->end();
    ?>

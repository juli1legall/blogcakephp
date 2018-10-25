<h1>Liste des posts</h1>
<p>Les articles déjà postés...</p>
<p><?php echo $this->Html->link('Ajouter un article',['action'=>'add']);?></p>
</p>
<table>
    <tr>
      <td><b>id</b></td>
      <td><b>title</b></td>
      <td><b>content</b></td>
      <td><b>created</b></td>
      <td><b>modified</b></td>
      <td><b>actions</b></td>
    </tr>
<?php foreach ($posts as $post): ?>
  <tr>
    <td><?php echo $post->id; ?></td>
    <td><?php echo $post->title; ?></td>
    <td><?php echo $post->content; ?></td>
    <td><?php echo $post->created; ?></td>
    <td><?php echo $post->modified; ?></td>
    <td>
      <?php echo $this->Html->link('Edit',['action' =>'edit',$post->id]);
            echo " / ";
            echo $this->Html->link('Supprimer',['action' =>'delete',$post->id]);
      ?>
  </tr>
<?php endforeach; ?>
</table>

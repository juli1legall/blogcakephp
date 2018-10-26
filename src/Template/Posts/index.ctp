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
      <?php if($post->published==1){
        echo $this->Html->link('Unpublish',['action' =>'publish','?'=>['post'=>$post->id,'publish'=>false]]);
      }else{
        echo $this->Html->link('Publish',['action' =>'publish','?'=>['post'=>$post->id,'publish'=>true]]);
      }
            echo " / ";
            echo $this->Html->link('Edit',['action' =>'edit',$post->id]);
            echo " / ";
            echo $this->Html->link('Supprimer',['action' =>'delete',$post->id],['confirm'=>'Êtes-vous sûr de vouloir dépublier cet article ?']);
      ?>
  </tr>
<?php endforeach; ?>
</table>

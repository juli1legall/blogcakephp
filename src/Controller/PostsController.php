<?php
namespace App\Controller;

class PostsController extends AppController{

  public function initialize(){
    parent::initialize();

    $this->loadComponent('Paginator');
    $this->loadComponent('Flash');
  }

  public function index(){
    $posts = $this->Paginator->paginate($this->Posts->find());
    $this->set(compact('posts'));
  }

  public function edit($id = null){
    $post = $this->Posts->findById($id)->firstOrFail();
    if($this->request->is(['post','put'])){
      $post = $this->Posts->patchEntity($post,$this->request->getData());
      if($this->Posts->save($post)){
        $this->Flash->success(__('Votre article a été sauvegardé'));
        return $this->redirect(['action'=>'index']);
      }
    }
    $this->set('post',$post);
  }

  public function publish(){
    $id = $this->request->getQuery('post');
    $publish = $this->request->getQuery('publish');

    $post = $this->Posts->findById($id)->firstOrFail();
    if($publish == 0){
      $post->published=0;
    }elseif ($publish =1) {
      $post->published=1;
    }else{
      throw new \Exception("Valeur de publish inconnue", 1);
    }
    if($this->Posts->save($post)){
      $this->Flash->success(__('Votre article a été sauvegardé'));
      return $this->redirect(['action'=>'index']);
    }
  }

  public function delete($id = null){
    //$this->request->allowMethod(['post','delete']);
    $post = $this->Posts->findById($id)->firstOrFail();
    if($this->Posts->delete($post)){
      $this->Flash->success('L\'article {0} a été supprimé.',$post->id);
      return $this->redirect(['action'=>'index']);
    }
  }

  public function add(){
    $post = $this->Posts->newEntity();
    if($this->request->is('post')){
      $post = $this->Posts->patchEntity($post,$this->request->getData());
      if($this->Posts->save($post)){
        $this->Flash->success(__('Votre article a été sauvegardé'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Impossible d\'ajouter votre post'));
    }
    $this->set('post',$post);
  }
}

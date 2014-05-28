<?php
 class DocumentController extends BaseController
 {
    public function showState()
    {
      
  $title='Document';
      $results = DB::select('select * from users where id = 1'); 
      // return 'state of the document';
      $view=View::make('document')->with('title',$title);
      $view->id=5;
      return $view;
    }

 }

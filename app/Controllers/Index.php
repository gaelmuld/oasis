<?php namespace App\Controllers;

class Index extends BaseController
{
	public function index()
	{
		$data=[
			'idp'=>'acceuil',
			'view' =>"index",
			'head'=>array(
				'title' => 'coucou'
			),
			'body'=>array(
				'title'=> 'salut'
			)
		];
		return view('template/main',$data);
		
	}

	//--------------------------------------------------------------------

}

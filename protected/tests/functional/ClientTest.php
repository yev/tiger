<?php

class ClientTest extends WebTestCase
{
	public $fixtures=array(
		'clients'=>'Client',
	);

	public function testShow()
	{
		$this->open('?r=client/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=client/create');
	}

	public function testUpdate()
	{
		$this->open('?r=client/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=client/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=client/index');
	}

	public function testAdmin()
	{
		$this->open('?r=client/admin');
	}
}

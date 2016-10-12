<?php
namespace CassandraPHP\Response;
use CassandraPHP\Protocol\Frame;

class Authenticate extends Response {
	public function getData(){
		return unpack('n', $this->getBody())[1];
	}
}

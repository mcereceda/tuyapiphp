<?php

	namespace tuyapiphp;

	Class Users
	{
		public function __construct( $config, $token )
		{
			$this->_config = $config;
			$this->_token = $token;
		}
		
		public function __call( $name , $args = [ ] )
		{
			$request = new Caller( $this->_config , $this->_endpoints , $this->_token );
			return $request->send( $name , $args );
		}
		
		protected $_token = '';

		protected $_endpoints = 
		[
			'get_users'		=> '/v1.0/iot-02/users',
			'get_usersb'	=> '/v1.1/iot-02/users',
			'get_user'		=> '/v1.0/iot-02/users/{user_id}'
		];
	}
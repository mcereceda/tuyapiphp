<?php

	namespace tuyapiphp;

	Class Mqtt
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
			'post_mqtt_config'		=> '/v1.0/open-hub/access/config'
		];
	}
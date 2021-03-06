<?php

/**
 *	Requests
 *
 *	@author Anton Valle
 */
namespace searchMB;

class Requests {

	public function curl( $url ) {

		if ( Security::validate_url( $url ) ? true : false ) {

			$curl = curl_init();
			curl_setopt( $curl, CURLOPT_URL, $url );
			curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
			$result = curl_exec( $curl );
			curl_close( $curl );
			return $result;
			
		} else {

			return false;

		}

	}

}
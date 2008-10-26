<?php
class StylesModel extends ProjectBaseModel implements AgaviISingletonModel {

	public function getUserStyles($uid) {
		$css_file = AgaviConfig::get('core.app_dir')."/pub/include/css/user/$uid.css"; 
		//die($css_file);
		if( !is_file( $css_file )) {
			return '';
		}
		$css = file_get_contents($css_file);
		return $css === false ? '' : $css;
	}
}

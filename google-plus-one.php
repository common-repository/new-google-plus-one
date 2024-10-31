<?

/*
Plugin Name: New Google Plus One
Plugin URI: http://www.video2mp3.de/
Description: The Google Plus One Plugin adds to every post a Google Plus One Button.
Version: 1.1
Author: Michael Proft
Author URI: http://www.video2mp3.de/
License: GPL2
*/

/*  Copyright 2011 Michael Proft  (email : info@video2mp3.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class Social {
	
   public function __construct() {
   	
   }
   
   public function Rep() {
   	add_filter('the_content', array($this, 'Add'));
   }
   
   public function Add($wordpresscontent=false) {
   	$Container = '<div id="social">[BUTTON]</div>';
   	$GB        = '<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang:\'en\'}</script>';
   	$GB       .= '<g:plusone></g:plusone>';
   	$wordpresscontent .= str_replace('[BUTTON]', $GB, $Container);
      return $wordpresscontent;	
   }
   
   public function __destruct() {
   	
   }
	
}

$Class = new Social();
$Class->Rep();

?>
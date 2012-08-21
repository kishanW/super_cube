<?php

function super_cube_preprocess_html( &$vars ) {
 
  $vars['greeting'] = "GREETINGS";

}

function super_cube_preprocess_page(&$vars){

	$vars['test'] = "The test page pre";
}
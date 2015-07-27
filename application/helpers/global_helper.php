<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*if(!function_exists('create_breadcrumb')){
	function create_breadcrumb(){
		  $ci = &get_instance();
		  $i=1;
		  $uri = $ci->uri->segment($i);
		  $link = '<ul class="breadcrumb">';
		  
		  while($uri != ''){
			$prep_link = '';
		  for($j=1; $j<=$i;$j++){
			$prep_link .= $ci->uri->segment($j).'/';
		  }
		 
		  if($ci->uri->segment($i+1) == ''){
			$link.='<li class="active">';
			$link.=ucfirst($ci->uri->segment($i)).'</li> ';
		  }else{
			$link.='<li><a class="breadcrumb_anchor" href="'.base_url($prep_link).'">';
			$link.=ucfirst($ci->uri->segment($i)).'</a></li> ';
		  }
		 
		  $i++;
		  $uri = $ci->uri->segment($i);
		  }
			$link .= '</ul>';
			return $link;
	  }
}*/

if(!function_exists('create_breadcrumb')){
	function create_breadcrumb($arr_menu){
	$titles = count($arr_menu['title']);
	$urls = count($arr_menu['url']);
	$i =0;
	$prep_link = '';
	$link = '<ul class="breadcrumb">';
	foreach($arr_menu['title'] as $title)
	{
		if ($titles - $i == 1)
		{
			$link .= '<li class="active">'.$arr_menu['title'][$i].'</li>';
		}
		else{
			$link .= '<li><a class="breadcrumb_anchor" href="'.base_url($arr_menu['url'][$i]).'">'.$arr_menu['title'][$i].'</a></li>';
		}
		$i++;
	}
	$link .= '</ul>';
	return $link;
	}
}

if(!function_exists('abreadcrumbs')){
	function abreadcrumbs($arr_menu){
	$titles = count($arr_menu['title']);
	$urls = count($arr_menu['url']);
	$i =0;
	$prep_link = '';
	$link = '<ul class="breadcrumb">';
	foreach($arr_menu['title'] as $title)
	{
		if ($titles - $i == 1)
		{
			$link .= '<li class="active">'.$arr_menu['title'][$i].'</li>';
		}
		else{
			$link .= '<li><a class="breadcrumb_anchor" href="'.base_url($arr_menu['url'][$i]).'">'.$arr_menu['title'][$i].'</a></li>';
		}
		$i++;
	}
	$link .= '</ul>';
	return $link;
	}
}
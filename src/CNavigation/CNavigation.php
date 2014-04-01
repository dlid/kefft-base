<?php
/**
 * CNavigtion to easily generate a navigation menu
 * 
 * 2014-03-31: Added option for active item <David Lidström>
 */
class CNavigation {
  public static function GenerateMenu($items, $activeItemId = null) {
    $html = "<nav>\n";
    foreach($items as $id => $item) {
    	$class = ($id == $activeItemId) ? ' class="active"' : '';
      $html .= "<a href='{$item['url']}'{$class}>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
};
<?php
class PluginElementStyle{
  public function element_background_cover($element, $data = array()){
    /**
     * 
     */
    $element = new PluginWfArray($element);
    $data = new PluginWfArray($data);
    /**
     *
     */
    if(is_string($element->get('attribute/style'))){
      $element->set('attribute/style', null);
    } 
    /**
     * 
     */
    $element->set('attribute/style/background', "url(". wfSettings::replaceDir($data->get('src')) .") no-repeat center center fixed");
    $element->set('attribute/style/-webkit-background-size', "cover");
    $element->set('attribute/style/-moz-background-size', "cover");
    $element->set('attribute/style/-o-background-size', "cover");
    $element->set('attribute/style/background-size', "cover");
    /**
     * 
     */
    return $element->get();
  }
}

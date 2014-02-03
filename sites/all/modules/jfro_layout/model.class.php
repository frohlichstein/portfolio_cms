<?php

class Meta
{

  public function __call($method, $args){
    $property = "field_" . $method;
    return $this->generate_field_value($this->fields[$property], $args);
  }

  public function generate_field_value($field, $args = NULL){
    $value = '';
    $field_array = $this->node->$field['field_name'];
    // check for any image widget
    if(in_array($field['widget']['type'], array('image_image', 'image_miw'))){
      $value = theme_image_style(array(
        'style_name' => $args[0],
        'path' => $field_array['und'][0]['uri'],
        'width' => NULL,
        'height' => NULL
      ));
    }else{
      $value = $field_array['und'][0]['value'];
    }
    return $value;
  }

}

class Model extends Meta {

  function __construct($node){
    $this->node = $node;
    $this->fields = field_info_instances("node", $this->node->type);
    $this->title = $this->title();
    $this->path = $this->path();

    foreach($this->fields as $field){
      $type = $field['widget']['type'];
      $name = str_replace("field_", "", $field['field_name']);
      if($type != 'image_image'){
        $this->$name = $this->generate_field_value($field);
      }
    }

  }

  function title(){
    return $this->node->title;
  }

  function path($absolute = FALSE){
    if($absolute){
      global $base_url;
      return $base_url . '/' . drupal_get_path_alias('node/' . $this->node->nid);
    }else{
      return '/' . drupal_get_path_alias('node/' . $this->node->nid);
    }
  }

}

?>
<?php
class TemplatePreviewImagesConfig extends ModuleConfig {
  public function getDefaults() {
    return array(
      'height' => 200,
    );
  }
  public function getInputfields() {
    $inputfields = parent::getInputfields();

    $f = $this->modules->get('InputfieldInteger');
    $f->attr('name', 'height');
    $f->label = 'Thumbnail height';
    $f->notes = 'Leave one field blank to keep aspect ratio';
    $f->columnWidth = '50%';
    $inputfields->add($f);

    $f = $this->modules->get('InputfieldInteger');
    $f->attr('name', 'width');
    $f->label = 'Thumbnail width';
    $f->notes = 'Leave one field blank to keep aspect ratio';
    $f->columnWidth = '50%';
    $inputfields->add($f);

    return $inputfields;
  }
}
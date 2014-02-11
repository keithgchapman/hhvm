<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 *  Implemented by classes for local variables, parameters and properties.
 */
trait Variable /*implements IVariable*/ {
  private /*?mixed*/ $value;

  /**
   * The runtime value of this variable.
   * This may be known if the variable was obtained via
   * runtime reflection.
   */
  public function getValue() /*: mixed*/ {
    if ($this->value === null) {
      throw new \Exception("Value is not initialized");
    }
    return $this->value;
  }
  /**
   * The runtime value of this variable.
   * This may be known if the variable was obtained via
   * runtime reflection.
   */
  public function setValue(/*mixed*/ $value) /*: this*/ {
    $this->value = $value;
    return $this;
  }

}
}

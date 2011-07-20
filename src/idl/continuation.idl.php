<?php
/**
 * Automatically generated by running "php schema.php xml".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => 'hphp_create_continuation',
    'return' => array(
      'type'   => 'Continuation',
    ),
    'args'   => array(
      array(
        'name'   => 'clsname',
        'type'   => String,
      ),
      array(
        'name'   => 'funcname',
        'type'   => String,
      ),
      array(
        'name'   => 'origFuncName',
        'type'   => String,
      ),
      array(
        'name'   => 'args',
        'type'   => VariantMap,
        'value'  => 'null_array',
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => 'hphp_pack_continuation',
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => 'continuation',
        'type'   => Object,
      ),
      array(
        'name'   => 'label',
        'type'   => Int64,
      ),
      array(
        'name'   => 'value',
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => 'hphp_unpack_continuation',
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => 'continuation',
        'type'   => Object,
      ),
    ),
  ));

///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

BeginClass(
  array(
    'name' => 'Continuation',
    'ifaces' => array('Iterator'),
    'footer' => <<<EOT
protected:
  virtual bool php_sleep(Variant &ret);
private:
  const CallInfo *m_callInfo;
  void *m_extra;
  bool m_isMethod;
EOT
,
  )
);

DefineFunction(
  array(
    'name'   => '__construct',
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => 'func',
        'type'   => Int64,
      ),
      array(
        'name'   => 'extra',
        'type'   => Int64,
      ),
      array(
        'name'   => 'isMethod',
        'type'   => Boolean,
      ),
      array(
        'name'   => 'origFuncName',
        'type'   => String,
      ),
      array(
        'name'   => 'obj',
        'type'   => Variant,
        'value'  => 'null',
      ),
      array(
        'name'   => 'args',
        'type'   => VariantMap,
        'value'  => 'null_array',
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => 'update',
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => 'label',
        'type'   => Int64,
      ),
      array(
        'name'   => 'value',
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => 'done',
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'getLabel',
    'return' => array(
      'type'   => Int64,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'num_args',
    'return' => array(
      'type'   => Int64,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'get_args',
    'return' => array(
      'type'   => VariantVec,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'get_arg',
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => 'id',
        'type'   => Int64,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => 'current',
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'key',
    'return' => array(
      'type'   => Int64,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'next',
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'rewind',
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'valid',
    'return' => array(
      'type'   => Boolean,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'send',
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => 'v',
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => 'receive',
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => 'getOrigFuncName',
    'return' => array(
      'type'   => String,
    ),
  ));

DefineProperty(
  array(
    'name'  => 'obj',
    'type'  => Object,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'args',
    'type'  => VariantVec,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'label',
    'type'  => Int64,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'done',
    'type'  => Boolean,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'index',
    'type'  => Int64,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'value',
    'type'  => Variant,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'running',
    'type'  => Boolean,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'received',
    'type'  => Variant,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'origFuncName',
    'type'  => String,
    'flags' => IsPrivate,
  ));

DefineProperty(
  array(
    'name'  => 'called_class',
    'type'  => String,
    'flags' => IsPrivate,
  ));

DefineFunction(
  array(
    'name'   => '__clone',
    'return' => array(
      'type'   => Variant,
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => 'GenericContinuation',
    'parent' => 'Continuation',
  )
);

DefineFunction(
  array(
    'name'   => '__construct',
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => 'func',
        'type'   => Int64,
      ),
      array(
        'name'   => 'extra',
        'type'   => Int64,
      ),
      array(
        'name'   => 'isMethod',
        'type'   => Boolean,
      ),
      array(
        'name'   => 'origFuncName',
        'type'   => String,
      ),
      array(
        'name'   => 'vars',
        'type'   => VariantMap,
      ),
      array(
        'name'   => 'obj',
        'type'   => Variant,
        'value'  => 'null',
      ),
      array(
        'name'   => 'args',
        'type'   => VariantMap,
        'value'  => 'null_array',
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => 'update',
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => 'label',
        'type'   => Int64,
      ),
      array(
        'name'   => 'value',
        'type'   => Variant,
      ),
      array(
        'name'   => 'vars',
        'type'   => VariantMap,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => 'getVars',
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

DefineProperty(
  array(
    'name'  => 'vars',
    'type'  => VariantMap,
    'flags' => IsPrivate,
  ));

EndClass();

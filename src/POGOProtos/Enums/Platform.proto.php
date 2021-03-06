<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Enums {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Enums.Platform
  abstract class Platform extends ProtobufEnum {
    const UNSET = 0;
    const IOS = 1;
    const ANDROID = 2;
    const OSX = 3;
    const WINDOWS = 4;

    public static $_values = array(
      0 => "UNSET",
      1 => "IOS",
      2 => "ANDROID",
      3 => "OSX",
      4 => "WINDOWS",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

}
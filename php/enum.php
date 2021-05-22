<?php
    abstract class BasicEnum {
        private static $constCacheArray = NULL;

        private static function getConstants() {
            if (self::$constCacheArray == NULL) {
                self::$constCacheArray = [];
            }
            $calledClass = get_called_class();
            if (!array_key_exists($calledClass, self::$constCacheArray)) {
                $reflect = new ReflectionClass($calledClass);
                self::$constCacheArray[$calledClass] = $reflect->getConstants();
            }
            return self::$constCacheArray[$calledClass];
        }

        public static function isValidName($name, $strict = false) {
            $constants = self::getConstants();

            if ($strict) {
                return array_key_exists($name, $constants);
            }

            $keys = array_map('strtolower', array_keys($constants));
            return in_array(strtolower($name), $keys);
        }

        public static function isValidValue($value, $strict = true) {
            $values = array_values(self::getConstants());
            return in_array($value, $values, $strict);
        }

        public static function parse($value){
            $constants = self::getConstants();
            $retval = 1;
            if(self::isValidName($value)){
                $retval = $constants[$value];
            }
            return $retval;
        }
    }

    abstract class ENUM_CITY extends BasicEnum {
        const Cebu = 1;
        const Mandaue = 2;
        const Lapulapu = 3;
        const Toledo = 4;
        const Danao = 5;
        const Talisay = 6;

    }

    abstract class ENUM_SPECIES extends BasicEnum {
        const DOG = 1;
        const CAT = 2;
        const BIRD = 3;
        const REPTILE = 4;
        const RABBIT = 5;
    }

    abstract class ENUM_GENDER extends BasicEnum {
        const Male = 1;
        const Female = 2;
    }

    abstract class ENUM_AGE extends BasicEnum {
        const Puppy = 1;
        const Young = 2;
        const Adult = 3;
        const Senior = 4;
    }

    abstract class ENUM_SIZE extends BasicEnum {
        const Small = 1;
        const Medium = 2;
        const Large = 3;
    }

    abstract class ENUM_STATUS{
        const Open = 1;
        const Adopted = 2;
    }
?>
<?php 
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: ping.proto 
//   Date: 2016-02-19 02:04:26 


namespace  {

         
    class Ping extends \DrSlump\Protobuf\Message {
                                                             
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.Ping');

                        // required int32 server_log_id = 1 
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "server_log_id";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_INT32;

            $descriptor->addField($f);
                        // required bytes session = 2 
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "session";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);
                        // required bytes nonce = 3 
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "nonce";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);
            
            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }


                
        /**
         * Check if "server_log_id" has a value
         *
         * @return boolean
         */
        public function hasServerLogId()
        {
            return isset($this->server_log_id);
        }

        /**
         * Clear "server_log_id" value
         */
        public function clearServerLogId()
        {
            unset($this->server_log_id);
        }

        
        /**
         * Get "server_log_id" value
                  * @return \int                  *
         *
         */
        public function getServerLogId()
        {
                        return $this->server_log_id;
                    }

        /**
         * Set "server_log_id" value
         *
         * @param \int $value
         */
        public function setServerLogId($value)
        {
            return $this->server_log_id = $value;
        }

        
                
        /**
         * Check if "session" has a value
         *
         * @return boolean
         */
        public function hasSession()
        {
            return isset($this->session);
        }

        /**
         * Clear "session" value
         */
        public function clearSession()
        {
            unset($this->session);
        }

        
        /**
         * Get "session" value
                  * @return \string                  *
         *
         */
        public function getSession()
        {
                        return $this->session;
                    }

        /**
         * Set "session" value
         *
         * @param \string $value
         */
        public function setSession($value)
        {
            return $this->session = $value;
        }

        
                
        /**
         * Check if "nonce" has a value
         *
         * @return boolean
         */
        public function hasNonce()
        {
            return isset($this->nonce);
        }

        /**
         * Clear "nonce" value
         */
        public function clearNonce()
        {
            unset($this->nonce);
        }

        
        /**
         * Get "nonce" value
                  * @return \string                  *
         *
         */
        public function getNonce()
        {
                        return $this->nonce;
                    }

        /**
         * Set "nonce" value
         *
         * @param \string $value
         */
        public function setNonce($value)
        {
            return $this->nonce = $value;
        }
    }
}


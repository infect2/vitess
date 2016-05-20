<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: query.proto

namespace Vitess\Proto\Query {

  class BeginExecuteBatchResponse extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Vtrpc\RPCError */
    public $error = null;
    
    /**  @var \Vitess\Proto\Query\QueryResult[]  */
    public $results = array();
    
    /**  @var int */
    public $transaction_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'query.BeginExecuteBatchResponse');

      // OPTIONAL MESSAGE error = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "error";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtrpc\RPCError';
      $descriptor->addField($f);

      // REPEATED MESSAGE results = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "results";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Query\QueryResult';
      $descriptor->addField($f);

      // OPTIONAL INT64 transaction_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "transaction_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <error> has a value
     *
     * @return boolean
     */
    public function hasError(){
      return $this->_has(1);
    }
    
    /**
     * Clear <error> value
     *
     * @return \Vitess\Proto\Query\BeginExecuteBatchResponse
     */
    public function clearError(){
      return $this->_clear(1);
    }
    
    /**
     * Get <error> value
     *
     * @return \Vitess\Proto\Vtrpc\RPCError
     */
    public function getError(){
      return $this->_get(1);
    }
    
    /**
     * Set <error> value
     *
     * @param \Vitess\Proto\Vtrpc\RPCError $value
     * @return \Vitess\Proto\Query\BeginExecuteBatchResponse
     */
    public function setError(\Vitess\Proto\Vtrpc\RPCError $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <results> has a value
     *
     * @return boolean
     */
    public function hasResults(){
      return $this->_has(2);
    }
    
    /**
     * Clear <results> value
     *
     * @return \Vitess\Proto\Query\BeginExecuteBatchResponse
     */
    public function clearResults(){
      return $this->_clear(2);
    }
    
    /**
     * Get <results> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Query\QueryResult
     */
    public function getResults($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <results> value
     *
     * @param \Vitess\Proto\Query\QueryResult $value
     * @return \Vitess\Proto\Query\BeginExecuteBatchResponse
     */
    public function setResults(\Vitess\Proto\Query\QueryResult $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <results>
     *
     * @return \Vitess\Proto\Query\QueryResult[]
     */
    public function getResultsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <results>
     *
     * @param \Vitess\Proto\Query\QueryResult $value
     * @return \Vitess\Proto\Query\BeginExecuteBatchResponse
     */
    public function addResults(\Vitess\Proto\Query\QueryResult $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <transaction_id> has a value
     *
     * @return boolean
     */
    public function hasTransactionId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <transaction_id> value
     *
     * @return \Vitess\Proto\Query\BeginExecuteBatchResponse
     */
    public function clearTransactionId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <transaction_id> value
     *
     * @return int
     */
    public function getTransactionId(){
      return $this->_get(3);
    }
    
    /**
     * Set <transaction_id> value
     *
     * @param int $value
     * @return \Vitess\Proto\Query\BeginExecuteBatchResponse
     */
    public function setTransactionId( $value){
      return $this->_set(3, $value);
    }
  }
}

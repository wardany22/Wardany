<?php
namespace App\Http\Requests;

use App\Database\Models\Contract\Model;

class Validation {
    private string $input;
    private $value;
    private array $errors = [];
    private array $oldValues = [];

    /**
     * Get the value of input
     */ 
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Set the value of input
     *
     * @return  self
     */ 
    public function setInput($input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;
        $this->oldValues[$this->input] = $value; // ['first_name' => 'galal']  
        return $this;
    }

    /**
     * Get the value of errors
     */ 
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Get the value of error
     */ 
    public function getError(string $input) :?string
    {
        if(isset($this->errors[$input])){
            foreach($this->errors[$input] AS $error){
                return $error; // first name is required
            }
        }
        return null;
    }

    public function getMessage(string $input)
    {
        return "<p class='text-danger font-weight-bold'> ".ucwords(str_replace('_',' ',$this->getError($input)))." </p>";
    }
    /**
     * Get the value of oldValues
     */ 
    public function getOldValue(string $input) :?string
    {
        return $this->oldValues[$input] ?? null;
    }
    /**
     * Set the value of errors
     *
     * @return  self
     */ 
    public function setErrors($errors)
    {
        $this->errors = $errors;

        return $this;
    }

    public function required()
    {
        if(empty($this->value)){
            $this->errors[$this->input][__FUNCTION__] = "{$this->input} is required";
        }
        return $this;
    }

    public function max(int $max)
    {
        if(strlen($this->value) > $max){
            $this->errors[$this->input][__FUNCTION__] = "{$this->input} must be less than {$max} characters";
        }
        return $this;
    }

    public function min(int $min)
    {
        if(strlen($this->value) < $min){
            $this->errors[$this->input][__FUNCTION__] = "{$this->input} must be greater than {$min} characters";
        }
        return $this;
    }

    public function in(array $values)
    {
        if(! in_array($this->value,$values)){
            $this->errors[$this->input][__FUNCTION__] = "{$this->input} must be ".implode(',',$values);
        }
        return $this;
    }
   
    public function digits(int $digits)
    {
        if(strlen($this->value) != $digits){
            $this->errors[$this->input][__FUNCTION__] = "{$this->input} Must be {$digits} digits";
        }
        return $this;
    }
    public function regex(string $pattern,string $message = "")
    {
        if(! preg_match($pattern,$this->value)){
            $this->errors[$this->input][__FUNCTION__] =  $message ? $message : "{$this->input} Invalid";
        }
        return $this;
    }

    public function confirmed(string $confirmedValue)
    {
        if($this->value != $confirmedValue){
            $this->errors[$this->input][__FUNCTION__] = "{$this->input} Not Confirmed";
        }
        return $this;
    }

    // unique function used it in column selected

    public function unique(string $table,string $column)
    {
        $query = "SELECT * FROM {$table} WHERE {$column} = ?";
        $model = new Model;
        $stmt = $model->conn->prepare($query);
        $stmt->bind_param('s',$this->value);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows >= 1){
            $this->errors[$this->input][__FUNCTION__] = "{$this->input} Already Exists";
        }
        return $this;
    }
      

    // exist method used it to know this value in table or not


    public function exists(string $table,string $column)
    {
        $query = "SELECT * FROM {$table} WHERE {$column} = ?";
        $model = new Model;
        $stmt = $model->conn->prepare($query);
        $stmt->bind_param('s',$this->value);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows == 0){
            $this->errors[$this->input][__FUNCTION__] = "{$this->input} Not Exists In Our Records";
        }
        return $this;
    }

    
    

}


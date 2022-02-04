<?php


namespace App\classes;
//use App\classes\User;

class Series{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
   // protected $user;
    protected $oddEven;

    public function __construct($post=null){
//        echo'<pre';
//        print_r($post);
//        exit();

        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
        if(isset($post['odd_even'])){
            $this->oddEven = $post['odd_even'];
        }
//        echo $this->oddEven;
//        exit;
    }

    public function index(){
//        $this->user = new User();
//        $this->user->getAllUser();
        header('Location: pages/index.php');
}
    public function makeSeries(){
        if($this->startingNumber > $this->endingNumber){
            return $this->bigToSmallSeries();
        }else{
            if($this->oddEven == 'odd'){
                return $this->smallToBigOddSeries();

            }else if($this->oddEven == 'even'){
                return $this->smallToBigEvenSeries();

            }else{
                return $this->smallToBigSeries();
            }
        }
    }
    protected function smallToBigOddSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++){
            if($this->i%2 != 0){
                $this->result .= $this->i. ' ';
            }
        }
        return $this->result;
    }
    protected function smallToBigEvenSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++){
            if($this->i%2 == 0){
                $this->result .= $this->i. ' ';
            }
        }
        return $this->result;
    }

    protected function smallToBigSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++){
            $this->result .= $this->i. ' ';
        }
        return $this->result;
    }
    protected function bigToSmallSeries(){
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--){
            $this->result .= $this->i. ' ';
        }
        return $this->result;
    }

}
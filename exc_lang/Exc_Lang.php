<?php
class Exc_Lang{
    private $tokens ;
    private $jumps ;
    public function __construct($src){
        $words = $this->Lang_Tokens() ;
        preg_match_all($words,$src,$tokens) ;
        //print_r($tokens) ;
        $this->tokens = $tokens[0] ;//処理開始
        //ループ処理
        $this->jump_tokens($this->tokens) ;
    }
    private function Lang_Tokens(){
        return '/'.implode("|",
                       array(
                             'えくにー',
                             'ぺろ',
                             'もこ',
                             'つる',
                             'にーちゃん',
                             'はたて',
                             'コスなう',
                             'コス解除'
                             )).'/' ;
    }
    public function run(){
        //Use var
        $memory = array() ;
        $pt = 0 ;
        $addr = 0 ;
        $Tokens = 0 ;
        echo "<pre>" ;
        print_r($this->tokens) ;
        echo "</pre>" ;
        while($Tokens < sizeof($this->tokens)){
            switch($this->tokens[$Tokens]){
                /*ポインタの値操作*/
            case "えくにー":
                if($memory[$addr] == 0){
                    $memory[$addr] = 0 ;
                    }
                $memory[$addr]++ ;
                break ;
            case "ぺろ":
                $memory[$addr]-- ;
                break ;
                /*アドレス操作*/
            case "はたて"://アドレス1をすすめる
                $addr++ ;
                break;
            case "にーちゃん" ://アドレスを1戻す
                $addr-- ;
                break ;

                /*入出力*/

            case "もこ":
                break ;

            case "つる":
                echo chr($memory[$addr]) ;
                break ;
                /*ループ系*/
            case "コスなう"://対応する、コス解除フラグへ
                if($memory[$addr] == NULL){
                    $Tokens = $this->jumps[$addr] ;
                    echo $addr.":Start \n" ;                    
                }else{
                    echo $addr.":Not Start\n" ;                    
                }
            case "コス解除"://対応する、コスなうフラグへ
                if($memory[$addr] != 0){
                    echo $addr.":Not Break\n" ;                    
                }else{
                    echo $addr.":Break\n" ;                    
                }

                break ;
            }
            $Tokens++ ;
        }
        print_r($memory) ;
    }

    private function jump_tokens($tokens){//ループ解析
        $stacks = array() ;

        $Jump_Start = "コスなう" ;
        $Jump_End = "コス解除" ;

        foreach($tokens as $addr => $token){
            if($token == $Jump_Start){
                array_push($stacks,$addr) ;
            }elseif($token == $Jump_End){
                $J_From = array_pop($stacks) ;
                $J_To = $addr ;
                $this->jumps[$J_From] = $J_To ;
                $this->jumps[$J_To] = $J_From ;
            }
        }
        
    }
}
?>
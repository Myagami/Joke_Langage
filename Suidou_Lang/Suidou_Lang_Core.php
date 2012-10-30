<?php
class Suidou_Lang{
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
                             "大泉君",
                             "ミスター",
                             "藤村くん",
                             "うれしー",
                             "サイコロ",
                             "原付",
                             "はかた号",
                             "行きです。"
                             )).'/' ;
    }
    public function Travel(){
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
            case "大泉":
                if($memory[$addr] == 0){
                    $memory[$addr] = 0 ;
                    }
                $memory[$addr]++ ;
                break ;
            case "ミスター":
                $memory[$addr]-- ;
                break ;
                /*アドレス操作*/
            case "藤村君"://アドレス1をすすめる
                $addr++ ;
                break;
            case "うれしー" ://アドレスを1戻す
                $addr-- ;
                break ;

                /*入出力*/

            case "サイコロ":
                break ;

            case "原付":
                echo chr($memory[$addr]) ;
                break ;
                /*ループ系*/
            case "はかた号"://対応する、コス解除フラグへ
                if($memory[$addr] == NULL){
                    $Tokens = $this->jumps[$addr] ;
                    echo $addr.":Start \n" ;                    
                }else{
                    echo $addr.":Not Start\n" ;                    
                }
            case "行きです。"://対応する、コスなうフラグへ
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
<?php
    class Chef{

        public function __construct(){
            
        }

        public function cook($pot,$knife,$material){
            echo "----- 調理開始 -----"."\n";
            echo "カレーを作ります。"."\n";
            $this->cut($knife,$material);
            $this->fry($pot);
            $this->stew($pot,$material);
            echo "----- 調理終了 -----"."\n";
            echo "調理は終了しました。"."\n";
        }

        public function cut($knife,$material){
            $knifename = $knife->getName();
            $materialnames = $material->addMaterial();
            echo "----- 具材の準備 -----"."\n";
            foreach($materialnames as $value){
                switch($value){
                    case "人参":
                        echo $knifename."で".$value."をいちょう切りにしました。"."\n";
                        break;
                    case "ジャガイモ":
                        echo $knifename."で".$value."を角切りにしました。"."\n";
                        break;
                    case "牛肉":
                        echo $knifename."で".$value."をぶつ切りにしました。"."\n";
                        break;
                    default:
                        echo "これら以外の具材の準備は必要ないです。"."\n";
                }
            }
            echo "具材の準備は終わりました。"."\n";

        }

        public function fry($pot){
            $potname = $pot->getName();
            $firelevel = $pot->getFireLevel();
            echo "----- 具材を煮込む -----"."\n";
            echo $potname."に切った具材を入れます。"."\n";
            if($firelevel == "強火"){
                echo "強火のため具材は焦げます。"."\n";
            }else{
                echo "具材が焦げる心配はありません。"."\n";
            }
            echo "具材の炒めは終わりました。"."\n";


        }

        public function stew($pot,$material){
            $stewtime = $pot->getStewtime();
            $materialnames = $material->addMaterial();
            echo "----- 具材を煮込む作業 -----"."\n";
            echo "水を入れて沸騰させます。"."\n";
            foreach($materialnames as $value){
                if ($value == "カレールー"){
                    echo $value."を入れます。"."\n";
                }
            }
            if ($stewtime >= 40){
                echo "煮込み過ぎて具材が崩れました。"."\n";
            }else if ($stewtime >= 30 && $stewtime < 40){
                echo "具材は崩れず煮込まれました。"."\n";
            }else{
                echo "具材は固めに煮込まれました。"."\n";
            }
            echo "具材の煮込みは終わりました。"."\n";
        }

    }
?>
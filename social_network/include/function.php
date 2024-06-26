<?php 

if(!function_exists('e')){

    function e($string){
        if($string){
            return htmlspecialchars($string);
        }
     

    }

}

if(!function_exists('is_alredy_in_use')){
    function is_already_in_use($field, $value, $table){
        global $db;



        $q =$db->prepare("SELECT id FROM  $table WHERE $field = ?");
        $q->execute([$value]);


        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }
}

if(!function_exists('set_flash')){
    function set_flash($message, $type = 'info'){
        $_SESSION['notification']['message'] = $message;
        $_SESSION['notification']['type'] = $type;

    }
}

if(!function_exists('redirect')){
    function redirect($page){
        header('Location: '. $page);
    }

}
if(!function_exists('save_input_data')){
    function save_input_data(){
        foreach($_POST as $key => $value){
            if(strpos($key, 'password') === false){
            $_SESSION['input'] [$key] = $value;
        }

        }
    }

}
if(!function_exists('get_input')){
    function get_input($key){
        
        return !empty($_SESSION['input'] [$key])
            ? e($_SESSION['input'] [$key])
            :null;

        
        }
        
        }
if(!function_exists('clear_input_data')){
    function clear_input_data(){                
         if(isset($_SESSION['input'] )){
            $_SESSION['input']= [];
            
         }
        
                
   }
                
}       
    

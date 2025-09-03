<?php

class layouts{
    public function header(){
        return "<header><h1>Welcome to {$conf['site_name']}</h1></header>";
    }
    public function footer(){
        return "<footer><p>&copy;".date("Y")."ICS B.All rights reserved.</p></footer>";
    }
}


?>
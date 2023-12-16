<?php
class User{
    public function profile(){
        return new Profile();
        //return null;
    }
}

class Profile{
    public function employment(){
        return "Software Engineer";
    }
}

$user = new User();
//$profile = $user->profile();
//
//if($profile){
//    echo $profile->employment();
//
//}
//echo $user->profile()->employment();

echo $user->profile()?->employment() ?? "No Employment";
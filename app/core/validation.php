<?php

class validation
{
    function validateUserName($name)
    {
        /*validation rules...
         *
         * user name must be at least 2 character
         * user name must start with alphabetic characters
         * user name can contains any numerical chracter
         *
         */

        $result=true;

        if(strlen($name)<2)
            $result=false;

        else {
            if (!ctype_alpha($name[0]))
                $result = false;

            $name=substr($name,1);
            $allowed = array(".", "-", "_");

            if(!ctype_alnum(str_replace($allowed,'',$name)))
            {
                $result = false;
            }
        }

        return $result;

    }


    function validateName($name)
    {
        /*validation rules...
         *
         * user name must be at least 2 character
         * can conatins only alphabetic characters,dot and space
         * start with alphabetic characters
         */

        $result=true;

        if(strlen($name)<2)
            $result=false;

        else {
            if (!ctype_alpha($name[0]))
                $result = false;

            $name=substr($name,1);
            $allowed = array("."," ");

            if(!ctype_alnum(str_replace($allowed,'',$name)))
            {
                $result = false;
            }
        }

        return $result;

    }


    function validatePassword($password)
    {
        /*validation rules...
         * first chracter must be alphabetic character
         * Password must not be less than eight (8) characters
         * Password must contain at least one of the special characters (@, #, $, %)
         */

        $result=true;

        if(strlen($password)<8)
            $result=false;

        else {
            if (!ctype_alpha($password[0]))
                $result = false;


            $password=substr($password,1);
            $allowed = array("@",".","_");

            if(!ctype_alnum(str_replace($allowed,'',$password)))
            {
                $result = false;
            }

        }

        return $result;

    }


    function validateEmail($email)
    {
        /*validation rules...
         * first chracter must be alphabetic character
         * Password must not be less than eight (5) characters  example: m@s.c
         * Password must contain at least one of the special characters (@,.,_)
         */

        $result=true;

        if(strlen($email)<5)
            $result=false;

        else {
            if(strpos($email,'@')===false || strpos($email,'.')===false)
            {
                $result = false;

            }
            else
            {
                $emailparts=explode('@',$email);



                $allowed = array(".", "-", "_","1","2","3","4","5","6","7","8","9","0");
                if(!ctype_alnum(str_replace($allowed, '', $emailparts[0] ))) {
                    $result=false;

                }



                $afterattherate=explode('.',$emailparts[1]);

                if(isset($afterattherate[0])&&isset($afterattherate[1]))
                {
                    if (!ctype_alpha($afterattherate[0]))
                        $result = false;
                    if (!ctype_alpha($afterattherate[1]))
                        $result = false;
                }
                else
                    $result = false;

            }


        }

        if($result){
            if(User::find($email,"email")){
                $result = false;
            }
        }


        return $result;

    }



    function validatePhone($phone)
    {
        /*validation rules...

            all character must be numeric
            length must be 11
            first character must be 0
         */

        $result=true;

        if(strlen($phone)<11)
            $result=false;

        else {

            if($phone[0]!='0')
                $result=false;

            if (!ctype_digit($phone)) {
                $result=false;
            }
        }

        return $result;

    }
}
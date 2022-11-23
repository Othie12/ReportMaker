<?php
//this is a function library, all the functions that are going to be used in the site are here

function testInput($data){//function to remove backslashes, whitespaces and the like so that we get data that won't intoxicate our db
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    function resolve_subj($sub){
        $ss = "";
        switch ($sub){
            case 1:
                $ss = "MATHEMATICS";
                break;
            case 2:
                $ss = "ENGLISH";
                break;
            case 3:
                $ss = "INTEGRATED SCIENCE";
                break;

            case 4:
                $ss = "SOCIAL STUDIES";
                break;
                
            case 5:
                $ss = "LITERACY 1";
                break;
                
            case 6:
                $ss = "LITERACY 2";
                break;
                
            case 7:
                $ss = "RELIGIOUS EDUCATION";
                break;
                
            case 8:
                $ss = "LUGANDA";
                break;
                
            case 9:
                $ss = "MY ENVIRONMENT";
                break;
                
            case 10:
                $ss = "NUMBERS";
                break;
                
            case 11:
                $ss = "SOCIAL DEVELOPMENT";
                break;
                
            case 12:
                $ss = "LANGUAGE DEVELOPMENT 2";
                break;
                
            case 13:
                $ss = "LANGUAGE DEVELOPMENT 1";
                break;
                
                
            case 14:
                $ss = "HEALTH HABBITS";
                break;

            default:
            $ss = "UNRESOLVED";
            break;        
        }
        return $ss;
    }

    function resolve($sub){
        $ss = "";
        switch ($sub){
            case "math":
                $ss = "MATHEMATICS";
                break;
            case "eng":
                $ss = "ENGLISH";
                break;
            case "scie":
                $ss = "INTEGRATED SCIENCE";
                break;

            case "sst":
                $ss = "SOCIAL STUDIES";
                break;
                
            case "lit1":
                $ss = "LITERACY 1";
                break;
                
            case "lit2":
                $ss = "LITERACY 2";
                break;
                
            case "re":
                $ss = "RELIGIOUS EDUCATION";
                break;
                
            case "luga":
                $ss = "LUGANDA";
                break;
                
            case "my_env":
                $ss = "MY ENVIRONMENT";
                break;
                
            case "numbers":
                $ss = "NUMBERS";
                break;
                
            case "social_dev":
                $ss = "SOCIAL DEVELOPMENT";
                break;
                
            case "lang_dev2":
                $ss = "LANGUAGE DEVELOPMENT 2";
                break;
                
            case "lang_dev1":
                $ss = "LANGUAGE DEVELOPMENT 1";
                break;
                
                
            case "health_habbits":
                $ss = "HEALTH HABBITS";
                break;

            default:
            $ss = "UNRESOLVED";
            break;        
        }
        return $ss;
    }
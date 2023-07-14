<?php

namespace App\Services;


final class GetFormNameService
{

    /**
     * @param $contact
     * @return string
     */
    final static function getGenderName($contact)
    {
        if ($contact->gender === 0) {
            return "男性";
        }
        if ($contact->gender === 1) {
            return "女性";
        }
        return "";
    }

    /**
     * @param $contact
     * @return string
     */
    final static function getAgeName($contact)
    {
        switch ($contact->age) {
            case 1:
                $age = "～19歳";
                break;
            case 2:
                $age = "20歳～29歳";
                break;
            case 3:
                $age = "30歳～39歳";
                break;
            case 4:
                $age = "40歳～49歳";
                break;
            case 5:
                $age = "50歳～59歳";
                break;
            case 6:
                $age = "60歳～";
                break;
            default:
                $age = "";
        }
        return $age;
    }

}

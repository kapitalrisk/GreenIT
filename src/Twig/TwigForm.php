<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 23/11/2018
 * Time: 00:51
 */

//namespace App\Service;

namespace App\Twig;

use App\Entity\FormQuestion;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;


class TwigForm extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('question_value', array($this, 'getValue')),
        );
    }

    public function getValue(FormQuestion $question, $choice = "", $elem = "choice")
    {
        if (($answer = $question->getAnswer()) === null)
            return "";

        if ($question->getType() == "text")
        {
            return $answer->getChoice();
        }
        if ($question->getMultiple())
        {
            $selected = explode(";", $answer->getChoice());
            if (in_array(strval($choice), $selected))
            {
                return "checked";
            }
            return "";
        }
        else {
            if (strval($choice) == $answer->getChoice())
            {
                if ($elem == "choice")
                    return "checked";
                if ($elem == "text")
                    return $answer->getContent();
            }
            return "";
        }
    }
}
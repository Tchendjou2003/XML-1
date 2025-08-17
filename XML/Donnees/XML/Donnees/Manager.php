<?php

class Man
{
    public static $compteur=1;
    public static function insert($tab, $file)
    {
        if(!file_exists($file.".xml"))
        {
            $val='';
            foreach($tab as $key => $values)
            {
                $val .= "\n\t\t"."<".$key.">".$val."</".$key.">";
            }

            $test = "<?xml version='1.0' encoding='iso-8859-'?>\n<".$file."s>"."\n\t"."<".$file." id_".$file."=".$self->compteur.">".$val."\n"."</".$file."s>";
            file_put_contents($file.".xml", $test);
        }
        else
        {
            $xml = file_get_contents($file."xml");
            $xml = str_replace("</".$file."s>", " ", $xml);
            $val='';
            foreach($tab as $key => $values)
            {
                $val .= "\n\t\t"."<".$key.">".$val."</".$key.">";
            }
            
            $test=$val."\n\t"."</".$file."s>";
            file_put_contents($file.".xml", $test);
        }

    }
}

?>
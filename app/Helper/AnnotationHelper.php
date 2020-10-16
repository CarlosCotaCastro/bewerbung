<?php

class AnnotationHelper {

    private static $List = [];
    
    public static function Add(string $text) : string{
        static::$List[] = $text;
        $i = count(static::$List);
        return
            '<sup>'
                .'<a title="See explanation" href="#annotation'.$i.'">['.$i.']</a>'
            . '</sup>'
        ;
    }
    
    public static function RenderList() : string{
        $r = new AnnotationListRenderer(static::$List);
        return $r->Render();
    }

}
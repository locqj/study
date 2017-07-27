<?php

namespace other;

class ColorDrawDecorator implements DrawDecorator
{   
    function __construct($color = 'red')
    {
        $this->color = $color;
    }
    function beforeDraw()
    {
        echo "<div style='color: {$this->color};'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}
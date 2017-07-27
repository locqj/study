<?php
namespace other;
class SizeDecorator implements DrawDecorator
{
    function __construct($width = '30px', $height = '30px')
    {
        $this->width = $width;
        $this->height = $height;
        
    }    
    function beforeDraw()
    {
        echo "<div width='{$this->width}' height='{$this->height}'>";
    }
    function afterDraw()
    {
        echo "</div>";
    }
}
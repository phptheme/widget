<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\Widget;

interface WidgetInterface extends \PhpTheme\Tag\TagInterface
{

    public function __construct(array $params = []);
    
    public function getViewPath() : string;
    
    public function render($template, $params = []) : string;

}
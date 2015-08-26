<?php
/**
 * @author Sławomir Olchawa <slawooo@gmail.com>
 */

/**
 * Class Box_Big
 */
class Box_Big extends Box_Base
{
    /**
     * @param Component $content
     * @param string|null $caption
     * @param string|null $anchor
     */
    public function __construct(Component $content, $caption = null, $anchor = null)
    {
        parent::__construct($content, $caption, $anchor);

        $this->addCSSClass('box_big');
    }
}

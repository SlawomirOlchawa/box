<?php
/**
 * @author Sławomir Olchawa <slawooo@gmail.com>
 */

/**
 * Class Box_Half
 */
class Box_Half extends Box_Base
{
    /**
     * @param Component $content
     * @param string|null $caption
     */
    public function __construct(Component $content, $caption = null)
    {
        parent::__construct($content, $caption);

        $this->addCSSClass('box_half');
    }
}

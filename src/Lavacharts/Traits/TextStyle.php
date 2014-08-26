<?php namespace Lavacharts\Traits;

trait TextStyle
{
    /**
     * Assigns the textStyle
     *
     * @param  TextStyle          $ts An object that specifies the text style.
     * @throws InvalidConfigValue
     * @return Series
     */
    public function textStyle(\Lavacharts\Configs\TextStyle $ts)
    {
        $this->textStyle = $ts;

        return $this;
    }
}

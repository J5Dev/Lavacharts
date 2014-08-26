<?php namespace Lavacharts\Traits;

trait VerticalAxis
{
    /**
     * An object with members to configure various vertical axis elements. To
     * specify properties of this property, create a new vAxis() object, set
     * the values then pass it to this function or to the constructor.
     *
     * @param  VerticalAxis       $v
     * @throws InvalidConfigValue
     * @return LineChart
     */
    public function vAxis(\Lavacharts\Configs\VerticalAxis $v)
    {
        $this->addOption($v->toArray(__FUNCTION__));

        return $this;
    }
}

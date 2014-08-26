<?php namespace Lavacharts\Traits;

trait HorizontalAxis
{
    /**
     * An object with members to configure various horizontal axis elements. To
     * specify properties of this property, create a new hAxis() object, set
     * the values then pass it to this function or to the constructor.
     *
     * @param  HorizontalAxis     $h
     * @throws InvalidConfigValue
     * @return Chart
     */
    public function hAxis(\Lavacharts\Configs\HorizontalAxis $h)
    {
        $this->addOption($h->toArray(__FUNCTION__));

        return $this;
    }
}

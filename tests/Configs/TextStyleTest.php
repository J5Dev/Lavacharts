<?php namespace Khill\Lavacharts\Tests\Configs;

use Khill\Lavacharts\Configs\TextStyle;

class TextStyleTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->textStyle = new TextStyle();
    }

    public function testIfInstanceOfTextStyle()
    {
        $this->assertInstanceOf('Khill\Lavacharts\Configs\TextStyle', $this->textStyle);
    }

    public function testConstructorDefaults()
    {
        $this->assertNull($this->textStyle->color);
        $this->assertNull($this->textStyle->fontName);
        $this->assertNull($this->textStyle->fontSize);
    }

    public function testConstructorValuesAssignment()
    {
        $textStyle = new TextStyle(array(
            'color'    => 'blue',
            'fontName' => 'Arial',
            'fontSize' => 16
        ));

        $this->assertEquals('blue',  $textStyle->color);
        $this->assertEquals('Arial', $textStyle->fontName);
        $this->assertEquals(16,      $textStyle->fontSize);
    }

    /**
     * @expectedException Khill\Lavacharts\Exceptions\InvalidConfigProperty
     */
    public function testConstructorWithInvalidPropertiesKey()
    {
        new TextStyle(array('Burrito' => array(123)));
    }

    /**
     * @expectedException Khill\Lavacharts\Exceptions\InvalidConfigValue
     * @dataProvider badParamsProvider
     */
    public function testColorWithBadParams($badVals)
    {
        $this->textStyle->color($badVals);
    }

    /**
     * @expectedException Khill\Lavacharts\Exceptions\InvalidConfigValue
     * @dataProvider badParamsProvider
     */
    public function testFontNameWithBadParams($badVals)
    {
        $this->textStyle->fontName($badVals);
    }

    /**
     * @expectedException Khill\Lavacharts\Exceptions\InvalidConfigValue
     * @dataProvider badParamsProvider
     */
    public function testFontSizeWithBadParams($badVals)
    {
        $this->textStyle->fontSize($badVals);
    }


    public function badParamsProvider()
    {
        return array(
            array(true),
            array(123.456),
            array(array()),
            array(new \stdClass()),
            array(null)
        );
    }

}


<?php
namespace Sempro\XML\Tests;

use PHPUnit_Framework_TestCase;
use Sempro\XML\XML;

class XMLTest extends PHPUnit_Framework_TestCase
{
    public function testCanConvertXmlStringToArray()
    {
        $string = file_get_contents(__DIR__ . '/examples/structure-1.txt');

        $xml = new XML;
        $parsed = $xml->fromString($string)->toArray();

        $this->assertSame(
            2,
            count($parsed['Envelope']['soap:body']['exampleresponse']['customers']['datalist']['value'])
        );
    }
}

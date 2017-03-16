<?php
namespace Sempro\XML\Tests;

use PHPUnit\Framework\TestCase;
use Sempro\XML\XML;

class XMLTest extends TestCase
{
    public function testCanConvertXmlStringToArray()
    {
        $string = file_get_contents(__DIR__ . '/examples/structure-1.xml');

        $xml = new XML;
        $parsed = $xml->fromString($string)->toArray();

        $this->assertSame(
            2,
            count($parsed['Envelope']['soap:body']['exampleresponse']['customers']['datalist']['value'])
        );
    }
}

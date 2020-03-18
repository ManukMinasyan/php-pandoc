<?php

namespace Pandoc\Tests\Features;

use Pandoc\Pandoc;
use PHPUnit\Framework\TestCase;

class ConvertTest extends TestCase
{
    /** @test */
    public function pandoc_converts_markdown_to_text()
    {
        $output = (new Pandoc)
            ->from('markdown')
            ->inputFile('tests/data/example.md')
            ->to('plain')
            ->output('tests/temp/example.txt')
            ->run();

        $this->assertTrue(file_exists('tests/temp/example.txt'));
    }

    /** @test */
    public function pandoc_converts_stdin_to_html()
    {
        $output = (new Pandoc)
            ->from('markdown')
            ->input("# Test")
            ->to('html')
            ->run();

        $this->assertStringContainsString('<h1 id="test">Test</h1>', $output);
    }
}

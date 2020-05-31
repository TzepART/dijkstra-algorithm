<?php
declare(strict_types=1);

namespace Tests\Model;

use Dijkstra\Model\Node;
use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase
{

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }
}

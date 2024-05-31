<?php
use PHPUnit\Framework\TestCase;

class GameServiceTest extends TestCase
{
    public function testCalculateScore()
    {
        $gameService = new GameService();
        $this->assertEquals(21, $gameService->calculateScore([10, 11]));
    }

    public function testDrawCard()
    {
        $gameService = new GameService();
        $card = $gameService->drawCard();
        $this->assertNotNull($card);
    }
}

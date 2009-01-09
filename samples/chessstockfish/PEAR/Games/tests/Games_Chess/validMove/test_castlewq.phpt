--TEST--
Games_Chess->_validMove() valid castle queenside White
--SKIPIF--
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php.inc';
$board->resetGame();
$board->blankBoard();
$board->_move = 'B';
$board->addPiece('W', 'K', 'e1');
$board->addPiece('W', 'R', 'a1');
$err = $board->_validMove($board->_parseMove('O-O-O'));
$phpunit->assertTrue($err, 'error returned');
echo 'tests done';
?>
--EXPECT--
tests done
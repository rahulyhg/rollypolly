<?php
$layoutStructure = 'simple';
$pageTitle = 'Chess';
?>
<script src="<?php echo HTTPPATH; ?>/scripts/chessboardjs/js/chessboard-0.3.0.js"></script>
<link rel="stylesheet" href="<?php echo HTTPPATH; ?>/scripts/chessboardjs/css/chessboard-0.3.0.css" />
<script src="<?php echo HTTPPATH; ?>/scripts/chess.js/chess.js"></script>

<!-- start example HTML --->
<div id="board" style="width: 400px"></div>
<p>Status: <span id="status"></span></p>
<p>FEN: <span id="fen"></span></p>
<p>PGN: <span id="pgn"></span></p>
<!-- end example HTML --->

<script>
var init = function() {

//--- start example JS ---
var board,
  game = new Chess(),
  statusEl = $('#status'),
  fenEl = $('#fen'),
  pgnEl = $('#pgn');

// do not pick up pieces if the game is over
// only pick up pieces for the side to move
var onDragStart = function(source, piece, position, orientation) {
  if (game.game_over() === true ||
      (game.turn() === 'w' && piece.search(/^b/) !== -1) ||
      (game.turn() === 'b' && piece.search(/^w/) !== -1)) {
    return false;
  }
};

var onDrop = function(source, target) {
  // see if the move is legal
  var move = game.move({
    from: source,
    to: target,
    promotion: 'q' // NOTE: always promote to a queen for example simplicity
  });

  // illegal move
  if (move === null) return 'snapback';

  updateStatus();
};

// update the board position after the piece snap 
// for castling, en passant, pawn promotion
var onSnapEnd = function() {
  board.position(game.fen());
};

var updateStatus = function() {
  var status = '';

  var moveColor = 'White';
  if (game.turn() === 'b') {
    moveColor = 'Black';
  }

  // checkmate?
  if (game.in_checkmate() === true) {
    status = 'Game over, ' + moveColor + ' is in checkmate.';
  }

  // draw?
  else if (game.in_draw() === true) {
    status = 'Game over, drawn position';
  }

  // game still on
  else {
    status = moveColor + ' to move';

    // check?
    if (game.in_check() === true) {
      status += ', ' + moveColor + ' is in check';
    }
  }

  statusEl.html(status);
  fenEl.html(game.fen());
  pgnEl.html(game.pgn());
};

var cfg = {
  draggable: true,
  position: 'start',
  onDragStart: onDragStart,
  onDrop: onDrop,
  onSnapEnd: onSnapEnd
};
board = new ChessBoard('board', cfg);

updateStatus();
//--- end example JS ---

}; // end init()
$(document).ready(init);
</script>
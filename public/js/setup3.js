var CIRCLE = 2 * Math.PI;
var i = 0;

var delt = 0.01;
var omega = 10;
var A = 2;
var B = 1;

function canvasInit () {
  // The wave pattern in homepage intro    
  var canvas = $('canvas').get(0);
  var ctx = canvas.getContext('2d');

  var introHeight = $(document).height();
  var introWidth = $(document).width();

  ctx.canvas.width  = 1000;
  ctx.canvas.height = 300;

  ctx.strokeStyle = 'rgba(0,0,0,.2)';
  ctx.beginPath()
  ctx.moveTo(canvas.width/2, canvas.height/2 - 100);
  ctx.lineTo(canvas.width/2, canvas.height/2 + 100);
  ctx.stroke()

  window.requestAnimationFrame(draw)
};



function draw () {
  var canvas = $('canvas').get(0);
  var ctx = canvas.getContext('2d');

  var time = new Date();
  i += delt
  if ( i > CIRCLE )
    i = 0;

  ctx.clearRect(0, 0, canvas.width, canvas.height);
  
  ctx.setLineDash([1, 5])
  ctx.strokeStyle = 'rgba(0,0,0,.5)';
  ctx.beginPath()
  ctx.moveTo(canvas.width/2, canvas.height/2 - 100);
  ctx.lineTo(canvas.width/2, canvas.height/2 + 100);
  ctx.stroke()
  ctx.closePath()

  ctx.fillStyle = 'rgba(255, 0, 0, 1)';
  ctx.fillRect(canvas.width/2 + A * 40 * Math.cos(omega * i) + B * 40 * Math.sin(omega * i), canvas.height/2, 20, 20);

  window.requestAnimationFrame(draw);
}

canvasInit();

$('input').on('change', function() {
  switch ( $(this).attr('class') ) {
    case 'omega':
      omega = parseFloat( $(this).val() );
    break;
    case 'A':
      A = parseFloat( $(this).val() );
    break;
    case 'B': 
      B = parseFloat( $(this).val() );
    break;
  }

  $('.d').text(Math.sqrt(Math.pow(A, 2) + Math.pow(B, 2)).toFixed(2));
  $('.phi').text(Math.atan(B/A).toFixed(2));
  $('.omega-num').text($('.omega').val())
  $('.a-num').text($('.A').val())
  $('.b-num').text($('.B').val())

  console.log( $(this).attr('class'), $(this).val() );
});

$('input').trigger('change');
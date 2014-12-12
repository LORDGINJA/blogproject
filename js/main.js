function update()
{
  var now = new Date();
  var hours = now.getHours() - 15;
  var minutes = now.getMinutes() - 15;
  
  $( '.minute' ).css( '-ms-transform', 'rotate( ' + minutes * 6 + 'deg )' );
  $( '.minute' ).css( '-moz-transform', 'rotate( ' + minutes * 6 + 'deg )' );
  $( '.minute' ).css( '-webkit-transform', 'rotate( ' + minutes * 6 + 'deg )' );
  $( '.minute' ).css( 'transform', 'rotate( ' + minutes * 6 + 'deg )' );
  
  $( '.hour' ).css( '-ms-transform', 'rotate( ' + hours * 30 + 'deg )' );
  $( '.hour' ).css( '-moz-transform', 'rotate( ' + hours * 30 + 'deg )' );
  $( '.hour' ).css( '-webkit-transform', 'rotate( ' + hours * 30 + 'deg )' );
  $( '.hour' ).css( 'transform', 'rotate( ' + hours * 30 + 'deg )' );
}

var interval = setInterval( update, 1000 );
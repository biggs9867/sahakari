( function( window, document ) {
  function lawyer_hub_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const lawyer_hub_nav = document.querySelector( '.sidenav' );
      if ( ! lawyer_hub_nav || ! lawyer_hub_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...lawyer_hub_nav.querySelectorAll( 'input, a, button' )],
        lawyer_hub_lastEl = elements[ elements.length - 1 ],
        lawyer_hub_firstEl = elements[0],
        lawyer_hub_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && lawyer_hub_lastEl === lawyer_hub_activeEl ) {
        e.preventDefault();
        lawyer_hub_firstEl.focus();
      }
      if ( shiftKey && tabKey && lawyer_hub_firstEl === lawyer_hub_activeEl ) {
        e.preventDefault();
        lawyer_hub_lastEl.focus();
      }
    } );
  }
  lawyer_hub_keepFocusInMenu();
} )( window, document );
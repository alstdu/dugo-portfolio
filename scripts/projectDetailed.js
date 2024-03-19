
// Function to toggle the class based on screen size
function toggleClassByScreenSize() {
    const mediaQuery = window.matchMedia( '(min-width: 900px)' );
    const artifactStats = document.querySelector( '.artifact-stats' );

    // Check if the media query matches the current screen size
    if ( mediaQuery.matches ) {
        // If the screen size is 500px or less, remove the class
        artifactStats.classList.remove( 'glass-effect' );
    } else {
        // If the screen size is more than 500px, add the class
        artifactStats.classList.add( 'glass-effect' );
    }
}

window.addEventListener( 'resize', toggleClassByScreenSize );
toggleClassByScreenSize();

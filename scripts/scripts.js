import {Application} from '@splinetool/runtime';

const canvas = document.getElementById( 'canvas3d' );
const projectcanvas = document.getElementById( 'projectcanvas3d' );

// start the application and load the scene
const spline = new Application( canvas );
await spline.load( 'spline/skillsheader.splinecode' );

console.log( 'hello2222' );

// start the application and load the scene
const projectspline = new Application( projectcanvas );
await projectspline.load( 'spline/projectheader.splinecode' );


console.log( 'hello' );

import { Application } from '@splinetool/runtime';

const canvas = document.getElementById('canvas3d');

// start the application and load the scene
const spline = new Application(canvas);
spline.load('spline/scene.splinecode');
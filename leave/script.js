"use strict";
// varables

var fpsdisp;
var x = 0, y = 0;

// functions

function setup()
{

	// canvas --> full screen
	createCanvas(windowWidth,windowHeight);
	fpsdisp = createSpan().id("Fps");
	createButton("&#9432;").id("Info").mouseClicked(info);

	background(0);
	stroke(255);
	strokeWeight(2);
}

function nextPoint()
{
	var nextX;
	var nextY;
	// 0 <= r <= 1
	var r = random(1);

	if(r<0.01)
		{
			//stem (1% chance)
			nextX = 0;
			nextY = 0.16 * y;
		}
		else if(r<0.86)
		{
			// successively smaller leaflets (85% chance)
			nextX = 0.85 * x + 0.04 * y;
			nextY = -0.04 * x + 0.85 * y + 1.6;
		}
		else if(r<0.93)
		{
			//largest left-hand leaflet (7% chance)
			nextX = 0.20 * x + -0.26 * y;
			nextY = 0.23 * x + 0.22 * y + 1.6;
		}
		else
		{
			//largest right-hand leaflet (7% chance)
			nextX = -0.15 * x + 0.28 * y;
			nextY = 0.26 * x + 0.24 * y + 0.44;
		}

		x = nextX;
		y = nextY;
}

function drawPoint()
{
	var px = map(x,-2.1820,2.6558,0,width);
	var py = map(y,0,9.9983,height,0);
	//draw point
	point(px,py);
}

function draw()
{
	//display fps
	fpsdisp.html(floor(frameRate()));

	// draw 100 points per frame
	for(var i=0; i<100; i++)
	{
		drawPoint();
		nextPoint();
	}
}

//utility functions
function info()
{
	alert("Math is beatiful! :)\nFractal like structures in nature.\n\nDocumentation at top of js tab.");
}
function windowResized()
{
	resizeCanvas(windowWidth,windowHeight);
}

// module aliases
var Engine = Matter.Engine,
    Render = Matter.Render,
    Runner = Matter.Runner,
    World = Matter.World,
    Bodies = Matter.Bodies,
    Body = Matter.Body;

// create an engine
var engine = Engine.create();

// create a renderer
var render = Render.create({
    element: document.body,
    engine: engine,
    options:{
    width: 900, 
    height: 500,
    wireframes: false
}
});

// create a runner
var runner = Runner.create();

// create two boxes and a ground
var box = Bodies.rectangle(100, 100, 15, 15);
var ground = Bodies.rectangle(50, 500, 150, 100, { isStatic: true });
var topWall = Bodies.rectangle(450, 1, 900, 10, { isStatic: true });
var bottomWall = Bodies.rectangle(450, 499, 900, 10, { isStatic: true });
var leftWall = Bodies.rectangle(1, 250, 10, 500, { isStatic: true });
var rightWall = Bodies.rectangle(899, 250, 10, 500, { isStatic: true });

// add all of the bodies to the world
World.add(engine.world, [topWall, leftWall, bottomWall, rightWall]);

// run the engine
Engine.run(engine);

// run the renderer
Render.run(render);

// run the runner
Runner.run(runner, engine);

function worldAdd() {
    box = Bodies.rectangle(100, 100, 15, 15);
    var gh = document.getElementById("inputgh").value;
    ground = Bodies.rectangle(50, 500, 150, gh*10, { isStatic: true });

    World.add(engine.world, [ground, box]);
}

function worldApply() {
    var air = document.getElementById("inputair").value;
    var xf = document.getElementById("inputxf").value;
    var yf = document.getElementById("inputyf").value;

    box.frictionAir = air/10;
    Body.setVelocity( box, {x: xf, y: -yf});
}

function worldReset() {
    World.remove(engine.world, box);
    World.remove(engine.world, ground);
}
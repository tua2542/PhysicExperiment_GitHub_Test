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
    width: 1200, 
    height: 500,
    wireframes: false
}
});

// create a runner
var runner = Runner.create();

// create objects
var box = Bodies.rectangle(100, 100, 20, 20);
var wall = Bodies.rectangle(500, 475, 10, 50, { isStatic: true});
var topWall = Bodies.rectangle(600, 1, 1200, 10, { isStatic: true });
var bottomWall = Bodies.rectangle(600, 499, 1200, 10, { isStatic: true });
var leftWall = Bodies.rectangle(1, 250, 10, 500, { isStatic: true });
var rightWall = Bodies.rectangle(1200, 250, 10, 500, { isStatic: true });

// add area body to control world
World.add(engine.world, [topWall, leftWall, bottomWall, rightWall]);

// run the engine
Engine.run(engine);

// run the renderer
Render.run(render);

// run the runner
Runner.run(runner, engine);

// delete object in area of the world
function worldReset() {
    World.remove(engine.world, box);
    World.remove(engine.world, wall);
    engine.world.gravity.x = 0;
    engine.world.gravity.y = 1;
}

// add object into the world
function worldAdd() {
    box = Bodies.rectangle(20, 480, 20, 20);
        box.render.fillStyle = 'skyblue';
        box.render.strokeStyle = 'blue';
    var dis = document.getElementById("distance").value;
    wall = Bodies.rectangle(dis*10, 475, 50, 50, { isStatic: true});
        wall.render.fillStyle = 'red';

    World.add(engine.world, [wall, box]);
}

// apply force to object in the world
function worldApply() {
    var vel = document.getElementById("velocity").value;
    var acc = document.getElementById("acceleration").value;

    bottomWall.friction = 0;
    box.friction = 0.001;
    Body.setVelocity( box, {x: vel/2, y: 0});
    engine.world.gravity.x = acc/100;
    engine.world.gravity.y = 1;
}
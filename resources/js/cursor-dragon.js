(() => {
  const canvas = document.getElementById('cursor-dragon');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');

  let w, h;
  const points = [];
  const maxPoints = 50;

  const mouse = { x: window.innerWidth / 2, y: window.innerHeight / 2 };

  function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
  }
  window.addEventListener('resize', resize);
  resize();

  document.addEventListener('mousemove', e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  });

  function addPoint(x, y) {
    points.push({ x, y });
    if (points.length > maxPoints) points.shift();
  }

  function draw() {
    ctx.clearRect(0, 0, w, h);
    if (points.length < 2) return;

    ctx.beginPath();
    ctx.moveTo(points[0].x, points[0].y);

    for (let i = 1; i < points.length; i++) {
      ctx.lineTo(points[i].x, points[i].y);
    }

    ctx.strokeStyle = 'rgba(99,102,241,0.6)';
    ctx.lineWidth = 18;
    ctx.shadowBlur = 40;
    ctx.shadowColor = 'rgba(99,102,241,0.9)';
    ctx.lineCap = 'round';
    ctx.lineJoin = 'round';
    ctx.stroke();

    ctx.strokeStyle = 'rgba(224,231,255,1)';
    ctx.lineWidth = 3;
    ctx.shadowBlur = 0;
    ctx.stroke();
  }

  function animate() {
    const last = points[points.length - 1] || mouse;
    addPoint(
      last.x + (mouse.x - last.x) * 0.2,
      last.y + (mouse.y - last.y) * 0.2
    );
    draw();
    requestAnimationFrame(animate);
  }

  animate();
})();

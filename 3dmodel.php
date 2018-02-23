<!DOCTYPE html>
<html>
<head>

    <script src="js/three.min.js"></script>
    <script src="js/Detector.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script src="js/OBJLoader.js"></script>
    <script src="js/MTLLoader.js"></script>
    <style>
        body {
            overflow: hidden;
            margin: 0;
            padding: 0;
            background: hsl(0, 0%, 10%);
        }
    </style>
</head>
<body>

    <script>

        if (!Detector.webgl) {
            Detector.addGetWebGLMessage();
        }

        var container;

        var camera, controls, scene, renderer;
        var lighting, ambient;

        init();
        animate();

        function init() {

            container = document.createElement('div');
            document.body.appendChild(container);

            /* Camera */

            camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
            camera.position.z = 3;

            /* Scene */

            scene = new THREE.Scene();
            ambient = new THREE.AmbientLight(0xffffff, 1.0);
            scene.add(ambient);

            /* Model */

            var mtlLoader = new THREE.MTLLoader();
            mtlLoader.setBaseUrl('assets/');
            mtlLoader.setPath('assets/');
            mtlLoader.load('female-croupier-2013-03-26.mtl', function (materials) {

                materials.preload();

                materials.materials.default.map.magFilter = THREE.NearestFilter;
                materials.materials.default.map.minFilter = THREE.LinearFilter;

                var objLoader = new THREE.OBJLoader();
                objLoader.setMaterials(materials);
                objLoader.setPath('assets/');
                objLoader.load('female-croupier-2013-03-26.obj', function (object) {

                    scene.add(object);

                });

            });

            /* Renderer */

            renderer = new THREE.WebGLRenderer();
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setClearColor(new THREE.Color("hsl(0, 0%, 10%)"));

            container.appendChild(renderer.domElement);

            /* Controls */

            controls = new THREE.OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.dampingFactor = 0.25;
            controls.enableZoom = false;

            /* Events */

            window.addEventListener('resize', onWindowResize, false);
            window.addEventListener('keydown', onKeyboardEvent, false);

        }

        function onWindowResize() {

            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();

            renderer.setSize(window.innerWidth, window.innerHeight);

        }

        function onKeyboardEvent(e) {

            if (e.code === 'KeyL') {

                lighting = !lighting;

                if (lighting) {

                    ambient.intensity = 0.25;
                    scene.add(keyLight);
                    scene.add(fillLight);
                    scene.add(backLight);

                } else {

                    ambient.intensity = 1.0;
                    scene.remove(keyLight);
                    scene.remove(fillLight);
                    scene.remove(backLight);

                }

            }

        }

        function animate() {

            requestAnimationFrame(animate);

            controls.update();

            render();

        }

        function render() {

            renderer.render(scene, camera);

        }

    </script>

</body>
</html>

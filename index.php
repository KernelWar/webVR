<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="realidad-virtual.png"/>
    <title>WebVR</title>
    <!-- Version 1.0.0 -->
    <script src="js/aframe.min.js"></script>
    <script src="js/aframe-orbit-controls.min.js"></script>
    <style>
        #datos li {
            list-style: none;
            font-family: sans-serif;
            margin-bottom: 5px;
            font-weight: 600;
        }

        #color-x {
            background: red;
        }

        #color-y {
            background: green;
        }

        #color-z {
            background: blue;
        }

        .datos-color {
            padding: 2px 10px 2px 10px;
            border-radius: 100%;
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div id="datos">
        <ul>
            <li>x: <span id="color-x" class="datos-color"> </span></li>
            <li>y: <span id="color-y" class="datos-color"> </span></li>
            <li>z: <span id="color-z" class="datos-color"> </span></li>
        </ul>
    </div>
    <a-scene inspector="url: http://localhost:3333/dist/aframe-inspector.js">
        <!-- 
            <a-camera position="4 4 -3"></a-camera>
            <a-plane color="#33ff93" height="20" width="20" rotation="-90 0 0"></a-plane>
        -->
        <a-assets>
            <img id="sky" src="texturas/sky4.jpg">
            <img id="tierra-texture" src="texturas/earth_atmos_4096.jpg">
            <img id="diagrama" src="texturas/h2o.png">            
            <img id="plane" src="texturas/plane.jpg">
        </a-assets>
        <a-entity camera="" look-controls=""
            orbit-controls="target: 0 4 -0.5; initialPosition: 0 3 0; zoomSpeed: 1.09" position="0 2 0"
             data-aframe-inspector-original-camera=""></a-entity>


        <a-entity light="intensity: 0.61; castShadow: true; distance: 2; penumbra: 0.24; shadowBias: 1.17"
            position="0.07076 7.272 3.858" data-aframe-default-light="" aframe-injected=""></a-entity>

        <a-sky src="#sky"></a-sky>

        <!-- 
        <a-entity line="start: -50, 0, 0; end: 50 0 0; color: red" line__2="start: 0, -50, 0; end: 0 50 0; color: green"
            line__3="start: 0, 0, -50; end: 0 0 50; color: blue"></a-entity>
        -->

        <a-plane color="#33ff93" height="20" width="20" rotation="-90 0 0" material="color: #000124"
            geometry="height: 18.07; width: 14.31"></a-plane>

        <a-plane color="#33ff93" height="20" width="20" rotation="-90 0 0" material="color: #00013c; emissive: #000000; src: #plane" geometry="height: 18.07; width: 14.31"></a-plane>

        <a-entity gltf-model="texturas/scene.gltf" position="2.72286 0.546 -3.096" scale="0.311 0.311 0.311"></a-entity>

        <a-entity geometry="depth: 0.92" material="src: #diagrama" position="-4.20712 1.144 -3.216"
            scale="2.304 1.672 -0.096" id="diagrama" rotation="0 -119.99999999999999 0"></a-entity>

        <a-entity id="tierra" animation="property: rotation; to: 0 360 0; loop: true; dur: 20000; easing: linear;" geometry="primitive: sphere" position="0 1.205 -5.308" material="src: #tierra-texture"
            scale="0.811 0.811 0.811"></a-entity>

        <a-entity id="info-tierra" geometry="primitive: plane; height: 0.52; width: 1.96"
            text__info-t="align: center; color: #000000; value: El agua cubre un 71 %\n de la superficie terrestre; wrapCount: 24.06"
            material="color: #20ae6a" position="0 0.303 -4.208" rotation="-21.361 0 0"></a-entity>

        <a-text align="center" baseline="top" width="16" value="Electrones: 1
            Protones: 1
            Neutrones: 0" position="-3.297 3.346 -4.849"
            geometry="primitive: plane; skipCache: true; height: 0.93; width: 2.06"
            text="anchor: center; width: 1.82; align: left; baseline: center; value: Atomo de hidrogeno\nElectrones: 1\nProtones: 1\nNeutrones: 0\n; wrapCount: 23.22; tabSize: 0; zOffset: 0.02"
            wrap-count="80" id="info-h1" rotation="0 22.355 0"
            material="transparent: true; vertexColors: face; blending: multiply; ambientOcclusionMapIntensity: 2.75; ambientOcclusionTextureOffset: 0.38 -0.05; color: #1676a9; emissive: #000000; emissiveIntensity: 4.52; width: 100">
        </a-text>

        <a-entity rotation="0 0 20" id="atomo-h" position="-2 2 -4">
            <a-entity rotation="0 360 0"
                animation="property: rotation; to: 0 0 360; loop: true; dur: 1000; easing: linear;">
                <a-sphere id="electron-h" position="1 0 0" radius="0.1" color="#00ffff" shadow></a-sphere>
                <a-torus id="orbita-h" color="#a29a02" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>
            <a-sphere id="proton-h" position="0 0 0" radius="0.1" color="#cb2123" shadow></a-sphere>
        </a-entity>

        <a-text align="center" baseline="top" width="16" value="Electrones: 1
        Protones: 1
        Neutrones: 0" position="-0.056 5.953 -3.393"
            geometry="primitive: plane; skipCache: true; height: 0.93; width: 2.06"
            text="anchor: center; width: 1.82; align: left; baseline: center; value: Atomo de oxigeno\nElectrones: 8\nProtones: 8\nNeutrones: 8\n; wrapCount: 23.22; tabSize: 0; zOffset: 0.02"
            wrap-count="80" id="info-o" rotation="22.605 0 0"
            material="vertexColors: face; blending: multiply; color: #09aa00; width: 100; flatShading: true; shader: flat">
        </a-text>

        <a-entity rotation="0 0 0" id="atomo-o" position="0 4 -4">

            <a-entity rotation="0 360 0"
                animation="property: rotation; to: 0 0 360; loop: true; dur: 1000; easing: linear;">
                <a-sphere id="electron-o_1" position="1 0 0" radius="0.1" color="#36d652" shadow></a-sphere>
                <a-torus id="orbita-o_1" color="#1f54e0" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>


            <a-entity rotation="0 360 0"
                animation="property: rotation; to: 0 0 360; loop: true; dur: 1500; easing: linear;">
                <a-sphere id="electron-o_2" position="0 1 0" radius="0.1" color="#36d652" shadow></a-sphere>
                <a-torus id="orbita-o_2" color="#1f54e0" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>

            <a-entity rotation="0 0 0"
                animation="property: rotation; to: 360 0 0; loop: true; dur: 1900; easing: linear;">
                <a-sphere id="electron-o_3" position="0 1 0" radius="0.1" color="#36d652" shadow></a-sphere>
                <a-torus id="orbita-o_3" color="#1f54e0" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>

            <a-entity rotation="10 0 0"
                animation="property: rotation; to: 0 360 0; loop: true; dur: 2000; easing: linear;">
                <a-sphere id="electron-o_4" position="1 0 0" radius="0.1" color="#36d652" shadow></a-sphere>
                <a-torus id="orbita-o_4" color="#1f54e0" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>
            <a-entity rotation="0 188 0"
                animation="property: rotation; to: 0 0 360; loop: true; dur: 2600; easing: linear;">
                <a-sphere id="electron-o_5" position="1 0 0" radius="0.1" color="#36d652" shadow></a-sphere>
                <a-torus id="orbita-o_5" color="#1f54e0" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>
            <a-entity rotation="0 0 140"
                animation="property: rotation; to: 0 360 0; loop: true; dur: 3000; easing: linear;">
                <a-sphere id="electron-o_6" position="1 0 0" radius="0.1" color="#36d652" shadow></a-sphere>
                <a-torus id="orbita-o_6" color="#1f54e0" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>
            <a-entity rotation="0 0 330"
                animation="property: rotation; to: 360 0 0; loop: true; dur: 700; easing: linear;">
                <a-sphere id="electron-o_7" position="0 1 0" radius="0.1" color="#36d652" shadow></a-sphere>
                <a-torus id="orbita-o_7" color="#1f54e0" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>
            <a-entity rotation="120 0 0"
                animation="property: rotation; to: 0 360 0; loop: true; dur: 800; easing: linear;">
                <a-sphere id="electron-o_8" position="1 0 0" radius="0.1" color="#36d652" shadow></a-sphere>
                <a-torus id="orbita-o_8" color="#1f54e0" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>

            <a-entity id="protones-o">
                <a-sphere id="proton-o1" position="0.04 -0.08 -0.09" radius="0.1" color="#cb2123" shadow></a-sphere>
                <a-sphere id="proton-o2" position="-0.09 -0.08 0" radius="0.1" color="#cb2123" shadow></a-sphere>
                <a-sphere id="proton-o3" position="0.08 0 0" radius="0.1" color="#cb2123" shadow></a-sphere>
                <a-sphere id="proton-o4" position="0.09 -0.09 -0.09" radius="0.1" color="#cb2123" shadow></a-sphere>
                <a-sphere id="proton-o5" position="-0.09 0 0.09" radius="0.1" color="#cb2123" shadow></a-sphere>
                <a-sphere id="proton-o6" position="0.09 0 0" radius="0.1" color="#cb2123" shadow></a-sphere>
                <a-sphere id="proton-o7" position="0.09 -0.05 -0.04" radius="0.1" color="#cb2123" shadow></a-sphere>
                <a-sphere id="proton-o8" position="0.10 0.09 0.04" radius="0.1" color="#cb2123" shadow></a-sphere>
            </a-entity>

            <a-entity id="neutrones-o">
                <a-sphere id="neutron-o-o1" position="-0.04 -0.08 0.05" radius="0.1" color="#f6ff33" shadow></a-sphere>
                <a-sphere id="neutron-o-o2" position="-0.09 0.08 -0.09" radius="0.1" color="#f6ff33" shadow></a-sphere>
                <a-sphere id="neutron-o-o3" position="0.08 -0.07 0.08" radius="0.1" color="#f6ff33" shadow></a-sphere>
                <a-sphere id="neutron-o-o4" position="0.09 0.09 -0.09" radius="0.1" color="#f6ff33" shadow></a-sphere>
                <a-sphere id="neutron-o-o5" position="-0.09 -0.04 0.09" radius="0.1" color="#f6ff33" shadow></a-sphere>
                <a-sphere id="neutron-o-o6" position="-0.09 0.06 0.06" radius="0.1" color="#f6ff33" shadow></a-sphere>
                <a-sphere id="neutron-o-o7" position="0.09 -0.05 -0.04" radius="0.1" color="#f6ff33" shadow></a-sphere>
                <a-sphere id="neutron-o-o8" position="0.10 -0.09 0.04" radius="0.1" color="#f6ff33" shadow></a-sphere>
            </a-entity>

        </a-entity>

        <a-entity rotation="30 0 0" id="atomo-h2" position="2 2 -4">
            <a-entity rotation="0 0 360"
                animation="property: rotation; to: 0 360 0; loop: true; dur: 1200; easing: linear;">
                <a-sphere id="electron-h2" position="0 1 0" radius="0.1" color="#00ffff" shadow></a-sphere>
                <a-torus id="orbita-h" color="#a29a02" radius="1" radius-tubular="0.010"></a-torus>
            </a-entity>
            <a-sphere id="proton-h2" radius="0.1" color="#cb2123" shadow></a-sphere>
        </a-entity>

    </a-scene>
</body>

</html>
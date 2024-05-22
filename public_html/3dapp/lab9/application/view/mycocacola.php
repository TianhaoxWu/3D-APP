<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tinhao Wu Coke Cola Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap-4.4.1.css">
    <link rel="stylesheet" type="text/css" href="css/x3dom.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
</head>


<body id="bodyColor">
    <!-- Logo and navigation bar -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container-fluid">
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="index.html">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
            </div>
            <!-- Collapsible Navbar Menu Icon -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navAbout" class="nav-link" href="#">About</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="#">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid main_contents">
        <!-- Home page block element -->
        <div id="home">
            <div class="row">
                <div class="col-sm-12">
                    <div id="main_3d_image">
                        <div id="main_text" class="col-xs-12 col-sm-4">
                            <div id="title_home"></div>
                            <div id="subTitle_home"></div>
                            <div id="description_home"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Coca Cola Column -->
                <div class="col-sm-4">
                    <div class="card">
                        <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render" class="thumbnail">
                            <img src="assets/images/site_images/coca_cola.jpg" class="card-img-top img-fluid img-thumbnail" alt="Coca Cola">
                        </a>
                        <div class="card-body">
                            <div id="title_left" class="card-title drinksText"></div>
                            <div id="subTitle_left" class="card-subtitle drinksText"></div>
                            <div id="description_left" class="card-text drinksText"></div>
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
                <!-- Sprite Column -->
                <div class="col-sm-4">
                    <div class="card">
                        <a href="assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="thumbnail">
                            <img src="assets/images/site_images/sprite.jpg" class="card-img-top img-fluid img-thumbnail" alt="Sprite">
                        </a>
                        <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
                <!-- Dr Pepper Column -->
                <div class="col-sm-4">
                    <div class="card">
                        <a href="assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                            <img src="assets/images/site_images/dr_pepper.jpg" class="card-img-top img-fluid img-thumbnail" alt="Dr Pepper">
                        </a>
                        <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End home page -->
        <!-- About page block element -->
        <div id="about" style="display: none;">
            Insert About Contents
        </div>
        <!-- Models page block element -->
        <div id="models" style="display: none;">
            <div class="row">
                <!-- Column to hold the X3D Model -->
                <div class="col-sm-8">
                    <div class="card text-left">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a id="navCoke" class="nav-link active" href="#">Coke</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navSprite" class="nav-link" href="#">Sprite</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navPepper" class="nav-link" href="#">Pepper</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Bootstrap 4 card body to hold information about the X3D model -->
                        <div class="card-body">
                            <!-- Coke X3D model -->
                            <div id="coke">
                                <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                                <!-- Place the X3D code here -->
                                <div class="model3D">
                                    <x3d width="100%" height="100%">
                                        <scene>
                                            <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/coke.x3d"></inline>
                                            <Viewpoint id="coke_front" position="5.03582 0.02909 -0.13785" orientation="0.12438 0.88623 0.06752 1.47856" description="front camera"></Viewpoint>

                                            <Viewpoint id="coke_left" position="0.63950 0.03621 1.40501" orientation="-0.06167 0.99782 -0.02363 0.42786" description="left camera"></Viewpoint>
                                            <Viewpoint id="coke_right" position="-1.12163 0.04221 -1.06042" orientation="0.00604 0.99989 0.01361 3.95496" description="right camera"></Viewpoint>
                                            <Viewpoint id="coke_back" position="-2.03582 0.02909 2.13785" orientation="-0.10907 -0.99332 -0.03757 0.74288" description="back camera"></Viewpoint>
                                            <Viewpoint id="coke_top" position="-0.01691 1.54348 -0.04138" orientation="0.29928 0.68529 0.66394 3.72203" description="top camera"></Viewpoint>
                                            <Viewpoint id="coke_bottom" position="0.04211 -1.66676 0.06189" orientation="0.32277 -0.65260 0.68551 2.52624" description="bottom camera"></Viewpoint>
                                            <Viewpoint id="coke_default" position="1.20052 0.96823 0.07484" orientation="-0.59506 0.80255 0.04266 1.52405" description="default camera"></Viewpoint>
                                        </scene>
                                    </x3d>
                                </div>
                                <!-- Camera control buttons -->
                                 <!-- Start the interaction panels -->
                                <div id="interaction" class="row" style="display: none;">
                                    <!-- Column for the camera view controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                           
                                                <div class="card-header card-Title x3dCamera_Subtitle drinksText">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        
                                            <div class="card-body">
                                                <div class="card-Title x3dCamera_Subtitle drinksText">
                                                    <h3>Camera Views</h3>
                                                </div>
                                                <a href="#" class="btn btn-success btn-responsive" onclick="document.getElementById('coke_front').setAttribute('set_bind','true');">Front</a>
                                                <a href="#" class="btn btn-primary btn-responsive" onclick="document.getElementById('coke_back').setAttribute('set_bind','true');">Back</a>
                                                <a href="#" class="btn btn-secondary btn-responsive" onclick="document.getElementById('coke_left').setAttribute('set_bind','true');">Left</a>
                                                <a href="#" class="btn btn-secondary btn-responsive" onclick="document.getElementById('coke_right').setAttribute('set_bind','true');">Right</a>
                                                <a href="#" class="btn btn-warning btn-responsive" onclick="document.getElementById('coke_top').setAttribute('set_bind','true');">Top</a>
                                                <a href="#" class="btn btn-info btn-responsive" onclick="document.getElementById('coke_bottom').setAttribute('set_bind','true');">Bottom</a>
                                                <a href="#" class="btn btn-outline-dark btn-responsive" onclick="document.getElementById('coke_default').setAttribute('set_bind','true');">Default</a>
                                                <div class="card-text x3dCameraDescription drinksText">
                                                    <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                                                </div>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    <!-- Column for the animation controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Animation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-Title x3dAnimationSubtitle drinksText">
                                                    <h3>Animation Options</h3>
                                                </div>
                                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                                                <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                                                <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                                                <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                                                <div class="card-text x3dAnimationDescription drinksText">
                                                    <p>These buttons select a range of X3D animation options</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column for the render type and lighting controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Polygon</a>
                                                            <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                                            <a class="dropdown-item" href="#">Vertex</a>
                                                        </div>
                                                    </li>
                                                    <!-- Dropdown nav-tab -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Default</a>
                                                            <a class="dropdown-item" href="#">Omni On/Off</a>
                                                            <a class="dropdown-item" href="#">Target On/Off</a>
                                                            <a class="dropdown-item" href="#">Headlight On/Off</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-Title x3dRendersubtitle drinksText">
                                                    <h3>Render and Lighting Options</h3>
                                                </div>
                                                <a href="#" class="btn btn-success btn-responsive">Poly</a>
                                                <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                                                <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                                                <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                                                <div class="card-text x3dRenderDescription drinksText">
                                                    <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End the interaction panels -->
                              <!--<div class="btn-group">
                                    <a class="btn btn-primary btn-responsive camera-font" onclick="document.getElementById('coke_front').setAttribute('set_bind','true');">Front</a>
                                    <a class="btn btn-secondary btn-responsive camera-font" onclick="document.getElementById('coke_back').setAttribute('set_bind','true');">Back</a>
                                    <a class="btn btn-success btn-responsive camera-font" onclick="document.getElementById('coke_left').setAttribute('set_bind','true');">Left</a>
                                    <a class="btn btn-danger btn-responsive camera-font" onclick="document.getElementById('coke_right').setAttribute('set_bind','true');">Right</a>
                                    <a class="btn btn-warning btn-responsive camera-font" onclick="document.getElementById('coke_top').setAttribute('set_bind','true');">Top</a>
                                    <a class="btn btn-info btn-responsive camera-font" onclick="document.getElementById('coke_bottom').setAttribute('set_bind','true');">Bottom</a>
                                    <a class="btn btn-outline-dark btn-responsive camera-font" onclick="document.getElementById('coke_default').setAttribute('set_bind','true');">Default</a>
                                </div>-->
                                <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                            </div>
                            <!-- Sprite X3D model -->
                            <div id="sprite" style="display: none;">
                                <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                                <!-- Place the X3D code here -->
                                <div class="model3D">
                                    <x3d width="100%" height="100%">
                                        <scene>
                                            <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/sprite.x3d"></inline>
                                            <Viewpoint id="sprite_front" position="2.52697 0.19608 -0.11927" orientation="-0.05438 0.99623 0.06752 1.65306" description="front camera"></Viewpoint>
                                            <Viewpoint id="sprite_left" position="1.63950 0.03621 2.40501" orientation="-0.06167 0.99782 -0.02363 0.42786" description="left camera"></Viewpoint>
                                            <Viewpoint id="sprite_right" position="-2.12163 0.04221 -2.06042" orientation="0.00604 0.99989 0.01361 3.95496" description="right camera"></Viewpoint>
                                            <Viewpoint id="sprite_back" position="-2.03582 0.12909 2.13785" orientation="-0.10907 -0.99332 -0.03757 0.74288" description="back camera"></Viewpoint>
                                            <Viewpoint id="sprite_top" position="-0.01691 1.54348 -0.04138" orientation="0.29928 0.68529 0.66394 3.72203" description="top camera"></Viewpoint>
                                            <Viewpoint id="sprite_bottom" position="0.04211 -1.66676 0.06189" orientation="0.32277 -0.65260 0.68551 2.52624" description="bottom camera"></Viewpoint>
                                            <Viewpoint id="sprite_default" position="1.20052 0.96823 0.07484" orientation="-0.59506 0.80255 0.04266 1.52405" description="default camera"></Viewpoint>
                                        </scene>
                                    </x3d>
                                </div>
                                <!-- Camera control buttons -->
                                <div id="interaction" class="row" >
                                    <!-- Column for the camera view controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                           
                                                <div class="card-header card-Title x3dCamera_Subtitle drinksText">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        
                                            <div class="card-body">
                                                <div class="card-Title x3dCamera_Subtitle drinksText">
                                                    <h3>Camera Views</h3>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary btn-responsive camera-font" onclick="document.getElementById('sprite_front').setAttribute('set_bind','true');">Front</a>
                                                    <a class="btn btn-secondary btn-responsive camera-font" onclick="document.getElementById('sprite_back').setAttribute('set_bind','true');">Back</a>
                                                    <a class="btn btn-success btn-responsive camera-font" onclick="document.getElementById('sprite_left').setAttribute('set_bind','true');">Left</a>
                                                    <a class="btn btn-danger btn-responsive camera-font" onclick="document.getElementById('sprite_right').setAttribute('set_bind','true');">Right</a>
                                                    <a class="btn btn-warning btn-responsive camera-font" onclick="document.getElementById('sprite_top').setAttribute('set_bind','true');">Top</a>
                                                    <a class="btn btn-info btn-responsive camera-font" onclick="document.getElementById('sprite_bottom').setAttribute('set_bind','true');">Bottom</a>
                                                    <a class="btn btn-outline-dark btn-responsive camera-font" onclick="document.getElementById('sprite_default').setAttribute('set_bind','true');">Default</a>
                                                </div>
                                                <div class="card-text x3dCameraDescription drinksText">
                                                    <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                                                </div>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    <!-- Column for the animation controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Animation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-Title x3dAnimationSubtitle drinksText">
                                                    <h3>Animation Options</h3>
                                                </div>
                                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                                                <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                                                <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                                                <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                                                <div class="card-text x3dAnimationDescription drinksText">
                                                    <p>These buttons select a range of X3D animation options</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column for the render type and lighting controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Polygon</a>
                                                            <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                                            <a class="dropdown-item" href="#">Vertex</a>
                                                        </div>
                                                    </li>
                                                    <!-- Dropdown nav-tab -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Default</a>
                                                            <a class="dropdown-item" href="#">Omni On/Off</a>
                                                            <a class="dropdown-item" href="#">Target On/Off</a>
                                                            <a class="dropdown-item" href="#">Headlight On/Off</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-Title x3dRendersubtitle drinksText">
                                                    <h3>Render and Lighting Options</h3>
                                                </div>
                                                <a href="#" class="btn btn-success btn-responsive">Poly</a>
                                                <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                                                <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                                                <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                                                <div class="card-text x3dRenderDescription drinksText">
                                                    <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End the interaction panels -->
                                
                                <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                            </div>
                            <!-- Dr Pepper X3D model -->
                            <div id="pepper" style="display: none;">
                                <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                                <!-- Place the X3D code here -->
                                <div class="model3D">
                                    <x3d width="100%" height="100%">
                                        <scene>
                                            <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/pepper.x3d"></inline>
                                            <Viewpoint id="pepper_front" position="2.52697 1 -0.11927" orientation="-0.05438 0.99623 0.06752 1.65306" description="front camera"></Viewpoint>
                                            <Viewpoint id="pepper_left" position="1.63950 0.5 3.40501" orientation="-0.06167 0.99782 -0.02363 0.42786" description="left camera"></Viewpoint>
                                            <Viewpoint id="pepper_right" position="-2.5 0.54221 -2.06042" orientation="0.00604 0.99989 0.01361 3.95496" description="right camera"></Viewpoint>
                                            <Viewpoint id="pepper_back" position="-3.03582 1.12909 3.13785" orientation="-0.10907 -0.99332 -0.03757 0.74288" description="back camera"></Viewpoint>
                                            <Viewpoint id="pepper_top" position="-0.01691 3.54348 -0.04138" orientation="0.29928 0.68529 0.66394 3.72203" description="top camera"></Viewpoint>
                                            <Viewpoint id="pepper_bottom" position="0.04211 -2.66676 0.06189" orientation="0.32277 -0.65260 0.68551 2.52624" description="bottom camera"></Viewpoint>
                                            <Viewpoint id="pepper_default" position="1.20052 0.96823 0.07484" orientation="-0.59506 0.80255 0.04266 1.52405" description="default camera"></Viewpoint>
                                        </scene>
                                    </x3d>
                                </div>
                                <!-- Camera control buttons -->
                                <div id="interaction" class="row" >
                                    <!-- Column for the camera view controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                           
                                                <div class="card-header card-Title x3dCamera_Subtitle drinksText">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        
                                            <div class="card-body">
                                                <div class="card-Title x3dCamera_Subtitle drinksText">
                                                    <h3>Camera Views</h3>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary btn-responsive camera-font" onclick="document.getElementById('pepper_front').setAttribute('set_bind','true');">Front</a>
                                                    <a class="btn btn-secondary btn-responsive camera-font" onclick="document.getElementById('pepper_back').setAttribute('set_bind','true');">Back</a>
                                                    <a class="btn btn-success btn-responsive camera-font" onclick="document.getElementById('pepper_left').setAttribute('set_bind','true');">Left</a>
                                                    <a class="btn btn-danger btn-responsive camera-font" onclick="document.getElementById('pepper_right').setAttribute('set_bind','true');">Right</a>
                                                    <a class="btn btn-warning btn-responsive camera-font" onclick="document.getElementById('pepper_top').setAttribute('set_bind','true');">Top</a>
                                                    <a class="btn btn-info btn-responsive camera-font" onclick="document.getElementById('pepper_bottom').setAttribute('set_bind','true');">Bottom</a>
                                                    <a class="btn btn-outline-dark btn-responsive camera-font" onclick="document.getElementById('pepper_default').setAttribute('set_bind','true');">Default</a>
                                                </div>
                                                <div class="card-text x3dCameraDescription drinksText">
                                                    <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                                                </div>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    <!-- Column for the animation controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Animation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-Title x3dAnimationSubtitle drinksText">
                                                    <h3>Animation Options</h3>
                                                </div>
                                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                                                <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                                                <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                                                <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                                                <div class="card-text x3dAnimationDescription drinksText">
                                                    <p>These buttons select a range of X3D animation options</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column for the render type and lighting controls -->
                                    <div class="col-sm-4">
                                        <div class="card text-left">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Polygon</a>
                                                            <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                                            <a class="dropdown-item" href="#">Vertex</a>
                                                        </div>
                                                    </li>
                                                    <!-- Dropdown nav-tab -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Default</a>
                                                            <a class="dropdown-item" href="#">Omni On/Off</a>
                                                            <a class="dropdown-item" href="#">Target On/Off</a>
                                                            <a class="dropdown-item" href="#">Headlight On/Off</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-Title x3dRendersubtitle drinksText">
                                                    <h3>Render and Lighting Options</h3>
                                                </div>
                                                <a href="#" class="btn btn-success btn-responsive">Poly</a>
                                                <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                                                <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                                                <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                                                <div class="card-text x3dRenderDescription drinksText">
                                                    <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End the interaction panels -->
                               
                                <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column for the 3D model details -->
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header gallery-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Gallery</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="card-title title_gallery drinksText"></div>
                            <div class="gallery" id="gallery_coke"></div>
                            <div class="card-text description_gallery drinksText"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       

        <!-- Row to hold 1 card to hold the coca cola descriptive text, etc. -->
        <div id="cokeDescription" class="row" style="display: none;">
            <!-- Coca Cola Column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End coke page -->

        <!-- Row to hold 1 card to hold the sprite descriptive text, etc.-->
        <div id="spriteDescription" class="row" style="display: none;">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>
                    </div>
                </div>
            </div>
        </div> <!-- End sprite page -->

        <!-- Row to hold 1 card to hold the pepper descriptive text, etc.-->
        <div id="pepperDescription" class="row" style="display: none;">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Visit Pepper</a>
                    </div>
                </div>
            </div>
        </div> <!-- End pepper page -->
    </div>

    <!-- Your 3D App footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline"></span>&copy; Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            <div class="navbar-text social">
                <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav>

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">3D App Contact Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>Tianhao Wu, University of Sussex, Email: tw430@sussex.ac.uk</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
    <script src="js/x3dom.js"></script>
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
    <script src="js/custom.js" crossorigin="anonymous"></script>
    <script src="js/swap_restyle.js"></script>
    <script src="js/gallery_generator.js"></script>
    <script src="js/getJsonData.js"></script>
    <script src="js/modelInteractions.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
</body>
</html>
